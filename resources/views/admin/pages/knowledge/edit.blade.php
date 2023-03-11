@extends('admin.master')
@section('content')
    <div class="content-wrapper">

        <!-- Inner content -->


        <!-- Page header -->
        <div class="page-header page-header-light shadow">
            <div class="page-header-content d-lg-flex border-top">
                <div class="d-flex">
                    <div class="breadcrumb py-2">
                        <a href="index.html" class="breadcrumb-item"><i class="ph-house"></i></a>
                        <a href="{{ route('admin.dashboard') }}" class="breadcrumb-item">Home</a>
                        <span class="breadcrumb-item active">knowledge Management</span>
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

                            <h5 class="mb-0 float-start">knowledge Edit Form</h5>
                            <a href="{{ route('knowledge.index') }}" type="button"
                                class="btn btn-sm btn-success btn-labeled btn-labeled-start float-end">
                                <span class="btn-labeled-icon bg-black bg-opacity-20">
                                    <i class="icon-eye"></i>
                                </span>
                                All knowledge
                            </a>
                        </div>

                        <div class="card-body">
                            <form method="post" action="{{ route('knowledge.update', $knowledge->id) }}"
                                enctype="multipart/form-data" id="myform">
                                @csrf
                                @method('PUT')
                                <div class="row mb-3">
                                    <div class="col-sm-4">
                                        <h6 class="mb-0">Type</h6>
                                    </div>
                                    <div class="form-group text-secondary col-sm-8">
                                        <select name="type" class="form-control select"
                                            data-placeholder="Chose any type">
                                            <option></option>
                                            <option @selected( $knowledge->type == 'sales') value="sales">Sales</option>
                                            <option @selected( $knowledge->type == 'technical') value="technical">Technical</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-sm-4">
                                        <h6 class="mb-0">Category Name</h6>
                                    </div>
                                    <div class="form-group text-secondary col-sm-8">
                                        <select name="category_id[]" class="form-control multiselect" multiple="multiple"
                                            data-include-select-all-option="true" data-enable-filtering="true"
                                            data-enable-case-insensitive-filtering="true">
                                            @php
                                                $categoryIds = isset($knowledge->category_id) ? json_decode($knowledge->category_id, true) : [];
                                                $categories = app\Models\Admin\Category::pluck('title', 'id')->toArray();
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

                                <div class="row mb-3">
                                    <div class="col-sm-4">
                                        <h6 class="mb-0">Industry Name </h6>
                                    </div>
                                    <div class="form-group text-secondary col-sm-8">
                                        <select name="industry_id[]" class="form-control multiselect" multiple="multiple"
                                            data-include-select-all-option="true" data-enable-filtering="true"
                                            data-enable-case-insensitive-filtering="true">

                                            @php
                                                $industryIds = isset($knowledge->industry_id) ? json_decode($knowledge->industry_id, true) : [];
                                                $industries = app\Models\Admin\Industry::pluck('title', 'id')->toArray();
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
                                <div class="row mb-3">
                                    <div class="col-sm-4">
                                        <h6 class="mb-0">Brands Name</h6>
                                    </div>
                                    <div class="form-group text-secondary col-sm-8">
                                        <select name="brand_id[]" class="form-control multiselect" multiple="multiple"
                                            data-include-select-all-option="true" data-enable-filtering="true"
                                            data-enable-case-insensitive-filtering="true">
                                            @php
                                                $brandIds = isset($knowledge->brand_id) ? json_decode($knowledge->brand_id, true) : [];
                                                $brands = app\Models\Admin\Brand::pluck('title', 'id')->toArray();
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
                                <div class="row mb-3">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Brochure </h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                        <input type="file" name="brochure" class="form-control" id="brochure" />
                                        <div class="form-text">Accepts only pdf</div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-3"></div>
                                    <div class="col-sm-9 text-secondary">
                                        <button type="submitbtn"
                                            class="btn btn-primary from-prevent-multiple-submits">Update<i
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
