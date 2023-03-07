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

                    <a href="#breadcrumb_elements"
                        class="btn btn-light align-self-center collapsed d-lg-none border-transparent rounded-pill p-0 ms-auto"
                        data-bs-toggle="collapse">
                        <i class="ph-caret-down collapsible-indicator ph-sm m-1"></i>
                    </a>
                </div>
            </div>
        </div>
        <!-- /page header -->


        <!-- Content area -->
        <div class="content">
            <div class="row">
                <div class="col-lg-1"></div>
                <div class="col-lg-10">
                    <div class="card">
                        <div class="card-header">

                            <div class="row">
                                <div class="col-lg-8">
                                    <h4 class="mb-0 text-center">Add Blog Form</h4>
                                </div>
                                <div class="col-lg-4">
                                    <a href="{{ route('blog.index') }}" type="button"
                                        class="btn btn-sm btn-warning btn-labeled btn-labeled-start float-end">
                                        <span class="btn-labeled-icon bg-black bg-opacity-20">
                                            <i class="icon-plus2"></i>
                                        </span>
                                        All Blog
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="card-body">
                            <form id="myform" method="post" action="{{ route('blog.store') }}"
                                enctype="multipart/form-data">
                                @csrf


                                <div class="row mb-3 border p-3">
                                    <div class="col-lg-4">
                                        <div class="col-sm-3">
                                            <h6 class="mb-0">Author <span class="text-danger"> * </span></h6>
                                        </div>
                                        <div class="form-group col-sm-10 text-secondary">
                                            <input type="text" name="created_by" class="form-control maxlength"
                                                maxlength="255" />
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="col-sm-12">
                                            <h6 class="mb-0">Badge Name <span class="text-danger"> * </span></h6>
                                        </div>
                                        <div class="form-group col-sm-10 text-secondary">
                                            <input type="text" name="badge" class="form-control maxlength"
                                                maxlength="255" />
                                        </div>
                                    </div>
                                    <div class="col-lg-4 mt-4">
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" name="featured" value="1">
                                            <label class="form-check-label" for="cc_ls_c">Featured</label>
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
                                                @foreach ($brands as $brand)
                                                    <option value="{{ $brand->id }}">{{ $brand->title }} </option>
                                                @endforeach
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
                                                @foreach ($categories as $category)
                                                    <option value="{{ $category->id }}">{{ $category->title }} </option>
                                                @endforeach
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
                                                @foreach ($industries as $industrie)
                                                    <option value="{{ $industrie->id }}">{{ $industrie->title }}
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
                                            <select name="solution_id[]" class="form-control multiselect"
                                                multiple="multiple" data-include-select-all-option="true"
                                                data-enable-filtering="true"
                                                data-enable-case-insensitive-filtering="true">
                                                @foreach ($solutionDetails as $solutionDetail)
                                                    <option value="{{ $solutionDetail->id }}">{{ $solutionDetail->name }} </option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>



                                <div class="row mb-3">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Title <span class="text-danger"> * </span></h6>
                                    </div>
                                    <div class="form-group col-sm-9 text-secondary">
                                        <input type="text" name="title" class="form-control maxlength"
                                            maxlength="180" />
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Header</h6>
                                    </div>
                                    <div class="form-group col-sm-9 text-secondary">
                                        <textarea class="form-control maxlength" name="header" id="" maxlength="500" cols="30" rows="3"></textarea>
                                    </div>
                                </div>


                                <div class="row mb-3">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Banner Image <span class="text-danger">*</span>  </h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                        <input type="file" name="image" class="form-control" id="image"
                                            accept="image/*" />
                                        <div class="form-text">Accepts only png, jpg, jpeg images</div>
                                        <img id="showImage" height="100px" width="100px"
                                            src="https://cdn.pixabay.com/photo/2017/02/07/02/16/cloud-2044823_960_720.png"
                                            alt="">
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Tags <span class="text-danger"> * </span></h6>
                                    </div>
                                    <div class="form-group col-sm-9 text-secondary">
                                        <input type="text" class="form-control tokenfield-basic" placeholder="Related Tags" name="tags[]">
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Featured Description</h6>
                                    </div>
                                    <div class="form-group col-sm-9 text-secondary">
                                        <textarea class="form-control" name="short_des" id="featured_desc" style=" font-size: 12px; font-weight: 500;"></textarea>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0"> Description</h6>
                                    </div>
                                    <div class="form-group col-sm-9 text-secondary">
                                        <textarea class="form-control" name="long_des" id="long_desc" style=" font-size: 12px; font-weight: 500;"></textarea>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Footer </h6>
                                    </div>
                                    <div class="form-group col-sm-9 text-secondary">
                                        <textarea class="form-control" name="footer" id="footer" style=" font-size: 12px; font-weight: 500;"></textarea>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6"></div>
                                    <div class="col-sm-4 text-secondary">
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
