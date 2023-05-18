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
                        <span class="breadcrumb-item active">Brand Page Management</span>
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
        <div class="content pt-0 w-75 mx-auto">
            <div class="d-flex align-items-center py-2">
                {{-- Add Details Start --}}
                <div class="text-success nav-link cat-tab3"
                    style="position: relative;
                    z-index: 999;
                    margin-bottom: -40px;">
                    <a href="" data-bs-toggle="modal" data-bs-target="#brandPage">
                        <div class="d-flex align-items-center">
                            <span class="ms-2 icon_btn" style="font-weight: 800;" data-bs-toggle="tooltip"
                                data-bs-placement="top" title="Add Solution Details">
                                <i class="ph-plus icons_design"></i> </span>
                            <span class="ms-1" style="color: #247297;">Add</span>
                        </div>
                    </a>
                    <div class="text-center" style="margin-left: 300px">
                        <h5 class="ms-1" style="color: #247297;">All Brand Page</h5>
                    </div>
                </div>
                {{-- Add Details End --}}
            </div>
            <div>
                <table class="table brandPage table-bordered table-hover text-center">
                    <thead>
                        <tr>
                            <th width="10%">Id</th>
                            <th width="15%">Banner Image</th>
                            <th width="20%">Brand Name</th>
                            <th width="30%">Header</th>
                            <th width="15%">Row six image</th>
                            <th width="10%" class="text-center">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if ($brandPages)
                            @foreach ($brandPages as $key => $brandPage)
                                <tr>
                                    <td>{{ ++$key }}</td>
                                    <td class="text-center"><img class="rounded-circle"
                                            src="{{ asset('storage/requestImg/' . $brandPage->banner_image) }}"
                                            height="25" width="25" alt=""></td>
                                    <td>{{ App\Models\Admin\Brand::where('id', $brandPage->brand_id)->value('title') }}
                                    </td>
                                    <td>{{ $brandPage->header }}</td>

                                    <td class="text-center"><img class="rounded-circle"
                                            src="{{ asset('storage/requestImg/' . $brandPage->row_six_image) }}"
                                            height="25" width="25" alt=""></td>
                                    <td>
                                        <a href="" class="text-primary" data-bs-toggle="modal"
                                            data-bs-target="#editBrand">
                                            <i class="fa-solid fa-pen-to-square me-2 p-1 rounded-circle text-primary"></i>
                                        </a>
                                        <a href="{{ route('brandPage.destroy', [$brandPage->id]) }}"
                                            class="text-danger delete">
                                            <i class="fa-solid fa-trash p-1 rounded-circle text-danger"></i>
                                        </a>
                                        {{-- Edit Success Modal --}}
                                        <div id="editBrand" class="modal fade" tabindex="-1">
                                            <div class="modal-dialog modal-dialog-centered modal-lg">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h6 class="modal-title text-white">BrandPage Edit</h6>
                                                        <a type="button" data-bs-dismiss="modal">
                                                            <i class="ph ph-x text-white"
                                                                style="font-weight: 800;font-size: 10px;"></i>
                                                        </a>
                                                    </div>
                                                    <div class="modal-body p-0 px-2">
                                                        <form method="post"
                                                            action="{{ route('brandPage.update', $brandPage->id) }}"
                                                            enctype="multipart/form-data">
                                                            @csrf
                                                            @method('PUT')
                                                            <div class="container pt-2">
                                                                <div class="row">
                                                                    <div class="col-lg-6 col-sm-6">
                                                                        <p class="mt-2 mb-0 pb-0 fw-bold"
                                                                            style="color:#247297;">Banner Row</p>
                                                                        <div class="py-2 px-2 bg-light"
                                                                            style="    border-top: 1px solid #247297;">
                                                                            {{--  --}}
                                                                            <div class="row  mb-1">
                                                                                <div class="col-sm-4">
                                                                                    <span>Slect Brand</span>
                                                                                </div>
                                                                                <div class="col-sm-8">
                                                                                    <select name="brand_id"
                                                                                        data-placeholder="Select brand_id.."
                                                                                        class="form-control form-control-sm select"
                                                                                        id="brand_id">
                                                                                        <option></option>
                                                                                        @foreach ($brands as $brand)
                                                                                            <option
                                                                                                @if ($brand->id == $brandPage->brand_id) selected @endif
                                                                                                class="form-control"
                                                                                                value="{{ $brand->id }}">
                                                                                                {{ $brand->title }}</option>
                                                                                        @endforeach
                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                            {{--  --}}
                                                                            <div class="row  mb-1">
                                                                                <div class="col-sm-4">
                                                                                    <span>Brand Logo</span>
                                                                                </div>
                                                                                <div class="col-sm-6">
                                                                                    <input type="file" name="brand_logo"
                                                                                        class="form-control form-control-sm"
                                                                                        id="image1" accept="image/*" />
                                                                                </div>
                                                                                <div class="col-sm-2">
                                                                                    <img class="" id="showImage1"
                                                                                        height="25px" width="25px"
                                                                                        src="{{ asset('storage/requestImg/' . $brandPage->brand_logo) }}"
                                                                                        alt="">
                                                                                </div>
                                                                            </div>
                                                                            {{--  --}}
                                                                            <div class="row  mb-1">
                                                                                <div class="col-sm-4">
                                                                                    <span>Banner Image</span>
                                                                                </div>
                                                                                <div class="col-sm-6">
                                                                                    <input type="file"
                                                                                        name="banner_image"
                                                                                        class="form-control form-control-sm"
                                                                                        id="image1" accept="image/*" />
                                                                                </div>
                                                                                <div class="col-sm-2">
                                                                                    <img class="" id="showImage1"
                                                                                        height="25px" width="25px"
                                                                                        src="{{ asset('storage/requestImg/' . $brandPage->banner_image) }}"
                                                                                        alt="">
                                                                                </div>
                                                                            </div>
                                                                            {{--  --}}
                                                                            <div class="row  mb-1">
                                                                                <div class="col-sm-4">
                                                                                    <p class="mt-2 mb-0 pb-0 fw-bold"
                                                                                        style="color:#247297;">Header</p>
                                                                                </div>
                                                                                <div class="col-sm-8">
                                                                                    <textarea name="header" id="" class="form-control form-control-sm" cols="30" rows="3">{{ $brandPage->header }}</textarea>
                                                                                </div>
                                                                            </div>
                                                                            {{--  --}}
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-6 col-sm-6">
                                                                        <p class="mt-2 mb-0 pb-0 fw-bold"
                                                                            style="color:#247297;">Right Side Info</p>
                                                                        <div class="py-2 px-2 bg-light"
                                                                            style="    border-top: 1px solid #247297;">
                                                                            {{--  --}}
                                                                            <div class="row mb-1">
                                                                                <div class="col-sm-4">
                                                                                    <span>Image with Button</span>
                                                                                </div>
                                                                                <div class="col-sm-8">
                                                                                    <select name="row_four_id"
                                                                                        data-placeholder="Select row_four.."
                                                                                        class="form-control select">
                                                                                        <option></option>
                                                                                        @foreach ($rows as $row)
                                                                                            <option
                                                                                                @if ($row->id == $brandPage->row_four_id) selected @endif
                                                                                                class="form-control"
                                                                                                value="{{ $row->id }}">
                                                                                                {{ $row->title }}
                                                                                            </option>
                                                                                        @endforeach
                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                            {{--  --}}
                                                                            <div class="row mb-1">
                                                                                <div class="col-sm-4">
                                                                                    <span>Card One </span>
                                                                                </div>
                                                                                <div class="col-sm-8">
                                                                                    <select name="solution_card_one_id"
                                                                                        data-placeholder="Select card_one.."
                                                                                        class="form-control form-control-sm select">
                                                                                        <option></option>
                                                                                        @foreach ($solution_cards as $solution_card)
                                                                                            <option
                                                                                                @if ($solution_card->id == $brandPage->solution_card_one_id) selected @endif
                                                                                                class="form-control"
                                                                                                value="{{ $solution_card->id }}">
                                                                                                {{ $solution_card->title }}
                                                                                            </option>
                                                                                        @endforeach
                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                            {{--  --}}
                                                                            <div class="row mb-1">
                                                                                <div class="col-sm-4">
                                                                                    <span>Row One Title</span>
                                                                                </div>
                                                                                <div class="col-sm-8">
                                                                                    <input type="text"
                                                                                        name="row_one_title"
                                                                                        value="{{ $brandPage->row_one_title }}"
                                                                                        class="form-control form-control-sm maxlength"
                                                                                        maxlength="255" id="title" />
                                                                                </div>
                                                                            </div>
                                                                            {{--  --}}
                                                                            <div class="row mb-1">
                                                                                <div class="col-sm-4">
                                                                                    <span>Row One Header</span>
                                                                                </div>
                                                                                <div class="col-sm-8">
                                                                                    <textarea name="row_one_header" id="header" class="form-control form-control-sm" cols="30" rows="3">{{ $brandPage->row_one_header }}</textarea>
                                                                                </div>
                                                                            </div>
                                                                            {{--  --}}

                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-lg-6 col-sm-6">
                                                                        <p class="mt-2 mb-0 pb-0 fw-bold"
                                                                            style="color:#247297;">Banner Row</p>
                                                                        <div class="py-2 px-2 bg-light"
                                                                            style="    border-top: 1px solid #247297;">
                                                                            <div class="row mb-1">
                                                                                <div class="col-sm-4">
                                                                                    <span>Card Two</span>
                                                                                </div>
                                                                                <div class="col-sm-8">
                                                                                    <select name="solution_card_two_id"
                                                                                        data-placeholder="Select Card two"
                                                                                        class="form-control select">
                                                                                        <option></option>
                                                                                        @foreach ($solution_cards as $solution_card)
                                                                                            <option
                                                                                                @if ($solution_card->id == $brandPage->solution_card_two_id) selected @endif
                                                                                                class="form-control"
                                                                                                value="{{ $solution_card->id }}">
                                                                                                {{ $solution_card->title }}
                                                                                            </option>
                                                                                        @endforeach
                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                            {{--  --}}
                                                                            <div class="row mb-2">
                                                                                <div class="col-sm-4">
                                                                                    <span>Card Three</span>
                                                                                </div>
                                                                                <div class="col-sm-8">
                                                                                    <select name="solution_card_three_id"
                                                                                        data-placeholder="Select Card Three.."
                                                                                        class="form-control select">
                                                                                        <option></option>
                                                                                        @foreach ($solution_cards as $solution_card)
                                                                                            <option
                                                                                                @if ($solution_card->id == $brandPage->solution_card_three_id) selected @endif
                                                                                                class="form-control"
                                                                                                value="{{ $solution_card->id }}">
                                                                                                {{ $solution_card->title }}
                                                                                            </option>
                                                                                        @endforeach
                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                            {{--  --}}
                                                                            <div class="row mb-2">
                                                                                <div class="col-sm-4">
                                                                                    <span>Row Five</span>
                                                                                </div>
                                                                                <div class="col-sm-8">
                                                                                    <select name="row_five_id"
                                                                                        data-placeholder="Select Row Five.."
                                                                                        class="form-control select">
                                                                                        <option></option>
                                                                                        @foreach ($rows as $row)
                                                                                            <option
                                                                                                @if ($row->id == $brandPage->row_five_id) selected @endif
                                                                                                class="form-control"
                                                                                                value="{{ $row->id }}">
                                                                                                {{ $row->title }}
                                                                                            </option>
                                                                                        @endforeach
                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                            {{--  --}}
                                                                            <div class="row mb-2">
                                                                                <div class="col-sm-4">
                                                                                    <span>Row Six Image</span>
                                                                                </div>
                                                                                <div class="col-sm-6">
                                                                                    <input type="file"
                                                                                        name="row_six_image"
                                                                                        class="form-control form-control-sm"
                                                                                        id="image" accept="image/*" />
                                                                                </div>
                                                                                <div class="col-sm-2">
                                                                                    <img class="" id="showImage"
                                                                                        height="25px" width="25px"
                                                                                        src="{{ asset('storage/requestImg/' . $brandPage->row_six_image) }}"
                                                                                        alt="">
                                                                                </div>
                                                                            </div>
                                                                            {{--  --}}
                                                                            <div class="row mb-1">
                                                                                <div class="col-sm-4">
                                                                                    <span>Row Nine title</span>
                                                                                </div>
                                                                                <div class="col-sm-8">
                                                                                    <input type="text"
                                                                                        name="row_nine_title"
                                                                                        value="{{ $brandPage->row_nine_title }}"
                                                                                        class="form-control form-control-sm maxlength"
                                                                                        maxlength="255" id="title" />
                                                                                </div>
                                                                            </div>
                                                                            {{--  --}}

                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-6 col-sm-6">
                                                                        <p class="mt-2 mb-0 pb-0 fw-bold"
                                                                            style="color:#247297;">Banner Row</p>
                                                                        <div class="py-2 px-2 bg-light"
                                                                            style="    border-top: 1px solid #247297;">
                                                                            {{--  --}}
                                                                            <div class="row mb-1">
                                                                                <div class="col-sm-4">
                                                                                    <span>Row Six title</span>
                                                                                </div>
                                                                                <div class="col-sm-8">
                                                                                    <input type="text"
                                                                                        name="row_six_title"
                                                                                        value="{{ $brandPage->row_six_title }}"
                                                                                        class="form-control form-control-sm maxlength"
                                                                                        maxlength="255" id="title" />
                                                                                </div>
                                                                            </div>
                                                                            {{--  --}}
                                                                            <div class="row mb-1">
                                                                                <div class="col-sm-4">
                                                                                    <span>Row Seven</span>
                                                                                </div>
                                                                                <div class="col-sm-8">
                                                                                    <select name="row_seven_id"
                                                                                        data-placeholder="Select Row Seven.."
                                                                                        class="form-control form-control-sm select">
                                                                                        <option></option>
                                                                                        @foreach ($rows as $row)
                                                                                            <option
                                                                                                @if ($row->id == $brandPage->row_seven_id) selected @endif
                                                                                                class="form-control"
                                                                                                value="{{ $row->id }}">
                                                                                                {{ $row->title }}
                                                                                            </option>
                                                                                        @endforeach
                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                            {{--  --}}
                                                                            <div class="row mb-1">
                                                                                <div class="col-sm-4">
                                                                                    <span>Row Eight</span>
                                                                                </div>
                                                                                <div class="col-sm-8">
                                                                                    <select name="row_eight_id"
                                                                                        data-placeholder="Select Row Eight.."
                                                                                        class="form-control form-control-sm select">
                                                                                        <option></option>
                                                                                        @foreach ($row_with_cols as $row_with_col)
                                                                                            <option
                                                                                                @if ($row_with_col->id == $brandPage->row_eight_id) selected @endif
                                                                                                class="form-control"
                                                                                                value="{{ $row_with_col->id }}">
                                                                                                {{ $row_with_col->title }}
                                                                                            </option>
                                                                                        @endforeach
                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                            {{--  --}}
                                                                            <div class="row mb-1">
                                                                                <div class="col-sm-4">
                                                                                    <span>Row Nine header</span>
                                                                                </div>
                                                                                <div class="col-sm-8">
                                                                                    <textarea name="row_nine_header" id="header" class="form-control form-control-sm" cols="30" rows="1">{{ $brandPage->row_nine_header }}</textarea>
                                                                                </div>
                                                                            </div>
                                                                            {{--  --}}

                                                                            <div class="row mb-1">
                                                                                <div class="col-sm-4">
                                                                                    <span>Row Six header</span>
                                                                                </div>
                                                                                <div class="col-sm-8">
                                                                                    <textarea name="row_six_header" id="" class="form-control form-control-sm" cols="30" rows="3">{{ $brandPage->row_six_header }}</textarea>
                                                                                </div>
                                                                            </div>
                                                                            {{--  --}}
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="modal-footer border-0 pt-2 pb-0 pe-0">
                                                                <button type="submit"
                                                                    class="submit_btn from-prevent-multiple-submits"
                                                                    style="padding: 5px;">Submit</button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        {{-- Edit Success Modal End --}}
                                    </td>
                                </tr>
                            @endforeach
                        @endif
                    </tbody>
                </table>
            </div>
        </div>
        {{-- Add Success Modal --}}
        <div id="brandPage" class="modal fade" tabindex="-1">
            <div class="modal-dialog modal-dialog-centered modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h6 class="modal-title text-white">Add Brand Page Form</h6>
                        <a type="button" data-bs-dismiss="modal">
                            <i class="ph ph-x text-white" style="font-weight: 800;font-size: 10px;"></i>
                        </a>
                    </div>
                    <div class="modal-body p-0 px-2">
                        <form method="post" action="{{ route('brandPage.store') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="container pt-2">
                                <div class="row">
                                    <div class="col-lg-6 col-sm-6">
                                        <p class="mt-2 mb-0 pb-0 fw-bold" style="color:#247297;">Banner Row</p>
                                        <div class="py-2 px-2 bg-light" style="    border-top: 1px solid #247297;">
                                            {{--  --}}
                                            <div class="row  mb-1">
                                                <div class="col-sm-4">
                                                    <span>Slect Brand</span>
                                                </div>
                                                <div class="col-sm-8">
                                                    <select name="brand_id" data-placeholder="Select brand_id.."
                                                        class="form-control form-control-sm select" id="brand_id">
                                                        <option></option>
                                                        @foreach ($brands as $brand)
                                                            <option class="form-control form-control-sm"
                                                                value="{{ $brand->id }}">
                                                                {{ $brand->title }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            {{--  --}}
                                            <div class="row  mb-1">
                                                <div class="col-sm-4">
                                                    <span>Brand Logo</span>
                                                </div>
                                                <div class="col-sm-6">
                                                    <input type="file" name="brand_logo"
                                                        class="form-control form-control-sm" id="image1"
                                                        accept="image/*" />
                                                </div>
                                                <div class="col-sm-2">
                                                    <img class="" id="showImage1" height="25px" width="25px"
                                                        src="https://cdn.pixabay.com/photo/2017/02/07/02/16/cloud-2044823_960_720.png"
                                                        alt="">
                                                </div>
                                            </div>
                                            {{--  --}}
                                            <div class="row  mb-1">
                                                <div class="col-sm-4">
                                                    <span>Banner Image</span>
                                                </div>
                                                <div class="col-sm-6">
                                                    <input type="file" name="banner_image"
                                                        class="form-control form-control-sm" id="image1"
                                                        accept="image/*" />
                                                </div>
                                                <div class="col-sm-2">
                                                    <img class="" id="showImage1" height="25px" width="25px"
                                                        src="https://cdn.pixabay.com/photo/2017/02/07/02/16/cloud-2044823_960_720.png"
                                                        alt="">
                                                </div>
                                            </div>
                                            {{--  --}}
                                            <div class="row  mb-1">
                                                <div class="col-sm-4">
                                                    <p class="mt-2 mb-0 pb-0 fw-bold" style="color:#247297;">Header</p>
                                                </div>
                                                <div class="col-sm-8">
                                                    <textarea name="header" id="" class="form-control form-control-sm" cols="30" rows="3"></textarea>
                                                </div>
                                            </div>
                                            {{--  --}}
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-sm-6">
                                        <p class="mt-2 mb-0 pb-0 fw-bold" style="color:#247297;">Right Side Info</p>
                                        <div class="py-2 px-2 bg-light" style="    border-top: 1px solid #247297;">
                                            {{--  --}}
                                            <div class="row mb-1">
                                                <div class="col-sm-4">
                                                    <span>Image with Button</span>
                                                </div>
                                                <div class="col-sm-8">
                                                    <select name="row_four_id" data-placeholder="Select row_four.."
                                                        class="form-control select">
                                                        <option></option>
                                                        @foreach ($rows as $row)
                                                            <option class="form-control form-control-sm"
                                                                value="{{ $row->id }}">
                                                                {{ $row->title }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            {{--  --}}
                                            <div class="row mb-1">
                                                <div class="col-sm-4">
                                                    <span>Card One </span>
                                                </div>
                                                <div class="col-sm-8">
                                                    <select name="solution_card_one_id"
                                                        data-placeholder="Select card_one.."
                                                        class="form-control form-control-sm select">
                                                        <option></option>
                                                        @foreach ($solution_cards as $solution_card)
                                                            <option class="form-control form-control-sm"
                                                                value="{{ $solution_card->id }}">
                                                                {{ $solution_card->title }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            {{--  --}}
                                            <div class="row mb-1">
                                                <div class="col-sm-4">
                                                    <span>Row One Title</span>
                                                </div>
                                                <div class="col-sm-8">
                                                    <input type="text" name="row_one_title"
                                                        class="form-control form-control-sm maxlength" maxlength="255"
                                                        id="title" />
                                                </div>
                                            </div>
                                            {{--  --}}
                                            <div class="row mb-1">
                                                <div class="col-sm-4">
                                                    <span>Row One Header</span>
                                                </div>
                                                <div class="col-sm-8">
                                                    <textarea name="row_one_header" id="header" class="form-control form-control-sm" cols="30" rows="3"></textarea>
                                                </div>
                                            </div>
                                            {{--  --}}

                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6 col-sm-6">
                                        <p class="mt-2 mb-0 pb-0 fw-bold" style="color:#247297;">Banner Row</p>
                                        <div class="py-2 px-2 bg-light" style="    border-top: 1px solid #247297;">
                                            <div class="row mb-1">
                                                <div class="col-sm-4">
                                                    <span>Card Two</span>
                                                </div>
                                                <div class="col-sm-8">
                                                    <select name="solution_card_two_id" data-placeholder="Select Card two"
                                                        class="form-control select">
                                                        <option></option>
                                                        @foreach ($solution_cards as $solution_card)
                                                            <option class="form-control"
                                                                value="{{ $solution_card->id }}">
                                                                {{ $solution_card->title }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            {{--  --}}
                                            <div class="row mb-2">
                                                <div class="col-sm-4">
                                                    <span>Card Three</span>
                                                </div>
                                                <div class="col-sm-8">
                                                    <select name="solution_card_three_id"
                                                        data-placeholder="Select Card Three.."
                                                        class="form-control select">
                                                        <option></option>
                                                        @foreach ($solution_cards as $solution_card)
                                                            <option class="form-control"
                                                                value="{{ $solution_card->id }}">
                                                                {{ $solution_card->title }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            {{--  --}}
                                            <div class="row mb-2">
                                                <div class="col-sm-4">
                                                    <span>Row Five</span>
                                                </div>
                                                <div class="col-sm-8">
                                                    <select name="row_five_id" data-placeholder="Select Row Five.."
                                                        class="form-control select">
                                                        <option></option>
                                                        @foreach ($rows as $row)
                                                            <option class="form-control" value="{{ $row->id }}">
                                                                {{ $row->title }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            {{--  --}}
                                            <div class="row mb-2">
                                                <div class="col-sm-4">
                                                    <span>Row Six Image</span>
                                                </div>
                                                <div class="col-sm-6">
                                                    <input type="file" name="row_six_image"
                                                        class="form-control form-control-sm" id="image"
                                                        accept="image/*" />
                                                </div>
                                                <div class="col-sm-2">
                                                    <img class="" id="showImage" height="25px" width="25px"
                                                        src="https://cdn.pixabay.com/photo/2017/02/07/02/16/cloud-2044823_960_720.png"
                                                        alt="">
                                                </div>
                                            </div>
                                            {{--  --}}
                                            <div class="row mb-1">
                                                <div class="col-sm-4">
                                                    <span>Row Nine title</span>
                                                </div>
                                                <div class="col-sm-8">
                                                    <input type="text" name="row_nine_title"
                                                        class="form-control form-control-sm maxlength" maxlength="255"
                                                        id="title" />
                                                </div>
                                            </div>
                                            {{--  --}}

                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-sm-6">
                                        <p class="mt-2 mb-0 pb-0 fw-bold" style="color:#247297;">Banner Row</p>
                                        <div class="py-2 px-2 bg-light" style="    border-top: 1px solid #247297;">
                                            {{--  --}}
                                            <div class="row mb-1">
                                                <div class="col-sm-4">
                                                    <span>Row Six title</span>
                                                </div>
                                                <div class="col-sm-8">
                                                    <input type="text" name="row_six_title"
                                                        class="form-control form-control-sm maxlength" maxlength="255"
                                                        id="title" />
                                                </div>
                                            </div>
                                            {{--  --}}
                                            <div class="row mb-1">
                                                <div class="col-sm-4">
                                                    <span>Row Seven</span>
                                                </div>
                                                <div class="col-sm-8">
                                                    <select name="row_seven_id" data-placeholder="Select Row Seven.."
                                                        class="form-control form-control-sm select">
                                                        <option></option>
                                                        @foreach ($rows as $row)
                                                            <option class="form-control" value="{{ $row->id }}">
                                                                {{ $row->title }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            {{--  --}}
                                            <div class="row mb-1">
                                                <div class="col-sm-4">
                                                    <span>Row Eight</span>
                                                </div>
                                                <div class="col-sm-8">
                                                    <select name="row_eight_id" data-placeholder="Select Row Eight.."
                                                        class="form-control form-control-sm select">
                                                        <option></option>
                                                        @foreach ($row_with_cols as $row_with_col)
                                                            <option class="form-control" value="{{ $row_with_col->id }}">
                                                                {{ $row_with_col->title }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            {{--  --}}
                                            <div class="row mb-1">
                                                <div class="col-sm-4">
                                                    <span>Row Nine header</span>
                                                </div>
                                                <div class="col-sm-8">
                                                    <textarea name="row_nine_header" id="header" class="form-control form-control-sm" cols="30" rows="1"></textarea>
                                                </div>
                                            </div>
                                            {{--  --}}

                                            <div class="row mb-1">
                                                <div class="col-sm-4">
                                                    <span>Row Six header</span>
                                                </div>
                                                <div class="col-sm-8">
                                                    <textarea name="row_six_header" id="" class="form-control form-control-sm" cols="30" rows="3"></textarea>
                                                </div>
                                            </div>
                                            {{--  --}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer border-0 pt-2 pb-0 pe-0">
                                <button type="submit" class="submit_btn from-prevent-multiple-submits"
                                    style="padding: 5px;">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        {{-- Add Success Modal End --}}
    </div>
@endsection
@once
    @push('scripts')
        <script type="text/javascript">
            $('.brandPage').DataTable({
                dom: '<"datatable-header"fl><"datatable-scroll"t><"datatable-footer"ip>',
                "iDisplayLength": 10,
                "lengthMenu": [10, 25, 30, 50],
                columnDefs: [{
                    orderable: false,
                    targets: [5],
                }, ],
            });
        </script>
    @endpush
@endonce
