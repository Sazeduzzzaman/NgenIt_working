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
                        <a href="{{ route('admin.dashboard') }}" class="breadcrumb-item">Home</a>
                        <span class="breadcrumb-item active">Blog Management</span>
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

                            <h5 class="mb-0 float-start">Blog Edit Form</h5>
                            <a href="{{ route('blog.index') }}" type="button"
                                class="btn btn-sm btn-success btn-labeled btn-labeled-start float-end">
                                <span class="btn-labeled-icon bg-black bg-opacity-20">
                                    <i class="icon-eye"></i>
                                </span>
                                All Blogs
                            </a>
                        </div>

                        <div class="card-body">
                            <form method="post" action="{{ route('blog.update', $blog->id) }}"
                                enctype="multipart/form-data" id="myform">
                                @csrf
                                @method('PUT')
                                <div class="row mb-3 border p-3">
                                    <div class="col-lg-4">
                                        <div class="col-sm-12">
                                            <h6 class="mb-0">Author <span class="text-danger"> * </span></h6>
                                        </div>
                                        <div class="form-group col-sm-10 text-secondary">
                                            <input type="text" name="created_by" class="form-control maxlength"
                                                maxlength="255" value="{{$blog->created_by}}"/>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="col-sm-12">
                                            <h6 class="mb-0">Badge Name <span class="text-danger"> * </span></h6>
                                        </div>
                                        <div class="form-group col-sm-10 text-secondary">
                                            <input type="text" name="badge" class="form-control maxlength"
                                                maxlength="255" value="{{$blog->badge}}"/>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 mt-4">
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" name="featured" value="1" {{ ($blog->featured == 1) ? 'checked' : '' }}>
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
                                                        if (isset($blog->brand_id)) {
                                                            $brand_ids = json_decode($blog->brand_id);
                                                        } else {
                                                            $brand_ids = [];
                                                        }
                                                    @endphp
                                                    @if (isset($brand_ids))
                                                        @foreach ($brand_ids as $id)
                                                            <option value="{{ $id }}"
                                                                {{ in_array($id, $brand_ids) ? 'selected' : '' }}>
                                                                {{ App\Models\Admin\Brand::where('id', $id)->value('title') }}
                                                            </option>
                                                        @endforeach
                                                    @else
                                                        <option></option>
                                                    @endif
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 mb-3">
                                        <div class="col-sm-12">
                                            <h6 class="mb-0"> Categories</h6>
                                        </div>
                                        <div class="form-group text-secondary col-sm-12">
                                            <select name="category_id[]" class="form-control multiselect"
                                                multiple="multiple" data-include-select-all-option="true"
                                                data-enable-filtering="true"
                                                data-enable-case-insensitive-filtering="true">
                                                    @php
                                                        if (isset($blog->category_id)) {
                                                            $category_ids = json_decode($blog->category_id);
                                                        } else {
                                                            $category_ids = [];
                                                        }
                                                    @endphp
                                                    @if (isset($category_ids))
                                                        @foreach ($category_ids as $id)
                                                            <option value="{{ $id }}"
                                                                {{ in_array($id, $category_ids) ? 'selected' : '' }}>
                                                                {{ App\Models\Admin\Category::where('id', $id)->value('title') }}
                                                            </option>
                                                        @endforeach
                                                    @else
                                                        <option></option>
                                                    @endif
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 mb-3">
                                        <div class="col-sm-12">
                                            <h6 class="mb-0">Industries</h6>
                                        </div>
                                        <div class="form-group text-secondary col-sm-12">
                                            <select name="industry_id[]" class="form-control multiselect"
                                                multiple="multiple" data-include-select-all-option="true"
                                                data-enable-filtering="true"
                                                data-enable-case-insensitive-filtering="true">
                                                    @php
                                                        if (isset($blog->industry_id)) {
                                                            $industry_ids = json_decode($blog->industry_id);
                                                        } else {
                                                            $industry_ids = [];
                                                        }
                                                    @endphp
                                                    @if (isset($industry_ids))
                                                        @foreach ($industry_ids as $id)
                                                            <option value="{{ $id }}"
                                                                {{ in_array($id, $industry_ids) ? 'selected' : '' }}>
                                                                {{ App\Models\Admin\Industry::where('id', $id)->value('title') }}
                                                            </option>
                                                        @endforeach
                                                    @else
                                                        <option></option>
                                                    @endif
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 mb-3">
                                        <div class="col-sm-12">
                                            <h6 class="mb-0">Solutions</h6>
                                        </div>
                                        <div class="form-group text-secondary col-sm-12">
                                            <select name="solution_id[]" class="form-control multiselect"
                                                multiple="multiple" data-include-select-all-option="true"
                                                data-enable-filtering="true"
                                                data-enable-case-insensitive-filtering="true">
                                                    @php
                                                        if (isset($blog->solution_id)) {
                                                            $solution_ids = json_decode($blog->solution_id);
                                                        } else {
                                                            $solution_ids = [];
                                                        }
                                                    @endphp
                                                    @if (isset($solution_ids))
                                                        @foreach ($solution_ids as $id)
                                                            <option value="{{ $id }}"
                                                                {{ in_array($id, $solution_ids) ? 'selected' : '' }}>
                                                                {{ App\Models\Admin\SolutionDetail::where('id', $id)->value('name') }}
                                                            </option>
                                                        @endforeach
                                                    @else
                                                        <option></option>
                                                    @endif
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Title</h6>
                                    </div>
                                    <div class="form-group col-sm-9 text-secondary">
                                        <input type="text" value="{{ $blog->title }}" name="title"
                                            class="form-control maxlength" maxlength="180" />
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Header</h6>
                                    </div>
                                    <div class="form-group col-sm-9 text-secondary">
                                        <textarea class="form-control maxlength" name="header" id="" maxlength="500" cols="30" rows="3">{{ $blog->header }}</textarea>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">
                                            Tags</h6>
                                    </div>
                                    <div class="form-group col-sm-9 text-secondary">
                                        <input type="text" class="form-control tokenfield-basic" placeholder="Related Tags" name="tags" value="{{ $blog->tags }}">
                                        
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
                                            src="{{ asset('storage/thumb/'.$blog->image) }}">
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Featured Description</h6>
                                    </div>
                                    <div class="form-group col-sm-9 text-secondary">
                                        <textarea class="form-control" name="short_des" id="featured_desc" style=" font-size: 12px; font-weight: 500;">{!! $blog->short_des !!}</textarea>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0"> Description</h6>
                                    </div>
                                    <div class="form-group col-sm-9 text-secondary">
                                        <textarea class="form-control" name="long_des" id="long_desc" style=" font-size: 12px; font-weight: 500;">{!! $blog->long_des !!}</textarea>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Footer </h6>
                                    </div>
                                    <div class="form-group col-sm-9 text-secondary">
                                        <textarea class="form-control" name="footer" id="footer" style=" font-size: 12px; font-weight: 500;">{!! $blog->footer !!}</textarea>
                                    </div>
                                </div>


                                {{-- <div class="row mb-3">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">
                                            Industries</h6>
                                    </div>
                                    <div class="form-group col-sm-9 text-secondary">
                                        <select value="" name="industries[]"
                                            data-placeholder="Select a industries..." multiple="multiple"
                                            class="form-control select">

                                            @php
                                                if (isset($blog->industries)) {
                                                    $industries = json_decode($blog->industries);
                                                } else {
                                                    $industries = [];
                                                }
                                            @endphp
                                            @if (isset($industries))
                                                @foreach ($industries as $industrie)
                                                    @php
                                                        $industrieFirst = App\Models\Admin\Industry::where('id', $industrie)->first();
                                                    @endphp
                                                    <option value="{{ $industrieFirst }}"
                                                        {{ in_array($industrie, $industries) ? 'selected' : '' }}>
                                                        {{ $industrieFirst }}
                                                    </option>
                                                @endforeach
                                            @else
                                                <option value=""></option>
                                            @endif
                                        </select>
                                    </div>
                                </div> --}}
                                {{-- <div class="row mb-3">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">
                                            Solutions</h6>
                                    </div>
                                    <div class="form-group col-sm-9 text-secondary">
                                        <select value="" name="solutions[]"
                                            data-placeholder="Select a solutions..." multiple="multiple"
                                            class="form-control select">
                                            @php
                                                if (isset($blog->solutions)) {
                                                    $solutions = json_decode($blog->solutions);
                                                } else {
                                                    $solutions = [];
                                                }
                                            @endphp
                                            @if (isset($solutions))
                                                @foreach ($solutions as $solution)
                                                    @php
                                                        $solutionFirst = App\Models\Admin\Solution::where('id', $solution)->first();
                                                    @endphp
                                                    <option value="{{ $solutionFirst->id }}"
                                                        {{ in_array($solution, $solutions) ? 'selected' : '' }}>
                                                        {{ $solutionFirst->title }}
                                                    </option>
                                                @endforeach
                                            @else
                                                <option value=""></option>
                                            @endif
                                        </select>
                                    </div>
                                </div> --}}

                                <div class="row">
                                    <div class="col-sm-3"></div>
                                    <div class="col-sm-9 text-secondary">
                                        <button type="submit" class="btn btn-primary" id="submitbtn">Submit<i
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
