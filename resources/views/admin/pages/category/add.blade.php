@extends('admin.master')
@section('content')
    <div class="content-wrapper">

        <!-- Inner content -->
        <!-- Page header -->
        <div class="shadow-sm bg-white">
            <div class="d-flex justify-content-between align-items-center">
                {{-- Page Destination/ BreadCrumb --}}
                <div class="page-header-content d-lg-flex ">
                    <div class="d-flex px-2">
                        <div class="breadcrumb py-2">
                            <a href="index.html" class="breadcrumb-item"><i class="ph-house"></i></a>
                            <a href="{{ route('admin.dashboard') }}" class="breadcrumb-item">Home</a>
                            <a href="{{ route('category.index') }}" class="breadcrumb-item">Category Management</a>
                            <span class="breadcrumb-item active">Add</span>
                        </div>
                        <a href="#breadcrumb_elements"
                            class="btn btn-light align-self-center collapsed d-lg-none border-transparent rounded-pill p-0 ms-auto"
                            data-bs-toggle="collapse">
                            <i class="ph-caret-down collapsible-indicator ph-sm m-1"></i>
                        </a>
                    </div>
                </div>
                {{-- Inner Page Tab --}}

                <!-- Basic tabs -->
                <div>
                    <a href="{{ route('product-sourcing.index') }}" class="btn navigation_btn">
                        <div class="d-flex align-items-center ">
                            <i class="fa-solid fa-nfc-magnifying-glass me-1" style="font-size: 10px;"></i>
                            <span>Sourcing</span>
                        </div>
                    </a>
                    <a href="{{ route('purchase.index') }}" class="btn navigation_btn">
                        <div class="d-flex align-items-center ">
                            <i class="fa-solid fa-money-check-dollar-pen me-1" style="font-size: 10px;"></i>
                            <span>Purchase</span>
                        </div>
                    </a>
                    <a href="{{ route('delivery.index') }}" class="btn navigation_btn">
                        <div class="d-flex align-items-center ">
                            <i class="fa-solid fa-truck-bolt me-1" style="font-size: 10px;"></i>
                            <span>delivery</span>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <!-- /page header -->


        <!-- Content area -->
        <div class="content">
            <div class="row w-50 mx-auto">
                <div class="col-lg-12">
                    <ul class="nav nav-tabs">
                        <li class="nav-item d-flex justify-content-center">
                            <a href="#js-tab1" class="nav-link active" data-bs-toggle="tab">
                                Category
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="#js-tab2" class="nav-link" data-bs-toggle="tab">
                                Sub Category
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="#js-tab3" class="nav-link" data-bs-toggle="tab">
                                Sub Sub Category
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="#js-tab4" class="nav-link" data-bs-toggle="tab">
                                Sub Sub Sub Category
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="tab-content">
                <div class="tab-pane fade show active" id="js-tab1">
                    <div class="row w-50 mx-auto">
                        <div class="col-lg-12">
                            <div id="table1" class="card cardTd">
                                <div class="card-header p-0" style="background-color: #247297;">
                                    <div class="row d-flex justify-content-between align-items-center py-1 px-2">
                                        <div class="col-lg-6 col-sm-6">
                                            <a href="{{ route('category.index') }}" class="btn bg-light rounded-circle"
                                                style="width: 30px;
                                            height: 30px;"><i
                                                    class="ph ph-arrow-left"></i></a>
                                        </div>
                                        <div class="col-lg-6 col-sm-6 text-end">
                                            <span class=" text-white">Add Category Form</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <form method="post" action="{{ route('category.store') }}"
                                        enctype="multipart/form-data">
                                        @csrf
                                        <div class="row mb-1">
                                            <div class="col-sm-4">
                                                <span>Category Name</span>
                                            </div>
                                            <div class="col-sm-8 text-secondary">
                                                <input type="text" name="title"
                                                    class="form-control form-control-sm maxlength" maxlength="100" />
                                            </div>
                                        </div>
                                        <div class="row mb-1">
                                            <div class="col-sm-4">
                                                <span>Category Image</span>
                                                <h6 class="mb-0"></h6>
                                            </div>
                                            <div class="col-sm-8 text-secondary">
                                                <input type="file" name="image" class="form-control form-control-sm"
                                                    id="image" accept="image/*" required />
                                            </div>
                                        </div>
                                        <div class="row mb-1">
                                            <div class="col-sm-4">
                                                <span>Category Banner Image</span>
                                                <h6 class="mb-0"> </h6>
                                            </div>
                                            <div class="col-sm-8 text-secondary">
                                                <input type="file" name="banner_image"
                                                    class="form-control form-control-sm" id="banner_image" accept="image/*"
                                                    required />
                                            </div>
                                        </div>
                                        <div class="row mb-1">
                                            <div class="col-sm-4">
                                                <span>Category Status</span>
                                                <h6 class="mb-0"></h6>
                                            </div>
                                            <div class=" col-sm-8 text-secondary">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="status"
                                                        value="active" id="flexRadioDefault1">
                                                    <label class="form-check-label" for="flexRadioDefault1">
                                                        Active
                                                    </label>
                                                </div>
                                                <div class="form-check mt-2">
                                                    <input class="form-check-input" type="radio" name="status"
                                                        value="inactive" id="flexRadioDefault2" checked>
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

                </div>
            </div>

            <div class="tab-content">
                <div class="tab-pane fade show" id="js-tab2">
                    <div class="row w-50 mx-auto">
                        <div class="col-lg-12">
                            <div id="table2" class="card cardTd">
                                <div class="card-header p-0" style="background-color: #247297;">

                                    <div class="row d-flex justify-content-between align-items-center py-1 px-2">
                                        <div class="col-lg-6 col-sm-6">
                                            <a href="{{ route('category.index') }}" class="btn bg-light rounded-circle"
                                                style="width: 30px;
                                            height: 30px;"><i
                                                    class="ph ph-arrow-left"></i></a>
                                        </div>
                                        <div class="col-lg-6 col-sm-6 text-end">
                                            <span class=" text-white">Add Sub Category</span>
                                        </div>
                                    </div>

                                </div>

                                <div class="card-body">
                                    <div class="col-lg-12">
                                        <form method="post" action="{{ route('store.subcategory') }}"
                                            enctype="multipart/form-data">
                                            @csrf

                                            <div class="row mb-1">
                                                <div class="col-sm-4">
                                                    <span>Category Name</span>
                                                </div>
                                                <div class=" col-sm-8 text-secondary">
                                                    <select name="cat_id" class="form-control form-control-sm select"
                                                        data-width="100%" data-minimum-results-for-search="Infinity">
                                                        <option value=""> -- Select Category -- </option>
                                                        @foreach ($cats as $cat)
                                                            <option value="{{ $cat->id }}">{{ $cat->title }}
                                                            </option>
                                                        @endforeach

                                                    </select>
                                                </div>
                                            </div>

                                            <div class="row mb-1">
                                                <div class="col-sm-4">
                                                    <span>Sub Category Name</span>
                                                </div>
                                                <div class=" col-sm-8 text-secondary">
                                                    <input type="text" name="title"
                                                        class="form-control form-control-sm maxlength" maxlength="100" />
                                                </div>
                                            </div>

                                            <div class="row mb-1">
                                                <div class="col-sm-4">
                                                    <span>Sub Category Image</span>
                                                </div>
                                                <div class="col-sm-5 text-start">
                                                    <input type="file" name="image"
                                                        class="form-control form-control-sm" id="image1"
                                                        accept="image/*" required />
                                                </div>
                                                <div class="col-sm-3 text-end">
                                                    <img class="rounded-circle" id="showImage1" height="40px"
                                                        width="40px"
                                                        src="https://cdn.pixabay.com/photo/2017/02/07/02/16/cloud-2044823_960_720.png"
                                                        alt="">

                                                </div>
                                            </div>

                                            <div class="row mb-1">
                                                <div class="col-sm-4">
                                                    <span>Sub Category Banner Image</span>
                                                </div>
                                                <div class="col-sm-5 text-secondary">
                                                    <input type="file" name="banner_image"
                                                        class="form-control form-control-sm" id="banner_image"
                                                        accept="image/*" required />
                                                </div>
                                                <div class="col-sm-3 text-end">
                                                    <img id="showImage2" height="40px" width="40px"
                                                        src="https://cdn.pixabay.com/photo/2017/02/07/02/16/cloud-2044823_960_720.png"
                                                        alt="">

                                                </div>
                                            </div>

                                            <div class="row mb-1">
                                                <div class="col-sm-4">
                                                    <span>Sub Category Status</span>
                                                </div>
                                                <div class=" col-sm-8 text-secondary">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="status"
                                                            value="active" id="flexRadioDefault1">
                                                        <label class="form-check-label" for="flexRadioDefault1">
                                                            Active
                                                        </label>
                                                    </div>
                                                    <div class="form-check mt-2">
                                                        <input class="form-check-input" type="radio" name="status"
                                                            value="inactive" id="flexRadioDefault2" checked>
                                                        <label class="form-check-label" for="flexRadioDefault2">
                                                            Inactive
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="row">
                                                <div class="col-sm-12 text-secondary d-flex justify-content-end">
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
                    </div>

                </div>
            </div>

            <div class="tab-content">
                <div class="tab-pane fade show" id="js-tab3">
                    <div class="row w-50 mx-auto">
                        <div class="col-lg-12">
                            <div id="table3" class="card cardTd">
                                <div class="card-header p-0" style="background-color: #247297;">
                                    <div class="row d-flex justify-content-between align-items-center py-1 px-2">
                                        <div class="col-lg-6 col-sm-6">
                                            <a href="{{ route('category.index') }}" class="btn bg-light rounded-circle"
                                                style="width: 30px; height: 30px;"><i class="ph ph-arrow-left"></i></a>
                                        </div>
                                        <div class="col-lg-6 col-sm-6 text-end">
                                            <span class=" text-white">Add Sub Sub Category</span>
                                        </div>
                                    </div>
                                </div>

                                <div class="card-body">
                                    <form method="post" action="{{ route('store.subsubcategory') }}"
                                        enctype="multipart/form-data">
                                        @csrf

                                        <div class="row mb-1">
                                            <div class="col-sm-4">
                                                <span>Category Name</span>
                                            </div>
                                            <div class=" col-sm-8 text-secondary">
                                                <select name="cat_id" class="form-control form-control-sm select"
                                                    data-width="100%" data-minimum-results-for-search="Infinity">
                                                    <option value=""> -- Select Category -- </option>
                                                    @foreach ($cats as $cat)
                                                        <option value="{{ $cat->id }}">{{ $cat->title }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>

                                        <div class="row mb-1">
                                            <div class="col-sm-4">
                                                <span>Category Name</span>
                                            </div>
                                            <div class=" col-sm-8 text-secondary">
                                                <select name="sub_cat_id" class="form-control form-control-sm select"
                                                    data-width="100%" data-minimum-results-for-search="Infinity">
                                                    <option value=""> -- Select Sub Category -- </option>
                                                    @foreach ($sub_cats as $sub_cat)
                                                        <option value="{{ $sub_cat->id }}">{{ $sub_cat->title }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>

                                        <div class="row mb-1">
                                            <div class="col-sm-4">
                                                <span>Category Name</span>

                                            </div>
                                            <div class=" col-sm-8 text-secondary">
                                                <input type="text" name="title"
                                                    class="form-control form-control-sm maxlength" maxlength="100" />
                                            </div>
                                        </div>
                                        <div class="row mb-1">
                                            <div class="col-sm-4">
                                                <span>Category Image</span>
                                            </div>
                                            <div class="col-sm-5 text-secondary">
                                                <input type="file" name="image" class="form-control form-control-sm"
                                                    id="image2" accept="image/*" required />
                                            </div>
                                            <div class="col-sm-3 text-end">
                                                <img id="showImage2" height="40px" width="40px"
                                                    src="https://cdn.pixabay.com/photo/2017/02/07/02/16/cloud-2044823_960_720.png"
                                                    alt="">
                                            </div>
                                        </div>

                                        <div class="row mb-1">
                                            <div class="col-sm-4">
                                                <span>Category Banner Image</span>
                                            </div>
                                            <div class="col-sm-5 text-secondary">
                                                <input type="file" name="banner_image"
                                                    class="form-control form-control-sm" id="banner_image"
                                                    accept="image/*" required />
                                            </div>
                                            <div class="col-sm-3 text-end">
                                                <img id="banner_image" height="40px" width="40px"
                                                    src="https://cdn.pixabay.com/photo/2017/02/07/02/16/cloud-2044823_960_720.png"
                                                    alt="">
                                            </div>

                                            <div class="row mb-1">
                                                <div class="col-sm-4">
                                                    <span>Category Status</span>
                                                </div>
                                                <div class=" col-sm-8 text-secondary">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="status"
                                                            value="active" id="flexRadioDefault1">
                                                        <label class="form-check-label" for="flexRadioDefault1">
                                                            Active
                                                        </label>
                                                    </div>
                                                    <div class="form-check mt-2">
                                                        <input class="form-check-input" type="radio" name="status"
                                                            value="inactive" id="flexRadioDefault2" checked>
                                                        <label class="form-check-label" for="flexRadioDefault2">
                                                            Inactive
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="row pe-0">
                                                <div class="col-sm-12 text-secondary d-flex justify-content-end p-0">
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

                </div>
            </div>

            <div class="tab-content">
                <div class="tab-pane fade show" id="js-tab4">
                    <div class="row w-50 mx-auto">
                        <div class="col-lg-12">
                            <div id="table4" class="card cardTd">
                                <div class="card-header p-0" style="background-color: #247297;">
                                    <div class="row d-flex justify-content-between align-items-center py-1 px-2">
                                        <div class="col-lg-6 col-sm-6">
                                            <button class="btn bg-light rounded-circle"
                                                style="width: 30px; height: 30px;"><i
                                                    class="ph ph-arrow-left"></i></button>
                                        </div>
                                        <div class="col-lg-6 col-sm-6 text-end">
                                            <span class=" text-white">Add Sub Sub Sub Category Form </span>
                                        </div>
                                    </div>
                                </div>

                                <div class="card-body">
                                    <form method="post" action="{{ route('store.subsubsubcategory') }}"
                                        enctype="multipart/form-data">
                                        @csrf
                                        <div class="row mb-1">
                                            <div class="col-sm-4">
                                                <span>Category Name</span>
                                            </div>
                                            <div class=" col-sm-8 text-secondary">
                                                <select name="cat_id" class="form-control form-control-sm select"
                                                    data-width="100%" data-minimum-results-for-search="Infinity">
                                                    <option value=""> -- Select Category -- </option>
                                                    @foreach ($cats as $cat)
                                                        <option value="{{ $cat->id }}">{{ $cat->title }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>

                                        <div class="row mb-1">
                                            <div class="col-sm-4">
                                                <span>Sub Category Name</span>
                                            </div>
                                            <div class=" col-sm-8 text-secondary">
                                                <select name="sub_cat_id" class="form-control form-control-sm select"
                                                    data-width="100%" data-minimum-results-for-search="Infinity">
                                                    <option value=""> -- Select Sub Category -- </option>
                                                    @foreach ($sub_cats as $sub_cat)
                                                        <option value="{{ $sub_cat->id }}">{{ $sub_cat->title }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>

                                        <div class="row mb-1">
                                            <div class="col-sm-4">
                                                <span>Sub Sub Category Name</span>
                                            </div>
                                            <div class=" col-sm-8 text-secondary">
                                                <select name="sub_sub_cat_id" class="form-control form-control-sm select"
                                                    data-width="100%" data-minimum-results-for-search="Infinity">
                                                    <option value=""> -- Select Sub Sub Category -- </option>
                                                    @foreach ($sub_sub_cats as $sub_sub_cat)
                                                        <option value="{{ $sub_sub_cat->id }}">{{ $sub_sub_cat->title }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>

                                        <div class="row mb-1">
                                            <div class="col-sm-4">
                                                <span>Sub Sub Sub Category Name</span>
                                            </div>
                                            <div class=" col-sm-8 text-secondary">
                                                <input type="text" name="title"
                                                    class="form-control form-control-sm maxlength" maxlength="100" />
                                            </div>
                                        </div>

                                        <div class="row mb-1">
                                            <div class="col-sm-4">
                                                <span>Sub Sub Sub Category Image</span>
                                            </div>
                                            <div class="col-sm-5 text-start">
                                                <input type="file" name="image" class="form-control form-control-sm"
                                                    id="image3" accept="image/*" required />
                                            </div>
                                            <div class="col-sm-3 text-end">
                                                <img id="showImage3" height="40" width="40"
                                                    src="https://cdn.pixabay.com/photo/2017/02/07/02/16/cloud-2044823_960_720.png"
                                                    alt="">
                                            </div>
                                        </div>

                                        <div class="row mb-1">
                                            <div class="col-sm-4">
                                                <span>Sub Sub Sub Category Banner Image</span>
                                            </div>
                                            <div class="col-sm-8 text-secondary">
                                                <input type="file" name="banner_image"
                                                    class="form-control form-control-sm" id="banner_image"
                                                    accept="image/*" required />
                                            </div>
                                        </div>

                                        <div class="row mb-1">
                                            <div class="col-sm-4">
                                                <span>Category Status</span>
                                            </div>
                                            <div class=" col-sm-8 text-secondary">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="status"
                                                        value="active" id="flexRadioDefault1">
                                                    <label class="form-check-label" for="flexRadioDefault1">
                                                        Active
                                                    </label>
                                                </div>
                                                <div class="form-check mt-2">
                                                    <input class="form-check-input" type="radio" name="status"
                                                        value="inactive" id="flexRadioDefault2" checked>
                                                    <label class="form-check-label" for="flexRadioDefault2">
                                                        Inactive
                                                    </label>
                                                </div>
                                            </div>
                                        </div>


                                        <div class="row">
                                            <div class="col-sm-12 text-secondary d-flex justify-content-end">
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
                </div>
            </div>


        </div>
        <!-- /content area -->
        <!-- /inner content -->

    </div>
@endsection

@once
    @push('scripts')
        <script type="text/javascript">
            function dropdownCategory() {
                var selectedTable = document.getElementById("dropdownCategory").value;
                var elements = document.getElementsByClassName('cardT')
                for (var i = 0; i < elements.length; i++) {
                    if (elements[i].id == selectedTable)
                        elements[i].style.display = '';
                    else
                        elements[i].style.display = 'none';
                }
            }
        </script>
    @endpush
@endonce
