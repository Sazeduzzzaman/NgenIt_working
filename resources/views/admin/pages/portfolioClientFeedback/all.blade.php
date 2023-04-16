@extends('admin.master')
@section('content')
    <div class="content-wrapper">
        <!-- Inner content -->
        <!-- Page header -->
        <div class="page-header page-header-light shadow">
            <div class="page-header-content d-lg-flex border-top">
                <div class="d-flex">
                    <div class="breadcrumb py-2">
                        <a href="{{ route('admin.dashboard') }}" class="breadcrumb-item"><i class="ph-house me-2"></i> Home</a>
                        <a href="" class="breadcrumb-item">Portfolio Client FeedBack</a>
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
        <div class="content pt-0 w-75 mx-auto">
            <!-- Highlighting rows and columns -->
            <div class="d-flex align-items-center py-2">
                {{-- Add Tax Vat Modal --}}
                <a href="" class=" text-success nav-link cat-tab3" data-bs-toggle="modal"
                    data-bs-target="#portfolioClientFeedbackAdd"
                    style="position: relative;
                    z-index: 999;
                    margin-bottom: -40px;">
                    <span class="ms-2 icon_btn" style="font-weight: 800;" data-bs-toggle="tooltip" data-bs-placement="top"
                        title="Add Expense">
                        <i class="ph-plus icons_design"></i>
                    </span>
                    <div class="d-flex justify-content-between">
                        <span class="ms-1">Add</span>
                    </div>
                    <div class="d-flex justify-content-between hide_mobile">
                        <h6 class="mb-0 text-black text-center" style="margin-left: 15rem !important;">Portfolio Client
                            Feedback</h6>
                    </div>
                </a>
            </div>
            <div>
                <table class="table portfolioClientFBDT table-bordered table-hover datatable-highlight text-center ">
                    <thead>
                        <tr>
                            <th width="5%">SL</th>
                            <th width="10%">Image</th>
                            <th width="20%">Name</th>
                            <th width="35%">Description</th>
                            <th width="10%" class="text-center">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="text-center">1</td>
                            <td>
                                <img src="https://t4.ftcdn.net/jpg/01/43/23/83/360_F_143238306_lh0ap42wgot36y44WybfQpvsJB5A1CHc.jpg"
                                    alt="" width="25" height="25">
                            </td>
                            <td>Jony Deep</td>
                            <td>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Assumenda veritatis accusamus, id
                                quaerat deleniti officia magnam quod molestias inventore reprehenderit.</td>
                            <td>
                                <a href="#" class="text-primary" data-bs-toggle="modal"
                                    data-bs-target="#portfolioClientFeedbackEdit">
                                    <i class="fa-solid fa-pen-to-square me-2 p-1 rounded-circle text-primary"></i>
                                    {{-- Edit Expense Modal --}}
                                    <div id="portfolioClientFeedbackEdit" class="modal fade" tabindex="-1">
                                        <div class="modal-dialog  modal-dialog-centered modal-sm">
                                            <div class="modal-content">
                                                <div class="modal-header  text-white" style="background-color: #247297">
                                                    <h5 class="modal-title text-white">Edit Portfolio Client Feedback
                                                    </h5>
                                                    <a type="button" data-bs-dismiss="modal"> <i class="ph ph-x text-white"
                                                            style="font-weight: 800;font-size: 10px;"></i></a>
                                                </div>
                                                <div class="modal-body p-0 px-2">
                                                    <form action="" method="post"
                                                        class="from-prevent-multiple-submits pt-2"
                                                        enctype="multipart/form-data">
                                                        @csrf
                                                        @method('PUT')
                                                        <div class="row mt-2">
                                                            <div class="col-lg-12 d-flex align-items-center pt-1">
                                                                <label
                                                                    class="col-form-label col-lg-2 p-0 text-start text-muted">Details
                                                                    Id</label>
                                                                <select name="portfolio_details_id"
                                                                    class="form-control form-select-sm select"
                                                                    data-container-css-class="select-sm"
                                                                    data-minimum-results-for-search="Infinity"
                                                                    data-placeholder="Chose Portfolio Client Feedback Details Id" required>
                                                                    <option></option>
                                                                    <option value="0056">0056</option>
                                                                    <option value="00556">00556</option>
                                                                </select>
                                                            </div>

                                                            <div class="col-lg-12 d-flex align-items-center pt-1">
                                                                <label
                                                                    class="col-form-label col-lg-2 p-0 text-start text-muted">Name</label>
                                                                <div class="input-group">
                                                                    <input name="name" type="text"
                                                                        class="form-control form-control-sm"
                                                                        placeholder="Enter Portfolio Client Feedback Name"
                                                                        required style="padding: 2px 10px 0px 10px;">
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-12 d-flex align-items-center pt-1">
                                                                <label
                                                                    class="col-form-label col-lg-2 p-0 text-start text-muted">Image</label>
                                                                <input name="image" type="file"
                                                                    class="form-control form-control-sm"
                                                                    placeholder="Enter Portfolio Client Feedback Image"
                                                                    required>
                                                            </div>
                                                            <div class="col-lg-12 d-flex align-items-center pt-1">
                                                                <label
                                                                    class="col-form-label col-lg-2 p-0 text-start text-muted">Description</label>
                                                                <input name="description" type="text"
                                                                    class="form-control form-control-sm"
                                                                    placeholder="Enter Portfolio Client Feedback Description"
                                                                    required>
                                                            </div>
                                                            <div class="col-lg-12 d-flex align-items-center pt-1">
                                                                <label
                                                                    class="col-form-label col-lg-2 p-0 text-start text-muted">Start
                                                                    Mark</label>
                                                                <input name="star_mark" type="text"
                                                                    class="form-control form-control-sm"
                                                                    placeholder="Enter Portfolio Client Feedback Start Mark"
                                                                    required>
                                                            </div>


                                                        </div>
                                                        <div class="modal-footer border-0 pt-3 pb-0 pe-0">
                                                            <button type="button" class="submit_close_btn "
                                                                data-bs-dismiss="modal">Close</button>
                                                            <button type="submit"
                                                                class="submit_btn from-prevent-multiple-submits"
                                                                style="padding: 4px 9px;">Submit</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    {{-- Edit Tax Modal End --}}
                                </a>
                                <a href="" class="text-danger delete">
                                    <i class="fa-solid fa-trash p-1 rounded-circle text-danger"></i>
                                </a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <!-- /highlighting rows and columns -->
        </div>
        <!-- /content area End-->
        {{-- add Tax Modal Content --}}
        <div id="portfolioClientFeedbackAdd" class="modal fade" tabindex="-1">
            <div class="modal-dialog modal-dialog-centered modal-sm">
                <div class="modal-content">
                    <div class="modal-header  text-white" style="background-color: #247297">
                        <h5 class="modal-title">Add Portfolio Client Feedback</h5>
                        <a type="button" data-bs-dismiss="modal"> <i class="ph ph-x text-white"
                                style="font-weight: 800;font-size: 10px;"></i></a>
                    </div>
                    <div class="modal-body p-0 px-2">
                        <form action="" method="post" class="from-prevent-multiple-submits pt-2"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="row mt-2">
                                <div class="col-lg-12 d-flex align-items-center pt-1">
                                    <label class="col-form-label col-lg-2 p-0 text-start text-muted">Details
                                        Id</label>
                                    <select name="portfolio_details_id" class="form-control form-select-sm select"
                                        data-container-css-class="select-sm" data-minimum-results-for-search="Infinity"
                                        data-placeholder="Chose Portfolio Client Feedback Details Id" required>
                                        <option></option>
                                        <option value="0056">0056</option>
                                        <option value="00556">00556</option>
                                    </select>
                                </div>

                                <div class="col-lg-12 d-flex align-items-center pt-1">
                                    <label class="col-form-label col-lg-2 p-0 text-start text-muted">Name</label>
                                    <div class="input-group">
                                        <input name="name" type="text" class="form-control form-control-sm"
                                            placeholder="Enter Portfolio Client Feedback Name" required
                                            style="padding: 2px 10px 0px 10px;">
                                    </div>
                                </div>
                                <div class="col-lg-12 d-flex align-items-center pt-1">
                                    <label class="col-form-label col-lg-2 p-0 text-start text-muted">Image</label>
                                    <input name="image" type="file" class="form-control form-control-sm"
                                        placeholder="Enter Portfolio Client Feedback Image" required>
                                </div>
                                <div class="col-lg-12 d-flex align-items-center pt-1">
                                    <label class="col-form-label col-lg-2 p-0 text-start text-muted">Description</label>
                                    <input name="description" type="text" class="form-control form-control-sm"
                                        placeholder="Enter Portfolio Client Feedback Description" required>
                                </div>
                                <div class="col-lg-12 d-flex align-items-center pt-1">
                                    <label class="col-form-label col-lg-2 p-0 text-start text-muted">Start Mark</label>
                                    <input name="star_mark" type="text" class="form-control form-control-sm"
                                        placeholder="Enter Portfolio Client Feedback Start Mark" required>
                                </div>
                            </div>
                            <div class="modal-footer border-0 pt-3 pb-0 pe-0">
                                <button type="button" class="submit_close_btn " data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="submit_btn from-prevent-multiple-submits"
                                    style="padding: 4px 9px;">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        {{-- Add Expense Modal End --}}
    </div>
@endsection

@once
    @push('scripts')
        <script type="text/javascript">
            $('.portfolioClientFBDT').DataTable({
                dom: '<"datatable-header"fl><"datatable-scroll"t><"datatable-footer"ip>',
                "iDisplayLength": 10,
                "lengthMenu": [10, 25, 30, 50],
                columnDefs: [{
                    orderable: false,
                    targets: [1, 4],
                }, ],
            });
        </script>
    @endpush
@endonce
