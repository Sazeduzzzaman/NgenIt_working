@extends('admin.master')
@section('content')
    <style>
        .submit_btn {
            padding: 10px;
        }

        .submit_btn:hover {
            padding: 10px;
        }

        .pagination-flat .disabled {
            width: 60px !important;
            padding-left: 10px;
            padding-right: 10px;

        }

        #DataTables_Table_0_previous {
            margin-right: 0px !important;
        }
    </style>

    <div class="content-wrapper">


        <!-- Page header -->
        <section class="shadow-sm">
            <div class="d-flex justify-content-between align-items-center">
                {{-- Page Destination/ BreadCrumb --}}
                <div class="page-header-content d-lg-flex ">
                    <div class="d-flex px-2">
                        <div class="breadcrumb py-2">
                            <a href="index.html" class="breadcrumb-item"><i class="ph-house"></i></a>
                            <a href="{{ route('admin.dashboard') }}" class="breadcrumb-item">Home</a>
                            <span class="breadcrumb-item active">Category Management</span>
                        </div>
                        <a href="#breadcrumb_elements"
                            class="btn btn-light align-self-center collapsed d-lg-none border-transparent rounded-pill p-0 ms-auto"
                            data-bs-toggle="collapse">
                            <i class="ph-caret-down collapsible-indicator ph-sm m-1"></i>
                        </a>
                    </div>
                </div>
                {{-- Inner Page Tab --}}
        </section>
        <!-- /page header -->
        <!-- product-sourcing Content Start -->
        <section>
            <div class="text-center">
                <h1>All Category</h1>
            </div>
            <div class="container-fluid mt-2 ">
                <div class="row rounded " id="exTab3" style="position: relative;z-index: 999;">
                    <div class="d-flex justify-content-center align-items-center p-0">
                        <ul class="nav nav-tabs border-0">
                            <li class="nav-item ">
                                <a href="#category" class=" nav-link active cat-tab1 p-1" data-bs-toggle="tab">
                                    <p class="m-0 p-1">
                                        Category <span class="ms-2">|</span></p>
                                </a>
                            </li>

                            <li class="nav-item">
                                <a href="#sub_category" class=" nav-link cat-tab2 p-1 " data-bs-toggle="tab">
                                    <p class="m-0 p-1"> Sub Category <span class="ms-2">|</span></p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#sub_sub_category" class=" nav-link cat-tab3 p-1" data-bs-toggle="tab">
                                    <p class="m-0 p-1"> Sub Child Category <span class="ms-2">|</span></p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#sub_sub_sub_category" class=" nav-link cat-tab3 p-1" data-bs-toggle="tab">
                                    <p class="m-0 p-1"> Sub Sub Child Category <span class="ms-2"></span></p>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="row rounded">
                    <div class="tab-content p-0 mx-auto" style="width: 90%;">
                        <div class="tab-pane fade show active" id="category">
                            <div class="d-flex align-items-center py-2">
                                {{-- Add Tax Vat Modal Category --}}
                                <a href="" class=" text-success nav-link cat-tab3" data-bs-toggle="modal"
                                    data-bs-target="#categoryAdd"
                                    style="position: relative;
                                    z-index: 999; margin-bottom: -30px;">
                                    <span class="ms-2 icon_btn" style="font-weight: 800;" data-bs-toggle="tooltip"
                                        data-bs-placement="top" title="Add Category">
                                        <i class="ph-plus icons_design"></i>
                                    </span>
                                    <div class="d-flex justify-content-between">
                                        <span class="ms-1">Add Category</span>
                                    </div>
                                    <div class="d-flex justify-content-between hide_mobile">
                                        <h6 class="mb-0 text-black text-center" style="margin-left: 28rem !important;">
                                            Category</h6>
                                    </div>
                                </a>
                            </div>
                            <div>
                                <table class="table category  table-bordered table-hover datatable-highlight text-center ">
                                    <thead>
                                        <tr>
                                            <th width="5%">Id</th>
                                            <th width="15%">Image</th>
                                            <th width="15%">Banner Image</th>
                                            <th width="35%">Name</th>
                                            <th width="10%">Status</th>
                                            <th width="20%" class="text-center">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @if ($categorys)
                                            @foreach ($categorys as $key => $category)
                                                <tr>
                                                    <td class="text-center">{{ ++$key }}</td>
                                                    <td><img src="{{ asset('storage/' . $category->image) }}" alt=""
                                                            width="25px" height="25px"></td>
                                                    <td><img src="{{ asset('storage/' . $category->banner_image) }}"
                                                            alt="" width="25px" height="25px"></td>
                                                    <td>{{ $category->title }}</td>
                                                    <td>
                                                        @if ($category->status == 'active')
                                                            <span class="text-success">Active</span>
                                                        @else
                                                            <span class="text-info">Inactive</span>
                                                        @endif
                                                    </td>
                                                    <td class="text-center">
                                                        <a href="javascript:void(0);" class="text-primary"
                                                            data-bs-toggle="modal"
                                                            data-bs-target="#update_category_{{ $category->slug }}">
                                                            <i
                                                                class="fa-solid fa-pen-to-square me-2 p-1 rounded-circle text-primary"></i>
                                                        </a>
                                                        <!---Category Edit modal--->
                                                        <div id="update_category_{{ $category->slug }}" class="modal fade"
                                                            tabindex="-1" style="display: none;" aria-hidden="true">
                                                            <div class="modal-dialog modal-dialog-scrollable">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h5 class="modal-title">Category Update Form</h5>
                                                                        <button type="button" class="btn-close"
                                                                            data-bs-dismiss="modal"></button>
                                                                    </div>

                                                                    <div class="modal-body border br-7">
                                                                        @php
                                                                            $category = App\Models\Admin\Category::where('slug', $category->slug)->first();
                                                                        @endphp
                                                                        <form method="post"
                                                                            action="{{ route('category.update', $category->id) }}"
                                                                            enctype="multipart/form-data">
                                                                            @csrf
                                                                            @method('PUT')

                                                                            <div class="row mb-1">
                                                                                <div class="col-sm-4 text-start">
                                                                                    <span>Category Name</span>
                                                                                </div>
                                                                                <div class="col-sm-8 text-start">
                                                                                    <input type="text" name="title"
                                                                                        class="form-control form-control-sm maxlength"
                                                                                        maxlength="100"
                                                                                        value="{{ $category->title }}"
                                                                                        required />
                                                                                </div>
                                                                            </div>

                                                                            <div class="row mb-1">
                                                                                <div class="col-sm-4 text-start">
                                                                                    <span>Category Image</span>
                                                                                </div>
                                                                                <div class="col-sm-6 text-start">
                                                                                    <input type="file" name="image"
                                                                                        class="form-control form-control-sm"
                                                                                        id="image" accept="image/*" />

                                                                                </div>
                                                                                <div class="col-sm-3 text-end">
                                                                                    <img class="rounded-circle"
                                                                                        src="{{ asset('storage/' . $category->image) }}"
                                                                                        width="40" height="40"
                                                                                        alt="" id="showImage">
                                                                                </div>
                                                                            </div>
                                                                            <div class="row mb-1">
                                                                                <div class="col-sm-4 text-start">
                                                                                    <span>Category Banner
                                                                                        Image</span>
                                                                                </div>
                                                                                <div class="col-sm-6 text-start">

                                                                                    <input type="file"
                                                                                        name="banner_image"
                                                                                        class="form-control form-control-sm"
                                                                                        id="image" accept="image/*" />
                                                                                </div>
                                                                                <div class="col-sm-2 text-end">
                                                                                    <img class="rounded-circle"
                                                                                        src="{{ asset('storage/' . $category->banner_image) }}"
                                                                                        width="40" height="40"
                                                                                        alt="" id="showImage">
                                                                                </div>
                                                                            </div>
                                                                            <div class="row mb-1">
                                                                                <div class="col-sm-4 text-start">
                                                                                    <span>Category Status</span>
                                                                                </div>
                                                                                <div class="col-sm-8 text-start">
                                                                                    <div class="form-check">
                                                                                        <input class="form-check-input"
                                                                                            type="radio" name="status"
                                                                                            value="active"
                                                                                            id="flexRadioDefault1"
                                                                                            {{ $category->status == 'active' ? 'checked' : '' }}>
                                                                                        <label class="form-check-label"
                                                                                            for="flexRadioDefault1">
                                                                                            Active
                                                                                        </label>
                                                                                    </div>
                                                                                    <div class="form-check">
                                                                                        <input class="form-check-input"
                                                                                            type="radio" name="status"
                                                                                            value="inactive"
                                                                                            id="flexRadioDefault2"
                                                                                            {{ $category->status == 'inactive' ? 'checked' : '' }}>
                                                                                        <label class="form-check-label"
                                                                                            for="flexRadioDefault2">
                                                                                            Inactive
                                                                                        </label>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="row">
                                                                                <div class="col-sm-12 text-end">
                                                                                    <button type="submit"
                                                                                        class="text-white btn btn-sm"
                                                                                        style="background-color:#247297 !important; padding: 5px 12px 5px;">Update</button>
                                                                                </div>
                                                                            </div>
                                                                        </form>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        {{-- Category Modal End --}}
                                                        <a href="{{ route('category.destroy', [$category->id]) }}"
                                                            class="text-danger delete mx-2">
                                                            <i
                                                                class="fa-solid fa-trash p-1 rounded-circle text-danger"></i>
                                                        </a>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        @endif
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="tab-content p-0 mx-auto" style="width: 90%;">
                        <div class="tab-pane fade show" id="sub_category">
                            <div class="d-flex align-items-center py-2">
                                {{-- Add Tax Vat Modal Sub Category --}}
                                <a href="" class=" text-success nav-link cat-tab3" data-bs-toggle="modal"
                                    data-bs-target="#categoryAdd"
                                    style="position: relative;
                                    z-index: 999; margin-bottom: -30px;">
                                    <span class="ms-2 icon_btn" style="font-weight: 800;" data-bs-toggle="tooltip"
                                        data-bs-placement="top" title="Add Category">
                                        <i class="ph-plus icons_design"></i>
                                    </span>
                                    <div class="d-flex justify-content-between">
                                        <span class="ms-1">Add Sub
                                            Category</span>
                                    </div>
                                    <div class="d-flex justify-content-between hide_mobile">
                                        <h6 class="mb-0 text-black text-center" style="margin-left: 27rem !important;">Sub
                                            Category</h6>
                                    </div>
                                </a>
                            </div>
                            <div>
                                <table
                                    class="table sub_category table-bordered table-hover datatable-highlight text-center ">
                                    <thead>
                                        <tr>
                                            <th width="5%">Id</th>
                                            <th width="5%">Image</th>
                                            <th width="5%">Banner Image</th>
                                            <th width="35%">Name</th>
                                            <th width="30%">Category Name</th>
                                            <th width="10%">Status</th>
                                            <th width="10%" class="text-center">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @if ($sub_cats)
                                            @foreach ($sub_cats as $key => $sub_cat)
                                                <tr>
                                                    <td class="text-center">{{ ++$key }}</td>
                                                    <td><img src="{{ asset('storage/' . $sub_cat->image) }}"
                                                            alt="" width="25px" height="25px"></td>
                                                    <td><img src="{{ asset('storage/' . $sub_cat->banner_image) }}"
                                                            alt="" width="25px" height="25px"></td>
                                                    <td>{{ $sub_cat->title }}</td>
                                                    <td>
                                                        {{ App\Models\Admin\Category::where('id', $sub_cat->cat_id)->value('title') }}
                                                    </td>
                                                    <td>
                                                        @if ($sub_cat->status == 'active')
                                                            <span class="text-success">Active</span>
                                                        @else
                                                            <span class="text-info">Inactive</span>
                                                        @endif
                                                    </td>
                                                    <td class="text-center">
                                                        <a href="javascript:void(0);" class="text-primary"
                                                            data-bs-toggle="modal"
                                                            data-bs-target="#update_sub_cat_{{ $sub_cat->slug }}">
                                                            <i
                                                                class="fa-solid fa-pen-to-square me-2 p-1 rounded-circle text-primary"></i>
                                                        </a>
                                                        <!---Sub Category Update modal--->
                                                        <div id="update_sub_cat_{{ $sub_cat->slug }}" class="modal fade"
                                                            tabindex="-1" style="display: none;" aria-hidden="true">
                                                            <div class="modal-dialog modal-dialog-scrollable">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h5 class="modal-title">Sub Category Update Form
                                                                        </h5>
                                                                        <button type="button" class="btn-close"
                                                                            data-bs-dismiss="modal"></button>
                                                                    </div>

                                                                    <div class="modal-body border br-7">
                                                                        @php
                                                                            $sub_cat = App\Models\Admin\SubCategory::where('slug', $sub_cat->slug)->first();
                                                                        @endphp
                                                                        <form method="post"
                                                                            action="{{ route('update.subcategory', $sub_cat->id) }}"
                                                                            enctype="multipart/form-data">
                                                                            @csrf
                                                                            @method('PUT')
                                                                            <div class="row mb-1">
                                                                                <div class="col-sm-4 text-start">
                                                                                    <span>Category Name</span>
                                                                                </div>
                                                                                <div class="col-sm-8 text-start">
                                                                                    <select name="cat_id"
                                                                                        class="form-control select"
                                                                                        data-width="100%"
                                                                                        data-minimum-results-for-search="Infinity">
                                                                                        <option value=""> -- Select
                                                                                            Category -- </option>
                                                                                        @foreach ($categorys as $cat)
                                                                                            <option
                                                                                                value="{{ $cat->id }}"
                                                                                                {{ $cat->id == $sub_cat->cat_id ? 'selected' : '' }}>
                                                                                                {{ $cat->title }}
                                                                                            </option>
                                                                                        @endforeach
                                                                                    </select>
                                                                                </div>
                                                                            </div>

                                                                            <div class="row mb-1">
                                                                                <div class="col-sm-4 text-start">
                                                                                    <span>Sub Category Name</span>
                                                                                </div>
                                                                                <div class="col-sm-8 text-start">
                                                                                    <input type="text" name="title"
                                                                                        class="form-control form-control-sm maxlength"
                                                                                        maxlength="100"
                                                                                        value="{{ $sub_cat->title }}" />
                                                                                </div>
                                                                            </div>

                                                                            <div class="row mb-1">
                                                                                <div class="col-sm-4 text-start">
                                                                                    <span>Sub Category Image</span>
                                                                                </div>
                                                                                <div
                                                                                    class="col-sm-6 text-start text-secondary">
                                                                                    <input type="file" name="image"
                                                                                        class="form-control form-control-sm"
                                                                                        id="image1" accept="image/*" />

                                                                                </div>
                                                                                <div class="col-sm-3 text-end">
                                                                                    <img class="rounded-circle"
                                                                                        id="showImage1"
                                                                                        src="{{ asset('storage/' . $sub_cat->image) }}"
                                                                                        width="40" height="40"
                                                                                        alt="">
                                                                                </div>
                                                                            </div>

                                                                            <div class="row mb-1">
                                                                                <div class="col-sm-4 text-start">
                                                                                    <span>Sub Category Banner
                                                                                        Image</span>
                                                                                </div>
                                                                                <div
                                                                                    class="col-sm-6 text-start text-secondary">
                                                                                    <input type="file"
                                                                                        name="banner_image"
                                                                                        class="form-control form-control-sm"
                                                                                        id="banner_image"
                                                                                        accept="image/*" />
                                                                                </div>
                                                                                <div class="col-sm-3 text-end">
                                                                                    <img class="rounded-circle"
                                                                                        src="{{ asset('storage/' . $sub_cat->banner_image) }}"
                                                                                        weight="40" height="40"
                                                                                        alt=""
                                                                                        id="showbannerImage">
                                                                                </div>
                                                                            </div>

                                                                            <div class="row mb-1">
                                                                                <div class="col-sm-4 text-start">
                                                                                    <span>Sub Category Status</span>
                                                                                </div>
                                                                                <div class="col-sm-8 text-start">
                                                                                    <div class="form-check">
                                                                                        <input class="form-check-input"
                                                                                            type="radio" name="status"
                                                                                            value="active"
                                                                                            id="flexRadioDefault1"
                                                                                            {{ $sub_cat->status == 'active' ? 'checked' : '' }}>
                                                                                        <label class="form-check-label"
                                                                                            for="flexRadioDefault1">
                                                                                            Active
                                                                                        </label>
                                                                                    </div>
                                                                                    <div class="form-check">
                                                                                        <input class="form-check-input"
                                                                                            type="radio" name="status"
                                                                                            value="inactive"
                                                                                            id="flexRadioDefault2"
                                                                                            {{ $sub_cat->status == 'inactive' ? 'checked' : '' }}>
                                                                                        <label class="form-check-label"
                                                                                            for="flexRadioDefault2">
                                                                                            Inactive
                                                                                        </label>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="row">
                                                                                <div class="col-sm-12 text-end">
                                                                                    <button type="submit"
                                                                                        class="text-white btn btn-sm"
                                                                                        style="background-color:#247297 !important; padding: 5px 12px 5px;">Update</button>
                                                                                </div>
                                                                            </div>

                                                                        </form>
                                                                    </div>


                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!---Sub Category Update modal--->
                                                        <a href="{{ route('subcategory.destroy', [$sub_cat->id]) }}"
                                                            class="text-danger delete mx-2">
                                                            <i
                                                                class="fa-solid fa-trash p-1 rounded-circle text-danger"></i>
                                                        </a>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        @endif
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="tab-content p-0 mx-auto" style="width: 90%;">
                        <div class="tab-pane fade show" id="sub_sub_category">
                            <div class="d-flex align-items-center py-2">
                                {{-- Add Category Modal --}}
                                <a href="" class=" text-success nav-link cat-tab3" data-bs-toggle="modal"
                                    data-bs-target="#categoryAdd"
                                    style="position: relative;
                                    z-index: 999; margin-bottom: -30px;">
                                    <span class="ms-2 icon_btn" style="font-weight: 800;" data-bs-toggle="tooltip"
                                        data-bs-placement="top" title="Add Category">
                                        <i class="ph-plus icons_design"></i>
                                    </span>
                                    <div class="d-flex justify-content-between">
                                        <span class="ms-1">Add Sub Child Category</span>
                                    </div>
                                </a>
                            </div>
                            <div>
                                <table
                                    class="table sub_sub_category table-bordered table-hover datatable-highlight text-center ">
                                    <thead>
                                        <tr>
                                            <th width="5%">Id</th>
                                            <th width="10%">Image</th>
                                            <th width="10%">Banner Image</th>
                                            <th width="20%">Name</th>
                                            <th width="20%">Sub Category Name</th>
                                            <th width="20%">Category Name</th>
                                            <th width="5%">Status</th>
                                            <th width="10%" class="text-center">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @if ($sub_sub_cats)
                                            @foreach ($sub_sub_cats as $key => $sub_sub_cat)
                                                <tr>
                                                    <td class="text-center">{{ ++$key }}</td>
                                                    <td><img src="{{ asset('storage/' . $sub_sub_cat->image) }}"
                                                            alt="" width="25px" height="25px"></td>
                                                    <td><img src="{{ asset('storage/' . $sub_sub_cat->banner_image) }}"
                                                            alt="" width="25px" height="25px"></td>
                                                    <td>{{ $sub_sub_cat->title }}</td>
                                                    <td>
                                                        {{ App\Models\Admin\SubCategory::where('id', $sub_sub_cat->sub_cat_id)->value('title') }}
                                                    </td>
                                                    <td>
                                                        {{ App\Models\Admin\Category::where('id', $sub_sub_cat->cat_id)->value('title') }}
                                                    </td>
                                                    <td>
                                                        @if ($sub_sub_cat->status == 'active')
                                                            <span class="text-success">Active</span>
                                                        @else
                                                            <span class="text-info">Inactive</span>
                                                        @endif
                                                    </td>
                                                    <td class="text-center">
                                                        <a href="javascript:void(0);" class="text-primary"
                                                            data-bs-toggle="modal"
                                                            data-bs-target="#update_sub_sub_cat_{{ $sub_sub_cat->slug }}">
                                                            <i
                                                                class="fa-solid fa-pen-to-square me-2 p-1 rounded-circle text-primary"></i>
                                                        </a>
                                                        <!---Sub Sub Category edit modal--->
                                                        <div id="update_sub_sub_cat_{{ $sub_sub_cat->slug }}"
                                                            class="modal fade" tabindex="-1" style="display: none;"
                                                            aria-hidden="true">
                                                            <div class="modal-dialog modal-dialog-scrollable">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h5 class="modal-title">Sub Sub Category Update
                                                                            Form</h5>
                                                                        <button type="button" class="btn-close"
                                                                            data-bs-dismiss="modal"></button>
                                                                    </div>

                                                                    <div class="modal-body border br-7">
                                                                        @php
                                                                            $sub_sub_cat = App\Models\Admin\SubSubCategory::where('slug', $sub_sub_cat->slug)->first();
                                                                        @endphp
                                                                        <form method="post"
                                                                            action="{{ route('update.subsubcategory', $sub_sub_cat->id) }}"
                                                                            enctype="multipart/form-data">
                                                                            @csrf
                                                                            @method('PUT')
                                                                            <div class="row mb-1">
                                                                                <div class="col-sm-4 text-start">
                                                                                    <span>Category Name</span>
                                                                                </div>
                                                                                <div class="col-sm-8 text-start">
                                                                                    <select name="cat_id"
                                                                                        class="form-control select"
                                                                                        data-width="100%"
                                                                                        data-minimum-results-for-search="Infinity">
                                                                                        <option value=""> -- Select
                                                                                            Category -- </option>
                                                                                        @foreach ($categorys as $cat)
                                                                                            <option
                                                                                                value="{{ $cat->id }}"
                                                                                                {{ $cat->id == $sub_sub_cat->cat_id ? 'selected' : '' }}>
                                                                                                {{ $cat->title }}
                                                                                            </option>
                                                                                        @endforeach
                                                                                    </select>
                                                                                </div>
                                                                            </div>

                                                                            <div class="row mb-1">
                                                                                <div class="col-sm-4 text-start">
                                                                                    <span>Sub Category Name</span>
                                                                                </div>
                                                                                <div class="col-sm-8 text-start">
                                                                                    <select name="sub_cat_id"
                                                                                        class="form-control select"
                                                                                        data-width="100%"
                                                                                        data-minimum-results-for-search="Infinity">
                                                                                        <option value=""> -- Select
                                                                                            Category -- </option>
                                                                                        @foreach ($sub_cats as $sub_cat)
                                                                                            <option
                                                                                                value="{{ $sub_cat->id }}"
                                                                                                {{ $sub_cat->id == $sub_sub_cat->sub_cat_id ? 'selected' : '' }}>
                                                                                                {{ $sub_cat->title }}
                                                                                            </option>
                                                                                        @endforeach
                                                                                    </select>
                                                                                </div>
                                                                            </div>

                                                                            <div class="row mb-1">
                                                                                <div class="col-sm-4 text-start">
                                                                                    <span>
                                                                                        Sub Sub Category
                                                                                        Name
                                                                                    </span>
                                                                                </div>
                                                                                <div class="col-sm-8 ">
                                                                                    <input type="text" name="title"
                                                                                        class="form-control form-control-sm maxlength"
                                                                                        maxlength="100"
                                                                                        value="{{ $sub_sub_cat->title }}" />
                                                                                </div>
                                                                            </div>

                                                                            <div class="row mb-1">
                                                                                <div class="col-sm-4 text-start">
                                                                                    <span>
                                                                                        Sub Sub Category Image
                                                                                    </span>
                                                                                </div>
                                                                                <div class="col-sm-6 text-start">
                                                                                    <input type="file" name="image"
                                                                                        class="form-control form-control-sm"
                                                                                        id="image2" accept="image/*" />
                                                                                </div>
                                                                                <div class="col-sm-3 text-end">
                                                                                    <img class="rounded-circle"
                                                                                        id="showImage2"
                                                                                        src="{{ asset('storage/' . $sub_sub_cat->image) }}"
                                                                                        width="40" height="40"
                                                                                        alt="">
                                                                                </div>
                                                                            </div>

                                                                            <div class="row mb-1">
                                                                                <div class="col-sm-4 text-start">
                                                                                    <span>Sub Sub Category
                                                                                        Banner Image</span>
                                                                                </div>
                                                                                <div class="col-sm-6 text-start">
                                                                                    <input type="file"
                                                                                        name="banner_image"
                                                                                        class="form-control form-control-sm"
                                                                                        id="banner_image"
                                                                                        accept="image/*" />
                                                                                </div>
                                                                                <div class="col-sm-3 text-end">
                                                                                    <img class="rounded-circle"
                                                                                        src="{{ asset('storage/' . $sub_sub_cat->banner_image) }}"
                                                                                        width="40" height="40"
                                                                                        alt=""
                                                                                        id="showbannerImage">
                                                                                </div>
                                                                            </div>

                                                                            <div class="row mb-1">
                                                                                <div class="col-sm-4 text-start">
                                                                                    <span>Sub Sub Category
                                                                                        Status</span>
                                                                                </div>
                                                                                <div class="col-sm-4 text-start ">
                                                                                    <div class="form-check">
                                                                                        <input class="form-check-input"
                                                                                            type="radio" name="status"
                                                                                            value="active"
                                                                                            id="flexRadioDefault1"
                                                                                            {{ $sub_sub_cat->status == 'active' ? 'checked' : '' }}>
                                                                                        <label class="form-check-label"
                                                                                            for="flexRadioDefault1">
                                                                                            Active
                                                                                        </label>
                                                                                    </div>
                                                                                    <div class="form-check">
                                                                                        <input class="form-check-input"
                                                                                            type="radio" name="status"
                                                                                            value="inactive"
                                                                                            id="flexRadioDefault2"
                                                                                            {{ $sub_sub_cat->status == 'inactive' ? 'checked' : '' }}>
                                                                                        <label class="form-check-label"
                                                                                            for="flexRadioDefault2">
                                                                                            Inactive
                                                                                        </label>
                                                                                    </div>
                                                                                </div>
                                                                            </div>


                                                                            <div class="row">
                                                                                <div class="col-sm-12 text-end">
                                                                                    <button type="submit"
                                                                                        class="text-white btn btn-sm"
                                                                                        style="background-color:#247297 !important; padding: 5px 12px 5px;">Update</button>
                                                                                </div>
                                                                            </div>

                                                                        </form>
                                                                    </div>


                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!---Sub Sub Category edit modal End--->

                                                        <a href="{{ route('subsubcategory.destroy', [$sub_sub_cat->id]) }}"
                                                            class="text-danger delete mx-2">
                                                            <i
                                                                class="fa-solid fa-trash p-1 rounded-circle text-danger"></i>
                                                        </a>

                                                    </td>
                                                </tr>
                                            @endforeach
                                        @endif
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="tab-content p-0 mx-auto" style="width: 90%;">
                        <div class="tab-pane fade show" id="sub_sub_sub_category">
                            <div class="d-flex align-items-center py-2">
                                {{-- Add Category Modal --}}
                                <a href="{{ route('category.create') }}" class=" text-success nav-link cat-tab3"
                                    data-bs-toggle="modal" data-bs-target="#categoryAdd"
                                    style="position: relative;
                                    z-index: 999; margin-bottom: -30px;">
                                    <span class="ms-2 icon_btn" style="font-weight: 800;" data-bs-toggle="tooltip"
                                        data-bs-placement="top" title="Add Category">
                                        <i class="ph-plus icons_design"></i>
                                    </span>
                                    <div class="d-flex justify-content-between">
                                        <span class="ms-1">Add Sub Sub
                                            Child Category</span>
                                    </div>
                                    <div class="d-flex justify-content-between hide_mobile">
                                        <h6 class="mb-0 text-black text-center" style="margin-left: 27rem !important;">Sub
                                            Child Category</h6>
                                    </div>
                                </a>
                            </div>
                            <div>
                                <table
                                    class="table sub_sub_sub_category table-bordered table-hover datatable-highlight text-center ">
                                    <thead>
                                        <tr>
                                            <th width="5%">Id</th>
                                            <th width="10%">Category Image</th>
                                            <th width="10%">Category Banner Image</th>
                                            <th width="20%">Category Name</th>
                                            <th width="15%">Category Name</th>
                                            <th width="15%">Sub Category Name</th>
                                            <th width="15%">Category Name</th>
                                            <th width="10%" class="text-center">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @if ($sub_sub_sub_cats)
                                            @foreach ($sub_sub_sub_cats as $key => $sub_sub_sub_cat)
                                                <tr>
                                                    <td class="text-center">{{ ++$key }}</td>
                                                    <td><img src="{{ asset('storage/' . $sub_sub_sub_cat->image) }}"
                                                            alt="" width="25px" height="25px"></td>
                                                    <td><img src="{{ asset('storage/' . $sub_sub_sub_cat->banner_image) }}"
                                                            alt="" width="25px" height="25px"></td>
                                                    <td>{{ App\Models\Admin\SubSubCategory::where('id', $sub_sub_sub_cat->sub_sub_cat_id)->value('title') }}
                                                    </td>
                                                    <td>{{ App\Models\Admin\SubCategory::where('id', $sub_sub_sub_cat->sub_cat_id)->value('title') }}
                                                    </td>
                                                    <td>{{ App\Models\Admin\Category::where('id', $sub_sub_sub_cat->cat_id)->value('title') }}
                                                    </td>
                                                    <td>
                                                        @if ($sub_sub_sub_cat->status == 'active')
                                                            <span class="text-success">Active</span>
                                                        @else
                                                            <span class="text-info">Inactive</span>
                                                        @endif
                                                    </td>
                                                    <td class="text-center">
                                                        <a href="javascript:void(0);" class="text-primary"
                                                            data-bs-toggle="modal"
                                                            data-bs-target="#update_sub_sub_cat_{{ $sub_sub_sub_cat->slug }}">
                                                            <i
                                                                class="fa-solid fa-pen-to-square me-2 p-1 rounded-circle text-primary"></i>
                                                        </a>
                                                        <!---Sub Sub Category Update modal--->
                                                        <div id="update_sub_sub_cat_{{ $sub_sub_sub_cat->slug }}"
                                                            class="modal fade" tabindex="-1" style="display: none;"
                                                            aria-hidden="true">
                                                            <div class="modal-dialog modal-dialog-scrollable">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h5 class="modal-title">Sub Sub Category Update
                                                                            Form</h5>
                                                                        <button type="button" class="btn-close"
                                                                            data-bs-dismiss="modal"></button>
                                                                    </div>

                                                                    <div class="modal-body border br-7">
                                                                        @php
                                                                            $sub_sub_sub_cat = App\Models\Admin\SubSubSubCategory::where('slug', $sub_sub_sub_cat->slug)->first();
                                                                        @endphp
                                                                        <form method="post"
                                                                            action="{{ route('update.subsubsubcategory', $sub_sub_sub_cat->id) }}"
                                                                            enctype="multipart/form-data">
                                                                            @csrf
                                                                            @method('PUT')
                                                                            <div class="row mb-1">
                                                                                <div class="col-sm-4 text-start">
                                                                                    <span>Category Name</span>
                                                                                </div>
                                                                                <div class="col-sm-8 text-start">
                                                                                    <select name="cat_id"
                                                                                        class="form-control select"
                                                                                        data-width="100%"
                                                                                        data-minimum-results-for-search="Infinity">
                                                                                        <option value=""> -- Select
                                                                                            Category -- </option>
                                                                                        @foreach ($categorys as $cat)
                                                                                            <option
                                                                                                value="{{ $cat->id }}"
                                                                                                {{ $cat->id == $sub_sub_sub_cat->cat_id ? 'selected' : '' }}>
                                                                                                {{ $cat->title }}
                                                                                            </option>
                                                                                        @endforeach
                                                                                    </select>
                                                                                </div>
                                                                            </div>

                                                                            <div class="row mb-1">
                                                                                <div class="col-sm-4 text-start">
                                                                                    <span>Sub Category Name</span>
                                                                                </div>
                                                                                <div class="col-sm-8 text-start">
                                                                                    <select name="sub_cat_id"
                                                                                        class="form-control select"
                                                                                        data-width="100%"
                                                                                        data-minimum-results-for-search="Infinity">
                                                                                        <option value=""> -- Select
                                                                                            Category -- </option>
                                                                                        @foreach ($sub_cats as $sub_cat)
                                                                                            <option
                                                                                                value="{{ $sub_cat->id }}"
                                                                                                {{ $sub_cat->id == $sub_sub_sub_cat->sub_cat_id ? 'selected' : '' }}>
                                                                                                {{ $sub_cat->title }}
                                                                                            </option>
                                                                                        @endforeach
                                                                                    </select>
                                                                                </div>
                                                                            </div>

                                                                            <div class="row mb-1">
                                                                                <div class="col-sm-4 text-start">
                                                                                    <span>Sub Sub Category
                                                                                        Name</span>
                                                                                </div>
                                                                                <div class="col-sm-8 text-start">
                                                                                    <select name="sub_sub_cat_id"
                                                                                        class="form-control select"
                                                                                        data-width="100%"
                                                                                        data-minimum-results-for-search="Infinity">
                                                                                        <option value=""> -- Select
                                                                                            Category -- </option>
                                                                                        @foreach ($sub_sub_cats as $sub_sub_cat)
                                                                                            <option
                                                                                                value="{{ $sub_sub_cat->id }}"
                                                                                                {{ $sub_sub_cat->id == $sub_sub_sub_cat->sub_sub_cat_id ? 'selected' : '' }}>
                                                                                                {{ $sub_sub_cat->title }}
                                                                                            </option>
                                                                                        @endforeach
                                                                                    </select>
                                                                                </div>
                                                                            </div>

                                                                            <div class="row mb-1">
                                                                                <div class="col-sm-4 text-start">
                                                                                    <span>Sub Sub Sub Category
                                                                                        Name</span>
                                                                                </div>
                                                                                <div class="col-sm-8 text-start">
                                                                                    <input type="text" name="title"
                                                                                        class="form-control form-control-sm maxlength"
                                                                                        maxlength="100"
                                                                                        value="{{ $sub_sub_sub_cat->title }}" />
                                                                                </div>
                                                                            </div>

                                                                            <div class="row mb-1">
                                                                                <div class="col-sm-4 text-start">
                                                                                    <span>Sub Sub Sub Category
                                                                                        Image</span>
                                                                                </div>
                                                                                <div class="col-sm-6 text-start">
                                                                                    <input type="file" name="image"
                                                                                        class="form-control form-control-sm"
                                                                                        id="image3" accept="image/*" />
                                                                                </div>
                                                                                <div class="col-sm-3 text-end">
                                                                                    <img class="rounded-circle"
                                                                                        src="{{ asset('storage/' . $sub_sub_sub_cat->image) }}"
                                                                                        width="40" height="40"
                                                                                        alt="">
                                                                                </div>
                                                                            </div>

                                                                            <div class="row mb-1">
                                                                                <div class="col-sm-4 text-start">
                                                                                    <span>Sub Sub Sub Category
                                                                                        Banner Image </span>
                                                                                </div>
                                                                                <div class="col-sm-6 text-start">
                                                                                    <input type="file"
                                                                                        name="banner_image"
                                                                                        class="form-control form-control-sm"
                                                                                        id="banner_image"
                                                                                        accept="image/*" />
                                                                                </div>
                                                                                <div class="col-sm-3 text-end">
                                                                                    <img class="rounded-circle"
                                                                                        src="{{ asset('storage/' . $sub_sub_sub_cat->banner_image) }}"
                                                                                        width="40" height="40"
                                                                                        alt=""
                                                                                        id="showbannerImage">
                                                                                </div>
                                                                            </div>

                                                                            <div class="row mb-1">
                                                                                <div class="col-sm-4 text-start">
                                                                                    <span>Sub Sub Sub Category
                                                                                        Status</span>
                                                                                </div>
                                                                                <div class="col-sm-4 text-start">
                                                                                    <div class="form-check">
                                                                                        <input class="form-check-input"
                                                                                            type="radio" name="status"
                                                                                            value="active"
                                                                                            id="flexRadioDefault1"
                                                                                            {{ $sub_sub_sub_cat->status == 'active' ? 'checked' : '' }}>
                                                                                        <label class="form-check-label"
                                                                                            for="flexRadioDefault1">
                                                                                            Active
                                                                                        </label>
                                                                                    </div>
                                                                                    <div class="form-check">
                                                                                        <input class="form-check-input"
                                                                                            type="radio" name="status"
                                                                                            value="inactive"
                                                                                            id="flexRadioDefault2"
                                                                                            {{ $sub_sub_sub_cat->status == 'inactive' ? 'checked' : '' }}>
                                                                                        <label class="form-check-label"
                                                                                            for="flexRadioDefault2">
                                                                                            Inactive
                                                                                        </label>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="row">
                                                                                <div class="col-sm-12 text-end">
                                                                                    <button type="submit"
                                                                                        class="text-white btn btn-sm"
                                                                                        style="background-color:#247297 !important; padding: 5px 12px 5px;">Update</button>
                                                                                </div>
                                                                            </div>

                                                                        </form>
                                                                    </div>


                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!---Sub Sub Category Update modal--->
                                                        <a href="{{ route('subsubsubcategory.destroy', [$sub_sub_sub_cat->id]) }}"
                                                            class="text-danger delete mx-2">
                                                            <i
                                                                class="fa-solid fa-trash p-1 rounded-circle text-danger"></i>
                                                        </a>

                                                    </td>
                                                </tr>
                                            @endforeach
                                        @endif
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- Category Add Modal Content Start --}}
                <!---Sub Sub Category edit modal--->
                <div id="categoryAdd" class="modal fade" tabindex="-1" style="display: none;" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Category Add Form</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                            </div>

                            <div class="modal-body border br-7">
                                <form method="post" action="{{ route('category.store') }}"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <div class="row mb-1">
                                        <div class="col-sm-4">
                                            <span>Category Name</span>
                                        </div>
                                        <div class="col-sm-8 text-secondary">
                                            <input type="text" name="title"
                                                class="form-control form-control-sm maxlength" maxlength="100" required />
                                        </div>
                                    </div>
                                    {{--  --}}
                                    <div class="row mb-1">
                                        <div class="col-sm-4">
                                            <span>Category Image</span>
                                            <h6 class="mb-0"></h6>
                                        </div>
                                        <div class="col-sm-6 text-start">
                                            <input type="file" name="image" class="form-control form-control-sm"
                                                id="image2" accept="image/*" required />
                                        </div>
                                        <div class="col-sm-2 text-end">
                                            <img class="rounded-circle" id="showImage2"
                                                src="https://cdn.pixabay.com/photo/2017/02/07/02/16/cloud-2044823_960_720.png"
                                                width="40" height="40" alt="">
                                        </div>
                                    </div>
                                    {{--  --}}
                                    <div class="row mb-1">
                                        <div class="col-sm-4">
                                            <span>Category Banner Image</span>
                                            <h6 class="mb-0"> </h6>
                                        </div>
                                        <div class="col-sm-6 text-start">
                                            <input type="file" name="banner_image"
                                                class="form-control form-control-sm" id="banner_image" accept="image/*"
                                                required />
                                        </div>
                                        <div class="col-sm-2 text-end">
                                            <img class="rounded-circle" id="showImage2"
                                                src="https://cdn.pixabay.com/photo/2017/02/07/02/16/cloud-2044823_960_720.png"
                                                width="40" height="40" alt="">
                                        </div>
                                    </div>
                                    {{--  --}}
                                    <div class="row mb-1">
                                        <div class="col-sm-4">
                                            <span>Category Status</span>
                                            <h6 class="mb-0"></h6>
                                        </div>
                                        <div class=" col-sm-8 text-secondary">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="status"
                                                    value="active" id="flexRadioDefault1" checked>
                                                <label class="form-check-label" for="flexRadioDefault1">
                                                    Active
                                                </label>
                                            </div>
                                            <div class="form-check mt-2">
                                                <input class="form-check-input" type="radio" name="status"
                                                    value="inactive" id="flexRadioDefault2" >
                                                <label class="form-check-label" for="flexRadioDefault2">
                                                    Inactive
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row ">
                                        <div class="col-sm-12 text-secondary d-flex justify-content-end ">
                                            <button type="submit" class="text-white btn btn-sm"
                                                style="background-color:#247297 !important; padding: 5px 12px 5px;"
                                                id="submitbtn">Submit
                                                <i class="ph-paper-plane-tilt ms-2"></i></button>
                                        </div>
                                    </div>
                                </form>
                            </div>


                        </div>
                    </div>
                </div>
                <!---Sub Sub Category edit modal End--->
            </div>
        </section>



    </div>
