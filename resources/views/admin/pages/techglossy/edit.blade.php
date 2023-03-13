@extends('admin.master')
@section('content')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<div class="content-wrapper">

    <!-- Inner content -->


        <!-- Page header -->
        <div class="page-header page-header-light shadow">
            <div class="page-header-content d-lg-flex border-top">
                <div class="d-flex">
                    <div class="breadcrumb py-2">
                        <a href="index.html" class="breadcrumb-item"><i class="ph-house"></i></a>
                        <a href="{{route('admin.dashboard')}}" class="breadcrumb-item">Home</a>
                        <span class="breadcrumb-item active">Tech Glossy Management</span>
                    </div>
                </div>
            </div>
        </div>
        <!-- /page header -->


        <!-- Content area -->
        <div class="content">
            <div class="row">
                <div class="col-lg-2"></div>
                <div class="col-lg-8">
                    <div class="card">
                        <div class="card-header">

                            <h5 class="mb-0 float-start">Tech Glossy Edit Form</h5>
                            <a href="{{route('techglossy.index')}}" type="button" class="btn btn-sm btn-success btn-labeled btn-labeled-start float-end">
                                <span class="btn-labeled-icon bg-black bg-opacity-20">
                                    <i class="icon-eye"></i>
                                </span>
                                All Tech Glossy
                            </a>
                        </div>

                        <div class="card-body">
                            <form method="post" action="{{ route('techglossy.update', $story->id) }}"
                                enctype="multipart/form-data" id="myform">
                                @csrf
                                @method('PUT')
                                <input type="hidden" name="id" value="{{$story->id}}"/>
                                <div class="row mb-3 border p-3">
                                    <div class="col-lg-4">
                                        <div class="col-sm-12">
                                            <h6 class="mb-0">Author <span class="text-danger"> * </span></h6>
                                        </div>
                                        <div class="form-group col-sm-10 text-secondary">
                                            <input type="text" name="created_by" class="form-control maxlength"
                                                maxlength="255" value="{{$story->created_by}}"/>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="col-sm-12">
                                            <h6 class="mb-0">Badge Name <span class="text-danger"> * </span></h6>
                                        </div>
                                        <div class="form-group col-sm-10 text-secondary">
                                            <input type="text" name="badge" class="form-control maxlength"
                                                maxlength="255" value="{{$story->badge}}"/>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 mt-4">
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" name="featured" value="1" {{ ($story->featured == 1) ? 'checked' : '' }}>
                                            <label class="form-check-label" for="cc_ls_c" >Featured</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <div class="col-lg-3 mb-3">
                                        <div class="col-sm-12">
                                            <h6 class="mb-0"> Brands</h6>
                                        </div>
                                        <div class="form-group text-secondary col-sm-12">
                                            <select name="brand_id[]" class="form-control multiselect"
                                                multiple="multiple" data-include-select-all-option="true"
                                                data-enable-filtering="true"
                                                data-enable-case-insensitive-filtering="true">
                                                    @php
                                                        $brandIds = isset($story->brand_id) ? json_decode($story->brand_id, true) : [];
                                                        $brands = App\Models\Admin\Brand::pluck('title', 'id')->toArray();
                                                    @endphp
                                                    @foreach ($brands as $id => $title)
                                                        <option value="{{ $id }}"
                                                        {{ is_array($brandIds) && in_array($id, $brandIds) ? 'selected' : '' }}>
                                                        {{ $title }}
                                                        </option>
                                                    @endforeach

                                            </select>

                                        </div>
                                    </div>
                                    <div class="col-lg-3 mb-3">
                                        <div class="col-sm-12">
                                            <h6 class="mb-0"> Categories</h6>
                                        </div>
                                        <div class="form-group text-secondary col-sm-12">
                                            <select name="category_id[]" class="form-control multiselect" multiple="multiple"
                                                data-include-select-all-option="true" data-enable-filtering="true"
                                                data-enable-case-insensitive-filtering="true">
                                                @php
                                                    $categoryIds = isset($story->category_id) ? json_decode($story->category_id, true) : [];
                                                    $categories = App\Models\Admin\Category::pluck('title', 'id')->toArray();
                                                @endphp

                                                @foreach ($categories as $id => $title)
                                                    <option value="{{ $id }}"
                                                        {{ is_array($categoryIds) && in_array($id, $categoryIds) ? 'selected' : '' }}>
                                                        {{ $title }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 mb-3">
                                        <div class="col-sm-12">
                                            <h6 class="mb-0">Industries</h6>
                                        </div>
                                        <div class="form-group text-secondary col-sm-12">
                                            <select name="industry_id[]" class="form-control multiselect" multiple="multiple"
                                                data-include-select-all-option="true" data-enable-filtering="true"
                                                data-enable-case-insensitive-filtering="true">

                                                @php
                                                    $industryIds = isset($story->industry_id) ? json_decode($story->industry_id, true) : [];
                                                    $industries = App\Models\Admin\Industry::pluck('title', 'id')->toArray();
                                                @endphp

                                                @foreach ($industries as $id => $title)
                                                    <option value="{{ $id }}"
                                                        {{ is_array($industryIds) && in_array($id, $industryIds) ? 'selected' : '' }}>
                                                        {{ $title }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 mb-3">
                                        <div class="col-sm-12">
                                            <h6 class="mb-0">Solutions</h6>
                                        </div>
                                        <div class="form-group text-secondary col-sm-12">

                                            <select name="solution_id[]" class="form-control multiselect" multiple="multiple"
                                                data-include-select-all-option="true" data-enable-filtering="true"
                                                data-enable-case-insensitive-filtering="true">

                                                @php
                                                    $solutionIds = isset($story->solution_id) ? json_decode($story->solution_id, true) : [];
                                                    $solutions = App\Models\Admin\SolutionDetail::pluck('name', 'id')->toArray();
                                                @endphp

                                                @foreach ($solutions as $id => $title)
                                                    <option value="{{ $id }}"
                                                        {{ is_array($solutionIds) && in_array($id, $solutionIds) ? 'selected' : '' }}>
                                                        {{ $title }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Title</h6>
                                    </div>
                                    <div class="form-group col-sm-9 text-secondary">
                                        <input type="text" value="{{ $story->title }}" name="title"
                                            class="form-control maxlength" maxlength="100" />
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Header</h6>
                                    </div>
                                    <div class="form-group col-sm-9 text-secondary">
                                        <textarea class="form-control maxlength" name="header" id="" maxlength="500" cols="30" rows="3">{{ $story->header }}</textarea>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">
                                            Tags</h6>
                                    </div>
                                    <div class="form-group col-sm-9 text-secondary">
                                        <input type="text" name="tags" class="form-control visually-hidden" data-role="tagsinput" value="{{ $story->tags }}">
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Banner Image </h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                        <input type="file" value="" name="image" class="form-control"
                                            id="image" accept="image/*" />
                                        <div class="form-text">Accepts only png, jpg, jpeg images</div>
                                        <img id="showImage" height="100px" width="100px"
                                            src="{{ asset('storage/thumb/'.$story->image) }}">
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Featured Description</h6>
                                    </div>
                                    <div class="form-group col-sm-9 text-secondary">
                                        <textarea class="form-control" name="short_des" id="featured_desc" style=" font-size: 12px; font-weight: 500;">{!! $story->short_des !!}</textarea>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0"> Description</h6>
                                    </div>
                                    <div class="form-group col-sm-9 text-secondary">
                                        <textarea class="form-control" name="long_des" id="long_desc" style=" font-size: 12px; font-weight: 500;">{!! $story->long_des !!}</textarea>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Footer </h6>
                                    </div>
                                    <div class="form-group col-sm-9 text-secondary">
                                        <textarea class="form-control" name="footer" id="footer" style=" font-size: 12px; font-weight: 500;">{!! $story->footer !!}</textarea>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6"></div>
                                    <div class="col-sm-4 text-secondary">
                                        <button type="submitbtn" class="btn btn-primary from-prevent-multiple-submits">Update<i
                                            class="ph-paper-plane-tilt ms-2"></i></button>
                                    </div>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /content area -->
    <!-- /inner content -->

</div>
@endsection

