@extends('admin.master')
@section('content')
    <style type="text/css">
        label {
            font-size: 12px !important;
            font-weight: 500 !important;
        }

        .ck.ck-toolbar {
            height: 33px;
            font-size: 10px;
        }

        .form-check-label {
            font-size: 12px !important;
        }

        .form-select {
            font-size: 10px !important;
            height: 25px !important;
            padding: 0px 0px 0px 19px !important;
            border-radius: 2px !important;
            width: 100%;
        }

        .thumb {
            border-radius: 50% !important;
        }

        #mainThmb {
            border-radius: 50% !important;
        }

        .select2-search {
            height: 23px !important;
            margin-top: -5px !important;
            margin-bottom: 2px !important;
        }
    </style>
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
                        <a href="{{ route('product-sourcing.index') }}" class="breadcrumb-item">Product Sourcing</a>
                        <span class="breadcrumb-item active">Edit</span>
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
        <div class="content mx-auto" style="width: 85%;">
            <div class="card">
                <div class="text-start">
                    <div class="row main_bg py-1 rounded-1 d-flex align-items-center gx-0 px-2">
                        <div class="col-lg-4 col-sm-12">
                            <div>
                                <a class="btn btn-primary btn-rounded rounded-circle btn-icon back-btn"
                                    href="{{ route('product-sourcing.index') }}">
                                    <i class="fa-solid fa-arrow-left main_color"></i>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-12 d-flex justify-content-center">
                            <p class="text-white p-0 m-0 fw-bold"> Edit Product Sourcing </p>
                        </div>
                        <div class="col-lg-4 col-sm-12 d-flex justify-content-end">
                            <div>
                                <a href="{{ route('product-sourcing.index') }}" class="btn navigation_btn">
                                    <div class="d-flex align-items-center ">
                                        <i class="fa-solid fa-nfc-magnifying-glass me-1" style="font-size: 10px;"></i>
                                        <span>Row Builder</span>
                                    </div>
                                </a>
                                <a href="{{ route('purchase.index') }}" class="btn navigation_btn">
                                    <div class="d-flex align-items-center ">
                                        <i class="fa-solid fa-money-check-dollar-pen me-1" style="font-size: 10px;"></i>
                                        <span>Solution Card</span>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-body p-0">
                    <form id="myForm" method="post" action="{{ route('product-sourcing.update', $products->id) }}"
                        enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="container-fluid">
                            <div class="row mb-2">
                                <div class="col-lg-6 col-sm-12">
                                    <div class="py-2 rounded bg-light px-2 mt-2">
                                        <div class="row mb-1">
                                            <div class="col-lg-6 col-sm-12">
                                                <textarea class="form-control" name="name" id="" cols="350" rows="1"
                                                    style=" font-size: 12px; font-weight: 600;" placeholder="Product Name">{{ $products->name }}</textarea>
                                            </div>
                                            <div class="col-lg-3 col-sm-12">
                                                <input type="text" name="sku_code" class="form-control form-control-sm"
                                                    id="inputProductTitle" placeholder="Enter SKU Code"
                                                    style=" font-size: 12px; font-weight: 500;"
                                                    value="{{ $products->sku_code }}">
                                            </div>
                                            <div class="col-lg-3 col-sm-12">
                                                <input type="text" name="mf_code" class="form-control form-control-sm"
                                                    id="inputProductTitle" placeholder="Manufacturing Code"
                                                    style=" font-size: 12px; font-weight: 500;"
                                                    value="{{ $products->mf_code }}">
                                            </div>
                                        </div>
                                        <div class="row mb-1">
                                            <div class="col-lg-3">
                                                <input type="text" name="tags"
                                                    class="form-control form-control-sm visually-hidden"
                                                    data-role="tagsinput" placeholder="Product Tags"
                                                    value="{{ $products->tags }}">
                                            </div>
                                            <div class="col-lg-3">
                                                <input type="text" name="size"
                                                    class="form-control form-control-sm visually-hidden"
                                                    data-role="tagsinput" placeholder="Product Sizes"
                                                    value="{{ $products->size }}">
                                            </div>
                                            <div class="col-lg-3">
                                                <input type="text" name="color"
                                                    class="form-control form-control-sm visually-hidden"
                                                    data-role="tagsinput" placeholder="Product Color"
                                                    value="{{ $products->color }}">
                                            </div>
                                            <div class="col-lg-3">
                                                <input type="text" name="product_code"
                                                    class="form-control form-control-sm" id="inputCostPerPrice"
                                                    placeholder="WX-548" value="{{ $products->product_code }}">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-4 col-sm-12 d-flex align-items-center">
                                                <select name="product_type" data-placeholder="Select Product Type.."
                                                    class="form-control select" required>
                                                    <option></option>
                                                    <option class="form-control" value="hardware"
                                                        {{ $products->product_type == 'hardware' ? 'selected' : '' }}>
                                                        Hardware</option>
                                                    <option class="form-control" value="software"
                                                        {{ $products->product_type == 'software' ? 'selected' : '' }}>
                                                        Software</option>
                                                    <option class="form-control" value="training"
                                                        {{ $products->product_type == 'training' ? 'selected' : '' }}>
                                                        Training</option>
                                                    <option class="form-control" value="book"
                                                        {{ $products->product_type == 'book' ? 'selected' : '' }}>
                                                        Book</option>
                                                </select>
                                            </div>
                                            <div class="col-lg-8 col-sm-12">
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <div
                                                            class="form-group col-sm-12 dropdown d-flex align-items-center">
                                                            <label class="col-form-label col-lg-3">Stock</label>

                                                            <select class="form-select stock_select" name="stock"
                                                                data-placeholder="Select Stock Option...">
                                                                <option></option>

                                                                <option class="form-select" value="available"
                                                                    {{ $products->stock == 'available' ? 'selected' : '' }}>
                                                                    Available
                                                                </option>
                                                                <option class="form-select" value="limited"
                                                                    {{ $products->stock == 'limited' ? 'selected' : '' }}>
                                                                    Limited</option>
                                                                <option class="form-select" value="unlimited"
                                                                    {{ $products->stock == 'unlimited' ? 'selected' : '' }}>
                                                                    UnLimited</option>
                                                                <option class="form-select" value="stock_out"
                                                                    {{ $products->stock == 'stock_out' ? 'selected' : '' }}>
                                                                    Out of Stock</option>
                                                            </select>

                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div
                                                            class="form-group col-sm-12 qty_display d-none d-flex align-items-center py-1">
                                                            <div class="ms-2">
                                                                <input type="text" name="qty"
                                                                    class="form-control form-control-sm"
                                                                    id="inputStarPoints"
                                                                    placeholder="Quantity(10,50,100,200,500)"
                                                                    value="{{ $products->qty }}">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row g-3 d-flex align-items-center mb-2">
                                            <div class="col-md-4">
                                                <div class="form-check">
                                                    <label class="form-check-label"
                                                        for="flexCheckDefault3">Refurbished</label>
                                                    <input class="form-check-input" name="refurbished" type="checkbox"
                                                        value="1" id="flexCheckDefault3"
                                                        {{ $products->refurbished == '1' ? 'checked' : '' }}>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-check">
                                                    <label class="form-check-label" for="dealId"> Deals</label>
                                                    <input class="form-check-input" type="checkbox" id="dealId"
                                                        {{ !empty($products->deal) ? 'checked' : '' }}>
                                                </div>
                                            </div>
                                            <div class="form-group col-md-4" id="dealExpand" style="display:none">
                                                <input type="text" name="deal" class="form-control form-control-sm"
                                                    placeholder="Enter Deals" style=" font-size: 12px; font-weight: 500;"
                                                    value="{{ $products->deal }}">
                                            </div>
                                        </div>
                                        <div class="row form-group">
                                            <div class="form-group col-lg-5">

                                                <div class="col d-flex align-items-center bg-white py-1 px-2 rounded">
                                                    <div class="d-flex align-items-center" style="cursor:pointer"
                                                        onclick="$('#formFile').click()">
                                                        <p class="p-0 m-0">Main Thumbnail</p>
                                                        <div class="text-success ms-2" style="margin-top: -3px;">
                                                            <i class="ph ph-plus-circle"></i>
                                                        </div>
                                                    </div>
                                                    <div class="">
                                                        <input class="form-control form-control-sm" name="thumbnail"
                                                            type="file" id="formFile" multiple=""
                                                            style="display:none" onChange="mainThamUrl(this)" required>
                                                        <img class="mt-1 ms-3" src="{{ asset($products->thumbnail) }}" id="mainThmb"  style="width: 70px; height: 50px;border-radius: 50% !important;"/>
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="form-group col-lg-7">
                                                <div class="row ">
                                                    <div class="col d-flex align-items-center py-1 px-2 rounded">
                                                        <div class="d-flex align-items-center" style="cursor:pointer"
                                                            onclick="$('#multiImg').click()">
                                                            <div>Multiple Images</div>
                                                            <div class="text-success ms-2" style="margin-top: -3px;"><i
                                                                    class="ph ph-plus-circle"></i></div>
                                                        </div>
                                                        <div class="">
                                                            <input class="form-control form-control-sm" name="multi_img[]"
                                                                type="file" id="multiImg" multiple=""
                                                                style="display:none" required>
                                                            <div class="row" id="preview_img"></div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-sm-12 mt-2">
                                    <div class="rounded bg-light px-2 py-2">
                                        <div class="row mb-1">
                                            <div class="form-group col-md-6 basic-form">
                                                <input class="form-control form-control-sm allow_decimal" type="text"
                                                    name="notification_days" placeholder="Notification Day"></td>
                                            </div>
                                            <div class="form-group col-md-6 basic-form">
                                                <select class="form-control select" name="brand_id"
                                                    data-placeholder="Select Brand...">
                                                    <option></option>
                                                    @foreach ($brands as $brand)
                                                        <option class="form-select" value="{{ $brand->id }}"
                                                            {{ $products->brand_id == $brand->id ? 'selected' : '' }}>
                                                            {{ $brand->title }}</option>
                                                    @endforeach

                                                </select>
                                            </div>
                                        </div>
                                        <div class="row mb-1">

                                            <div class="form-group col-md-6 basic-form">
                                                <select class="form-control select" name="cat_id"
                                                    data-placeholder="Select Category...">
                                                    <option></option>
                                                    @foreach ($categories as $cat)
                                                        <option class="form-control" value="{{ $cat->id }}"
                                                            {{ $products->cat_id == $cat->id ? 'selected' : '' }}>
                                                            {{ $cat->title }}</option>
                                                    @endforeach

                                                </select>
                                            </div>

                                            <div class="form-group col-md-6 basic-form">
                                                <select class="form-control select" name="sub_cat_id"
                                                    data-placeholder="Select Sub Category...">
                                                    <option></option>
                                                    @foreach ($sub_cats as $item)
                                                        <option class="form-control" value="{{ $item->id }}"
                                                            {{ $products->sub_cat_id == $item->id ? 'selected' : '' }}>
                                                            {{ $item->title }}</option>
                                                    @endforeach

                                                </select>
                                            </div>
                                        </div>
                                        <div class="row mb-1">
                                            <div class="form-group col-md-6 basic-form">
                                                <select name="sub_sub_cat_id" class="form-control select"
                                                    data-placeholder="Select Sub Sub Category...">
                                                    <option></option>
                                                    @foreach ($sub_sub_cats as $item)
                                                        <option class="form-control" value="{{ $item->id }}"
                                                            {{ $products->sub_sub_cat_id == $item->id ? 'selected' : '' }}>
                                                            {{ $item->title }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="form-group col-md-6 basic-form">
                                                <select name="sub_sub_sub_cat_id" class="form-control select"
                                                    id="inputCollection"
                                                    data-placeholder="Select Sub Sub Sub Category...">
                                                    <option></option>
                                                    @foreach ($sub_sub_sub_cats as $item)
                                                        <option class="form-control" value="{{ $item->id }}"
                                                            {{ $products->sub_sub_sub_cat_id == $item->id ? 'selected' : '' }}>
                                                            {{ $item->title }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row mb-1">
                                            <div class="form-group col-md-6 basic-form">
                                                <select class="form-control select" name="solution_id[]"
                                                    data-placeholder="Select related Solutions..." multiple="multiple">
                                                    <option></option>
                                                    @foreach ($solutions as $item)
                                                        <option value="{{ $item->title }}"> {{ $item->title }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="form-group col-md-6 basic-form">
                                                <select class="form-control select" name="industry_id[]"
                                                    data-placeholder="Select related Industries..." multiple="multiple">
                                                    <option></option>
                                                    @foreach ($industrys as $item)
                                                        <option value="{{ $item->title }}"> {{ $item->title }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row mt-1">
                                            <div class="col-lg-12">
                                                <div class="mb-1">
                                                    <textarea class="form-control" name="warranty" rows="2" style=" font-size: 12px; font-weight: 500;"
                                                        placeholder="Product Warrenty">{!! $products->warranty !!}</textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mb-1 row px-2">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <textarea name="short_desc" class="form-control" id="short_desc" rows="3"
                                        style=" font-size: 12px; font-weight: 500;">{!! $products->short_desc !!}</textarea>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mb-2">
                                    <textarea class="form-control" name="overview" id="overview" style=" font-size: 12px; font-weight: 500;">{!! $products->overview !!}</textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row px-2">
                            <div class="col-lg-6 col-sm-12">
                                <div class="mb-2">
                                    <textarea class="form-control" name="specification" id="specification" style=" font-size: 12px; font-weight: 500;">{!! $products->specification !!}</textarea>
                                </div>
                            </div>
                            <div class="col-lg-6 col-sm-12">
                                <div class="mb-2">
                                    <textarea class="form-control" name="accessories" id="accessories" style=" font-size: 12px; font-weight: 500;">{!! $products->accessories !!}</textarea>
                                </div>
                            </div>
                        </div>
                    </form>
                    <div class="row mt-3 px-2 mb-3">
                        <div class="col-lg-12">
                            <div class="table-responsive">
                                <table class="table table-hover table-bordered">
                                    <thead>
                                        <tr>
                                            <th width="15%">Source Name</th>
                                            <th width="15%">Source Link</th>
                                            <th width="10%">Price</th>
                                            <th width="12%">Estimate Time</th>
                                            <th width="12%">principal Time</th>
                                            <th width="12%">Shipping Time</th>
                                            <th width="8%">Location</th>
                                            <th width="8%">Country</th>
                                            <th width="8%">Approval</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <input class="form-control form-control-sm" type="text"
                                                    name="source_one_name" id=""
                                                    value="{{ $products->source_one_name }}">
                                            </td>
                                            <td>
                                                <input class="form-control form-control-sm" type="text"
                                                    name="source_one_link" id=""
                                                    value="{{ $products->source_one_link }}">
                                            </td>
                                            <td>
                                                <input class="form-control form-control-sm allow_decimal" type="text"
                                                    name="source_one_price" id=""
                                                    value="{{ $products->source_one_price }}">
                                            </td>

                                            <td>
                                                <input class="form-control form-control-sm allow_decimal" type="text"
                                                    name="source_one_estimate_time" id=""
                                                    value="{{ $products->source_one_estimate_time }}">
                                            </td>
                                            <td>
                                                <input class="form-control form-control-sm allow_decimal" type="text"
                                                    name="source_one_principal_time" id=""
                                                    value="{{ $products->source_one_principal_time }}">
                                            </td>
                                            <td>
                                                <input class="form-control form-control-sm allow_decimal" type="text"
                                                    name="source_one_shipping_time" id=""
                                                    value="{{ $products->source_one_shipping_time }}">
                                            </td>
                                            <td>
                                                <input class="form-control form-control-sm allow_decimal" type="text"
                                                    name="source_one_location" id=""
                                                    value="{{ $products->source_one_location }}">
                                            </td>
                                            <td>
                                                <input class="form-control form-control-sm allow_decimal" type="text"
                                                    name="source_one_country" id=""
                                                    value="{{ $products->source_one_country }}">
                                            </td>
                                            <td class="text-center">
                                                <input class="form-check-input" type="radio" name="source_approval"
                                                    value="1"{{ $products->source_one_approval == '1' ? 'checked' : '' }}>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><input class="form-control form-control-sm" type="text"
                                                    name="source_two_name" id=""
                                                    value="{{ $products->source_two_name }}"></td>
                                            <td><input class="form-control form-control-sm" type="text"
                                                    name="source_two_link" id=""
                                                    value="{{ $products->source_two_link }}"></td>
                                            <td><input class="form-control form-control-sm allow_decimal" type="text"
                                                    name="source_two_price" id=""
                                                    value="{{ $products->source_two_price }}"></td>
                                            <td><input class="form-control form-control-sm allow_decimal" type="text"
                                                    name=" source_two_estimate_time" id=""
                                                    value="{{ $products->source_two_estimate_time }}"></td>
                                            <td><input class="form-control form-control-sm allow_decimal" type="text"
                                                    name="source_two_principal_time" id=""
                                                    value="{{ $products->source_two_principal_time }}"></td>
                                            <td><input class="form-control form-control-sm allow_decimal" type="text"
                                                    name="source_two_shipping_time" id=""
                                                    value="{{ $products->source_two_shipping_time }}"></td>
                                            <td><input class="form-control form-control-sm allow_decimal" type="text"
                                                    name="source_two_location" id=""
                                                    value="{{ $products->source_two_location }}"></td>
                                            <td><input class="form-control form-control-sm allow_decimal" type="text"
                                                    name="source_two_country" id=""
                                                    value="{{ $products->source_two_country }}"></td>
                                            <td class="text-center"><input class="form-check-input" type="radio"
                                                    name="source_approval"
                                                    value="2"{{ $products->source_approval == '1' ? 'checked' : '' }}>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-3 px-2 mb-3">
                        <div class="col-lg-4 col-sm-12">
                            <div class="table-responsive">
                                <table class=" datatable table table-bordered table-hover">
                                    <tr>
                                        <th width="50%">Is this solid source? ( Y/N )</th>
                                        <td width="25%"><input class="margin-right:0.5rem" type="radio"
                                                name="solid_source" id="" value="yes"
                                                {{ $products->solid_source == 'yes' ? 'checked' : '' }}>&nbsp; Yes</td>
                                        <td width="25%"><input class="margin-right:0.5rem" type="radio"
                                                name="solid_source" id="" value="no"
                                                {{ $products->solid_source == 'no' ? 'checked' : '' }}>&nbsp; No</td>
                                    </tr>
                                    <tr>
                                        <th width="50%">Is this direct Principal ? ( Y/N )</th>
                                        <td width="25%"><input class="margin-right:0.5rem" type="radio"
                                                name="direct_principal" value="yes"
                                                {{ $products->direct_principal == 'yes' ? 'checked' : '' }}
                                                id="">&nbsp; Yes
                                        </td>
                                        <td width="25%"><input class="margin-right:0.5rem" type="radio"
                                                name="direct_principal" value="no"
                                                {{ $products->direct_principal == 'no' ? 'checked' : '' }}
                                                id="">&nbsp; No
                                        </td>
                                    </tr>
                                    <tr>
                                        <th width="50%">Does it have Agreement ? ( Y/N )</th>
                                        <td width="25%"><input class="margin-right:0.5rem" type="radio"
                                                name="agreement" value="yes"
                                                {{ $products->agreement == 'yes' ? 'checked' : '' }} id="">&nbsp;
                                            Yes</td>
                                        <td width="25%"><input class="margin-right:0.5rem" type="radio"
                                                name="agreement" value="no"
                                                {{ $products->agreement == 'no' ? 'checked' : '' }} id="">&nbsp;
                                            No</td>
                                    </tr>
                                    <tr>
                                        <th width="65%">Source Type :</th>
                                        <td width="35%" colspan="2">
                                            <select name="source_type" data-placeholder="Select Source Type.."
                                                class="form-select" required>
                                                <option></option>
                                                <option class="form-control" value="principal"
                                                    {{ $products->source_type == 'principal' ? 'selected' : '' }}>
                                                    Principal</option>
                                                <option class="form-control" value="distributor"
                                                    {{ $products->source_type == 'distributor' ? 'selected' : '' }}>
                                                    Distributor</option>
                                                <option class="form-control" value="supplier"
                                                    {{ $products->source_type == 'supplier' ? 'selected' : '' }}>
                                                    Supplier</option>
                                                <option class="form-control" value="retailer"
                                                    {{ $products->source_type == 'retailer' ? 'selected' : '' }}>
                                                    Retailer</option>
                                            </select>
                                        </td>
                                    </tr>
                                </table>

                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="col-sm-12">
                                        <h6> Source Contact Details</h6>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <textarea name="source_contact" id="" class="form-control">{!! $products->source_contact !!}</textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-5 col-sm-12">
                            <div class="table-responsive">
                                <table class=" datatable table table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th width="35%" style="font-size: 12px;">Competetor Name</th>
                                            <th width="35%" style="font-size: 12px;">Competetor Link</th>
                                            <th width="30%" style="font-size: 12px;">Price</th>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><input class="form-control form-control-sm" type="text"
                                                    name="competetor_one_name"
                                                    value="{{ $products->competetor_one_name }}">
                                            </td>
                                            <td><input class="form-control form-control-sm" type="text"
                                                    name="competetor_one_link"
                                                    value="{{ $products->competetor_one_link }}">
                                            </td>
                                            <td><input class="form-control form-control-sm allow_decimal" type="text"
                                                    name="competetor_one_price"
                                                    value="{{ $products->competetor_one_price }}"></td>

                                        </tr>
                                        <tr>
                                            <td><input class="form-control form-control-sm" type="text"
                                                    name="competetor_two_name"
                                                    value="{{ $products->competetor_two_name }}">
                                            </td>
                                            <td><input class="form-control form-control-sm" type="text"
                                                    name="competetor_two_link"
                                                    value="{{ $products->competetor_two_link }}">
                                            </td>
                                            <td><input class="form-control form-control-sm allow_decimal" type="text"
                                                    name="competetor_two_price"
                                                    value="{{ $products->competetor_two_price }}"></td>
                                        </tr>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-2 mb-3">
                        <div class="col-lg-4"></div>
                        <div class="col-lg-8">

                            <button type="submit" class="btn btn-success mx-3" name="action" id="submitbtn"
                                value="save">Save<i class="ph-paper-plane-tilt mx-2"></i></button>

                            <button type="submit" class="btn btn-primary mx-3" name="action" id="submitbtn"
                                value="approval">Save & Create SAS<i class="ph-paper-plane-tilt mx-2"></i></button>

                        </div>

                    </div>
                    <!--end row-->
                </div>

            </div>
        </div>
    </div>
    <!-- /content area -->
    <!-- /inner content -->

    </div>


    <script type="text/javascript">
        function mainThamUrl(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $('#mainThmb').attr('src', e.target.result).width(40).height(40);
                };
                reader.readAsDataURL(input.files[0]);
            }
        }
    </script>


    <script>
        $(document).ready(function() {
            $('#multiImg').on('change', function() { //on file input change
                if (window.File && window.FileReader && window.FileList && window
                    .Blob) //check File API supported browser
                {
                    var data = $(this)[0].files; //this file data

                    $.each(data, function(index, file) { //loop though each file
                        if (/(\.|\/)(gif|jpe?g|png|webp)$/i.test(file
                                .type)) { //check supported file type
                            var fRead = new FileReader(); //new filereader
                            fRead.onload = (function(file) { //trigger function on successful read
                                return function(e) {
                                    var img = $('<img/>').addClass('thumb').attr('src',
                                            e.target.result).width(70)
                                        .height(50); //create image element
                                    $('#preview_img').append(
                                        img); //append image to output element
                                };
                            })(file);
                            fRead.readAsDataURL(file); //URL representing the file's data.
                        }
                    });

                } else {
                    alert("Your browser doesn't support File API!"); //if File API is absent
                }
            });
        });
    </script>

    <script>
        //---------Sidebar list Show Hide----------

        $(document).ready(function() {

            $('#dealId').click(function() {
                $("#dealExpand").toggle(this.checked);
            });

            $('#rfqId').click(function() {

                $("#rfqExpand").toggle('slow');

            });


        });
    </script>
@endsection
@once
    @push('scripts')
        <script>
            $('.stock_select').on('change', function() {

                var stock_value = $(this).find(":selected").val();

                if (stock_value == 'available') {
                    $(".qty_display").removeClass("d-none");
                } else if (stock_value == 'limited') {
                    $(".qty_display").removeClass("d-none");
                } else {
                    $(".qty_display").addClass("d-none");
                }

            });
        </script>
    @endpush
@endonce
