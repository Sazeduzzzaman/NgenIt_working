@extends('admin.master')
@section('content')
    <style>
        .label_style {
            width: 151px !important;
        }
    </style>
    <div class="content-wrapper">
        <!-- Page header -->
        <div class="page-header page-header-light shadow">
            <div class="page-header-content d-lg-flex border-top">
                <div class="d-flex">
                    <div class="breadcrumb py-2">
                        <a href="{{ route('admin.dashboard') }}" class="breadcrumb-item"><i class="ph-house me-2"></i> Home</a>
                        <a href="{{ route('solutionDetails.index') }}" class="breadcrumb-item">Solution Details</a>
                        <a href="" class="breadcrumb-item">Edit</a>
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
        <div class="content pt-2 w-75 mx-auto">
            <div class="text-center">
                <div class="text-start">
                    <div class="row main_bg py-1 rounded-1 d-flex align-items-center gx-0 px-2">
                        <div class="col-lg-4 col-sm-12">
                            <div>
                                <a class="btn btn-primary btn-rounded rounded-circle btn-icon back-btn"
                                    href="{{ route('solutionDetails.index') }}">
                                    <i class="fa-solid fa-arrow-left main_color"></i>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-12 d-flex justify-content-center">
                            <p class="text-white p-0 m-0 fw-bold"> Add Solution Details </p>
                        </div>
                        <div class="col-lg-4 col-sm-12 d-flex justify-content-end">
                            <div>
                                <a href="{{ route('solutionDetails.index') }}" class="btn navigation_btn">
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
            </div>

            <div class="card">
                <!--Banner Section-->
                <div class="container">
                    <div class="row g-2 p-1">
                        <div class="col">
                            <span class="mt-1 fw-bold text-info">Banner Section</span>
                            <div class="px-2 py-2 rounded bg-light">
                                {{--  --}}
                                <div class="row mb-1">
                                    <div class="col-lg-4 col-sm-12">
                                        <span>Industry Title</span>
                                    </div>
                                    <div class="col-lg-8 col-sm-12">
                                        <select name="industry_id" class="form-control form-select-sm select"
                                            data-container-css-class="select-sm" data-minimum-results-for-search="Infinity"
                                            data-placeholder="Chose Industry Title" required>
                                            <option></option>
                                            @foreach ($industries as $industrie)
                                                <option @if ($industrie->id == $solutionDetail->industry_id) selected @endif
                                                    value="{{ $industrie->id }}">{{ $industrie->title }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                {{--  --}}
                                <div class="row mb-1">
                                    <div class="col-lg-4 d-flex align-items-center">
                                        <span>Banner Image</span>
                                    </div>
                                    <div class="col-lg-8">
                                        <div class="row">
                                            <div class="col-lg-8">
                                                <input name="banner_image" id="image" accept="image/*" type="file"
                                                    class="form-control form-control-sm" placeholder="Enter Banner Image"
                                                    value="{{ $solutionDetail->banner_image }}">
                                            </div>
                                            <div class="col-lg-4">
                                                <img class="img-fluid rounded-circle" id="showImage"
                                                    src="{{ asset('storage/requestImg/' . $solutionDetail->banner_image) }}"
                                                    alt=""
                                                    style="width: 30px;
                                                    height: 30px;">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                {{--  --}}
                                <div class="row mb-1">
                                    <div class="col-lg-4 col-sm-12">
                                        <span>Solution
                                            Name</span>
                                    </div>
                                    <div class="col-lg-8 col-sm-12">
                                        <input name="" type="text" maxlength="255"
                                            class="form-control form-control-sm" placeholder="Enter Solution Name"
                                            style="padding: 2px 10px 0px 10px;" value="{{ $solutionDetail->name }}">
                                    </div>
                                </div>
                                {{--  --}}
                                <div class="row">
                                    <div class="col-lg-4 col-sm-12">
                                        <span>Solution
                                            Header</span>
                                    </div>
                                    <div class="col-lg-8 col-sm-12">
                                        <textarea class="form-control form-control-sm" name="header" cols="60" rows="2"
                                            placeholder="Enter Solution Header">{{ $solutionDetail->header }}</textarea>
                                    </div>
                                </div>
                            </div>

                            <span class="mt-1 fw-bold text-info">Row Two with Solution Card</span>
                            <div class="px-2 py-2 rounded bg-light">
                                {{--  --}}
                                <div class="row mb-1">
                                    <div class="col-lg-4 col-sm-12">
                                        <span>Section Title</span>
                                    </div>
                                    <div class="col-lg-8 col-sm-12">
                                        <input type="text" name="row_two_title" class="form-control form-control-sm"
                                            maxlength="255" placeholder="Enter Solution Card Section Title"
                                            value="{{ $solutionDetail->row_two_title }}" />
                                    </div>
                                </div>
                                {{--  --}}
                                <div class="row mb-1">
                                    <div class="col-lg-4 col-sm-12">
                                        <span>Section Header</span>
                                    </div>
                                    <div class="col-lg-8 col-sm-12">
                                        <textarea class="form-control form-control-sm" name="row_two_header" cols="60" rows="2"
                                            placeholder="Enter Solution Card Section Header">{{ $solutionDetail->row_two_header }}</textarea>
                                    </div>
                                </div>
                                {{--  --}}
                                <div class="row mb-1">
                                    <div class="col-lg-4 col-sm-12">
                                        <span>Solution
                                            Card One</span>
                                    </div>
                                    <div class="col-lg-8 col-sm-12">
                                        <select name="product_type" data-placeholder="Select Product Type.."
                                            class="form-control select" required>
                                            <option></option>
                                            @foreach ($solution_cards as $solution_card)
                                                <option @if ($solution_card->id == $solutionDetail->solution_card_one_id) selected @endif
                                                    class="form-control" value="{{ $solution_card->id }}">
                                                    {{ $solution_card->title }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                {{--  --}}
                                <div class="row mb-1">
                                    <div class="col-lg-4 col-sm-12">
                                        <span>Solution Card Two</span>
                                    </div>
                                    <div class="col-lg-8 col-sm-12">
                                        <select name="solution_card_two_id" class="form-control select"
                                            data-container-css-class="select-sm"
                                            data-placeholder="Chose Solution Card Two" required>
                                            <option></option>
                                            @foreach ($solution_cards as $solution_card)
                                                <option @if ($solution_card->id == $solutionDetail->solution_card_two_id) selected @endif
                                                    class="form-control" value="{{ $solution_card->id }}">
                                                    {{ $solution_card->title }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                {{--  --}}
                                <div class="row mb-1">
                                    <div class="col-lg-4 col-sm-12">
                                        <span>Solution Card Three</span>
                                    </div>
                                    <div class="col-lg-8 col-sm-12">
                                        <select name="solution_card_three_id" class="form-control select"
                                            data-container-css-class="select-sm"
                                            data-placeholder="Chose Solution Card Three" required>
                                            <option></option>
                                            @foreach ($solution_cards as $solution_card)
                                                <option @if ($solution_card->id == $solutionDetail->solution_card_three_id) selected @endif
                                                    class="form-control" value="{{ $solution_card->id }}">
                                                    {{ $solution_card->title }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                {{--  --}}
                                <div class="row mb-1">
                                    <div class="col-lg-4 col-sm-12">
                                        <span>Solution Card Four</span>
                                    </div>
                                    <div class="col-lg-8 col-sm-12">
                                        <select name="solution_card_four_id" class="form-control select"
                                            data-container-css-class="select-sm"
                                            data-placeholder="Chose Solution Card Four" required>
                                            <option></option>
                                            @foreach ($solution_cards as $solution_card)
                                                <option @if ($solution_card->id == $solutionDetail->solution_card_four_id) selected @endif
                                                    class="form-control" value="{{ $solution_card->id }}">
                                                    {{ $solution_card->title }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                {{--  --}}
                                <div class="row">
                                    <div class="col-lg-4 col-sm-12">
                                        <span>Solution
                                            Card Five</span>
                                    </div>
                                    <div class="col-lg-8 col-sm-12">
                                        <select name="solution_card_five_id" class="form-control select"
                                            data-container-css-class="select-sm"
                                            data-placeholder="Chose Solution Card Five" required>
                                            <option></option>
                                            @foreach ($solution_cards as $solution_card)
                                                <option @if ($solution_card->id == $solutionDetail->solution_card_five_id) selected @endif
                                                    class="form-control" value="{{ $solution_card->id }}">
                                                    {{ $solution_card->title }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="col">
                            <span class="mt-1 fw-bold text-info">Row One With List</span>
                            <div class="px-2 py-2 rounded bg-light">
                                {{--  --}}
                                <div class="row">
                                    <div class="col-lg-4 col-sm-12">
                                        <span>Row
                                            With List
                                            ID</span>
                                    </div>
                                    <div class="col-lg-8 col-sm-12">
                                        <select name="row_one_id" class="form-control select"
                                            data-container-css-class="select-sm" data-placeholder="Chose Row One List Id"
                                            required>
                                            <option></option>
                                            @foreach ($rows as $row)
                                                <option class="form-control" value="{{ $row->id }}">
                                                    {{ $row->title }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                {{--  --}}
                            </div>
                            <span class="mt-1 fw-bold text-info">Row Three With Background Color</span>
                            <div class="px-2 py-2 rounded bg-light">
                                {{--  --}}
                                <div class="row mb-1">
                                    <div class="col-lg-4 col-sm-12">
                                        <span>Row Three Title</span>
                                    </div>
                                    <div class="col-lg-8 col-sm-12">
                                        <input name="row_three_title" type="text" maxlength="255"
                                            class="form-control form-control-sm" placeholder="Enter Row Three Title"
                                            style="padding: 2px 10px 0px 10px;"
                                            value="{{ $solutionDetail->row_three_title }}">
                                    </div>
                                </div>
                                {{--  --}}
                                <div class="row">
                                    <div class="col-lg-4 col-sm-12">
                                        <span>Row
                                            Three Header</span>
                                    </div>
                                    <div class="col-lg-8 col-sm-12">
                                        <textarea class="form-control form-control-sm" name="row_three_header" cols="60" rows="2"
                                            placeholder="Enter Row Three Header">{{ $solutionDetail->row_three_header }}</textarea>
                                    </div>
                                </div>
                            </div>
                            <span class="mt-1 fw-bold text-info">Row Four with Right side Image</span>
                            <div class="px-2 py-2 rounded bg-light">
                                {{--  --}}
                                <div class="row">
                                    <div class="col-lg-4 col-sm-12">
                                        <span> Row With List Image</span>
                                    </div>
                                    <div class="col-lg-8 col-sm-12">
                                        <select name="row_four_id" class="form-control select"
                                            data-container-css-class="select-sm"
                                            data-placeholder="Chose Row Four With List ID" required>
                                            <option></option>
                                            @foreach ($rows as $row)
                                                <option @if ($row->id == $solutionDetail->row_four_id) selected @endif
                                                    class="form-control" value="{{ $row->id }}">
                                                    {{ $row->title }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <span class="mt-1 fw-bold text-info">Row Five with Solution Card</span>
                            <div class="px-2 py-2 rounded bg-light">
                                <div class="row mb-1">
                                    <div class="col-lg-4 col-sm-12">
                                        <span>Row Five Title</span>
                                    </div>
                                    <div class="col-lg-8 col-sm-12">
                                        <input name="row_five_title" type="text" maxlength="255"
                                            class="form-control form-control-sm" placeholder="Enter Row Five Title"
                                            style="padding: 2px 10px 0px 10px;"
                                            value="{{ $solutionDetail->row_five_title }}">
                                    </div>
                                </div>
                                {{--  --}}
                                <div class="row mb-1">
                                    <div class="col-lg-4 col-sm-12">
                                        <span>Row
                                            Five Header</span>
                                    </div>
                                    <div class="col-lg-8 col-sm-12">
                                        <textarea class="form-control form-control-sm" name="row_five_header" cols="60" rows="2"
                                            placeholder="Enter Row Five Header">{{ $solutionDetail->row_five_header }}</textarea>
                                    </div>
                                </div>
                                {{--  --}}
                                <div class="row mb-1">
                                    <div class="col-lg-4 col-sm-12">
                                        <span>Solution Card Six</span>
                                    </div>
                                    <div class="col-lg-8 col-sm-12">
                                        <select name="solution_card_six_id" class="form-control form-select-sm select"
                                            data-container-css-class="select-sm"
                                            data-placeholder="Chose Solution Card One" required>
                                            <option></option>
                                            @foreach ($solution_cards as $solution_card)
                                                <option @if ($solution_card->id == $solutionDetail->solution_card_six_id) selected @endif
                                                    class="form-control" value="{{ $solution_card->id }}">
                                                    {{ $solution_card->title }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                {{--  --}}
                                <div class="row mb-1">
                                    <div class="col-lg-4 col-sm-12">
                                        <span>Solution
                                            Card Seven</span>
                                    </div>
                                    <div class="col-lg-8 col-sm-12">
                                        <select name="solution_card_seven_id" class="form-control form-select-sm select"
                                            data-container-css-class="select-sm"
                                            data-placeholder="Chose Solution Card One" required>
                                            <option></option>
                                            @foreach ($solution_cards as $solution_card)
                                                <option @if ($solution_card->id == $solutionDetail->solution_card_seven_id) selected @endif
                                                    class="form-control" value="{{ $solution_card->id }}">
                                                    {{ $solution_card->title }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                {{--  --}}
                                <div class="row">
                                    <div class="col-lg-4 col-sm-12">
                                        <span>Solution
                                            Card Eight</span>
                                    </div>
                                    <div class="col-lg-8 col-sm-12">
                                        <select name="solution_card_eight_id" class="form-control form-select-sm select"
                                            data-container-css-class="select-sm"
                                            data-placeholder="Chose Solution Card Eigh" required>
                                            <option></option>
                                            @foreach ($solution_cards as $solution_card)
                                                <option @if ($solution_card->id == $solutionDetail->solution_card_eight_id) selected @endif
                                                    class="form-control" value="{{ $solution_card->id }}">
                                                    {{ $solution_card->title }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer border-0 pb-2 pe-3">
                    <button type="submit" class="submit_btn from-prevent-multiple-submits"
                        style="padding: 4px 9px;">Submit</button>
                </div>
            </div>

            </form>
        </div>
        <!-- /content area -->
        <!-- /inner content -->

    </div>
@endsection