@endsection

@once
    @push('scripts')
        <script type="text/javascript">
            $('.category ').DataTable({
                dom: '<"datatable-header"fl><"datatable-scroll"t><"datatable-footer"ip>',
                "iDisplayLength": 10,
                "lengthMenu": [10, 26, 30, 10],
                columnDefs: [{
                    orderable: false,
                    targets: [5],
                }, ],
            });
        </script>
        <script type="text/javascript">
            $('.sub_category').DataTable({
                dom: '<"datatable-header"fl><"datatable-scroll"t><"datatable-footer"ip>',
                "iDisplayLength": 10,
                "lengthMenu": [10, 26, 30, 10],
                columnDefs: [{
                    orderable: false,
                    targets: [6],
                }, ],
            });
        </script>
        <script type="text/javascript">
            $('.sub_sub_category').DataTable({
                dom: '<"datatable-header"fl><"datatable-scroll"t><"datatable-footer"ip>',
                "iDisplayLength": 10,
                "lengthMenu": [10, 26, 30, 10],
                columnDefs: [{
                    orderable: false,
                    targets: [7],
                }, ],
            });
        </script>
        <script type="text/javascript">
            $('.sub_sub_sub_category').DataTable({
                dom: '<"datatable-header"fl><"datatable-scroll"t><"datatable-footer"ip>',
                "iDisplayLength": 10,
                "lengthMenu": [10, 26, 30, 10],
                columnDefs: [{
                    orderable: false,
                    targets: [7],
                }, ],
            });
        </script>
        <script>
            $(document).ready(function() {
                $(".cat-tab1").click(function() {
                    $("#cat-tab2").addClass('d-none');
                    $("#cat-tab3").addClass('d-none');
                    $("#cat-tab1").removeClass('d-none');
                    $(".saved_title").removeClass('d-none');
                    $(".completed_title").addClass('d-none');
                    $(".approved_title").addClass('d-none');
                });
                $(".cat-tab2").click(function() {
                    $("#cat-tab1").addClass('d-none');
                    $("#cat-tab3").addClass('d-none');
                    $("#cat-tab2").removeClass('d-none');
                    $(".approved_title").addClass('d-none');
                    $(".saved_title").addClass('d-none');
                    $(".completed_title").removeClass('d-none');
                });
                $(".cat-tab3").click(function() {
                    $("#cat-tab1").addClass('d-none');
                    $("#cat-tab2").addClass('d-none');
                    $("#cat-tab3").removeClass('d-none');
                    $(".saved_title").addClass('d-none');
                    $(".completed_title").addClass('d-none');
                    $(".approved_title").removeClass('d-none');
                });

            });
        </script>
    @endpush
@endonce
