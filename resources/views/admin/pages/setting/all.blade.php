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
                        <span class="breadcrumb-item active">Website Settings Management</span>
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

        <form action="{{ route('setting.store') }}" method="post">
            @csrf
            <div class="content">
                <div class="container  w-75 mx-auto mb-1">
                    <h3 class="text-center" style="color: #247297;"> All Settings</h3>
                    <div class="row gx-1">

                        <div class="col-lg-6 col-sm-6">
                            <div class="bg-white rounded py-2 px-2">
                                <div class="section_title mb-2">
                                    <span style="color: #247297; border-bottom: 1px solid #247297;"> Website Name</span>
                                </div>
                                {{--  --}}
                                <div class="row mb-1">
                                    <div class="col-sm-4 d-flex align-items-center">
                                        <span>Name First Line</span>
                                    </div>
                                    <div class="col-sm-8">
                                        <input type="text" id="inputEstimatedBudget" class="form-control form-control-sm"
                                            value="{{ $setting->name }}">
                                    </div>
                                </div>
                                {{--  --}}
                                <div class="row mb-2">
                                    <div class="col-sm-4 d-flex align-items-center">
                                        <span>Tag Line</span>
                                    </div>
                                    <div class="col-sm-8">
                                        <input type="text" id="inputEstimatedBudget" class="form-control form-control-sm"
                                            value="{{ $setting->short_name }}">
                                    </div>
                                </div>
                                {{--  --}}

                            </div>
                        </div>
                        {{-- Second Column --}}
                        <div class="col-lg-6 col-sm-6">
                            <div class="bg-white rounded py-2 px-2">
                                <div class="section_title mb-2">
                                    <span style="color: #247297; border-bottom: 1px solid #247297;">Social Links</span>
                                </div>
                                {{--  --}}
                                <div class="row mb-1">
                                    <div class="col-sm-2 d-flex align-items-center">
                                        <span>Facebook</span>
                                    </div>
                                    <div class="col-sm-10">
                                        <input type="text" id="inputEstimatedBudget"
                                            class="form-control form-control-sm" value="{{ $setting->facebook }}">
                                    </div>
                                </div>
                                {{--  --}}
                                <div class="row mb-2">
                                    <div class="col-sm-6">
                                        <div class="d-flex">
                                            <div class="col-sm-4 d-flex align-items-center me-1">
                                                <span>Twitter</span>
                                            </div>
                                            <div class="col-sm-8">
                                                <input type="text" id="inputEstimatedBudget"
                                                    class="form-control form-control-sm" value="{{ $setting->twitter }}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="d-flex">
                                            <div class="col-sm-4 d-flex align-items-center">
                                                <span>Linked In</span>
                                            </div>
                                            <div class="col-sm-8">
                                                <input type="text" id="inputEstimatedBudget"
                                                    class="form-control form-control-sm" value="{{ $setting->linked_in }}">
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                {{--  --}}

                            </div>
                        </div>
                    </div>

                </div>
                {{-- Second Container --}}
                <div class="container  w-75 mx-auto mb-1">
                    <div class="row gx-1">

                        <div class="col-lg-6 col-sm-6">
                            <div class="bg-white rounded py-2 px-2">
                                <div class="section_title mb-2">
                                    <span style="color: #247297; border-bottom: 1px solid #247297;"> Website Logo</span>
                                </div>
                                {{--  --}}
                                <div class="row mb-1 d-flex align-items-center">
                                    <div class="col-sm-4 ">
                                        <span>Website Logo</span>
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="file" name="logo" class="form-control form-control-sm"
                                            id="image" />
                                        @error('logo')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="col-sm-2">
                                        <img class="rounded-circle" id="showImage"
                                            src="{{ !empty($setting->logo) ? url('upload/logoimage/' . $setting->logo) : url('upload/no_image.jpg') }}"
                                            alt="Ngen IT" style="width:50px; height: 50px;">
                                    </div>
                                </div>
                                {{--  --}}

                            </div>
                        </div>
                        {{-- Second Column --}}
                        <div class="col-lg-6 col-sm-6">
                            <div class="bg-white rounded py-2 px-2">
                                <div class="section_title mb-2">
                                    <span style="color: #247297; border-bottom: 1px solid #247297;"> Website Fav
                                        Icon</span>
                                </div>
                                {{--  --}}
                                <div class="row mb-1 d-flex align-items-center">
                                    <div class="col-sm-4 ">
                                        <span>Website Logo</span>
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="file" name="favicon" class="form-control form-control-sm"
                                            id="image1" />
                                        @error('favicon')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="col-sm-2">
                                        <img class="rounded-circle" id="showImage1"
                                            src="{{ !empty($setting->favicon) ? url('upload/faviconimage/' . $setting->favicon) : url('upload/no_image.jpg') }}"
                                            alt="Ngen It" style="width:50px; height: 50px;">
                                    </div>
                                </div>
                                {{--  --}}

                            </div>
                        </div>
                    </div>
                </div>
                {{-- Third Container --}}
                <div class="container  w-75 mx-auto mb-1">
                    <div class="row gx-1">

                        <div class="col-lg-6 col-sm-6">
                            <div class="bg-white rounded py-2 px-2">
                                <div class="section_title mb-2">
                                    <span style="color: #247297; border-bottom: 1px solid #247297;"> Website
                                        Address</span>
                                </div>
                                {{--  --}}
                                <div class="row mb-1 d-flex align-items-center">
                                    <div class="col-sm-4 ">
                                        <span>Address</span>
                                    </div>
                                    <div class="col-sm-8">
                                        <textarea class="form-control" rows="2" placeholder="Enter ...">{{ $setting->address }}</textarea>
                                    </div>
                                </div>
                                {{--  --}}
                                <div class="row mb-1 d-flex align-items-center">
                                    <div class="col-sm-4 ">
                                        <span>Email One</span>
                                    </div>
                                    <div class="col-sm-8">
                                        <input type="text" id="inputEstimatedBudget"
                                            class="form-control form-control-sm" value="{{ $setting->email1 }}">
                                    </div>
                                </div>
                                {{--  --}}
                                <div class="row mb-1 d-flex align-items-center">
                                    <div class="col-sm-4 ">
                                        <span>Email Two</span>
                                    </div>
                                    <div class="col-sm-8">
                                        <input type="text" id="inputEstimatedBudget"
                                            class="form-control form-control-sm" value="{{ $setting->email2 }}">
                                    </div>
                                </div>
                                {{--  --}}

                            </div>
                        </div>
                        {{-- Second Column --}}
                        <div class="col-lg-6 col-sm-6">
                            <div class="bg-white rounded py-2 px-2">
                                <div class="section_title mb-2">
                                    <span style="color: #247297; border-bottom: 1px solid #247297;"> Website
                                        Contact</span>
                                </div>
                                {{--  --}}
                                <div class="row mb-1 d-flex align-items-center">
                                    <div class="col-sm-4 ">
                                        <span>Mobile No:</span>
                                    </div>
                                    <div class="col-sm-8">
                                        <input type="text" id="inputEstimatedBudget"
                                            class="form-control form-control-sm" value="{{ $setting->mobile }}">
                                    </div>
                                </div>
                                {{--  --}}
                                <div class="row mb-1 d-flex align-items-center">
                                    <div class="col-sm-4 ">
                                        <span>Phone No:</span>
                                    </div>
                                    <div class="col-sm-8">
                                        <input type="text" id="inputEstimatedBudget"
                                            class="form-control form-control-sm" value="{{ $setting->phone }}">
                                    </div>
                                </div>
                                {{--  --}}
                                <div class="row d-flex align-items-center mb-4">
                                    <div class="col-sm-4 ">
                                        <span>Contact Hour</span>
                                    </div>
                                    <div class="col-sm-8">
                                        <input type="text" id="inputEstimatedBudget"
                                            class="form-control form-control-sm" value="{{ $setting->hour }}">
                                    </div>
                                </div>
                                {{--  --}}
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Third Container --}}
                <div class="container  w-75 mx-auto mb-3">
                    <div class="row gx-1">

                        <div class="col-lg-6 col-sm-6">
                            <table id="example1" class="table table-bordered table-striped">

                                <thead>
                                    <tr>
                                        <th class="text-center" style="width: 70%">Settings</th>
                                        <th class="text-center">Click this Button</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <tr>
                                        <td>Link Storage</td>
                                        <td
                                            style="display: flex;
                                        justify-content: center;
                                        align-items: center;">
                                            <a href="{{ url('/admin/link') }}"
                                                class="btn d-flex justify-content-center align-content-center"
                                                style="height:30px; width:30px;border-radius:50%" title="click"><i
                                                    class="ph-link text-primary"></i></a></td>
                                    </tr>
                                    <tr>
                                        <td> Route Clear</td>
                                        <td
                                            style="display: flex;
                                        justify-content: center;
                                        align-items: center;">
                                            <a href="{{ url('/admin/clear-route') }}"
                                                class="btn d-flex justify-content-center align-content-center"
                                                style="height:30px; width:30px;border-radius:50%" title="click"><i
                                                    class="icon-database-refresh text-primary"></i></a></td>
                                    </tr>
                                    <tr>
                                        <td>Route Cache</td>
                                        <td
                                            style="display: flex;
                                        justify-content: center;
                                        align-items: center;">
                                            <a href="{{ url('/admin/route-cache') }}"
                                                class="btn d-flex justify-content-center align-content-center"
                                                style="height:30px; width:30px;border-radius:50%" title="click"><i
                                                    class="icon-database-refresh text-primary"></i></a></td>
                                    </tr>
                                    <tr>
                                        <td>Config Clear</td>
                                        <td
                                            style="display: flex;
                                        justify-content: center;
                                        align-items: center;">
                                            <a href="{{ url('/admin/clear-config') }}"
                                                class="btn d-flex justify-content-center align-content-center"
                                                style="height:30px; width:30px;border-radius:50%" title="click"><i
                                                    class="icon-database-refresh text-primary"></i></a></td>
                                    </tr>

                                </tbody>

                            </table>
                        </div>
                        {{-- Second Column --}}
                        <div class="col-lg-6 col-sm-6">
                            <table id="example1" class="table table-bordered table-striped">

                                <thead>
                                    <tr>
                                        <th class="text-center" style="width: 70%">Settings</th>
                                        <th class="text-center" style="width: 30%">Click this Button</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <tr>
                                        <td> CACHE Clear</td>
                                        <td
                                            style="display: flex;
                                        justify-content: center;
                                        align-items: center;">
                                            <a href="{{ url('/admin/clear-cache') }}" class="btn"
                                                style="height:30px; width:30px;border-radius:50%" title="click"><i
                                                    class="icon-database-refresh text-primary"></i></a></td>
                                    </tr>
                                    <tr>

                                        <td>Optimize</td>
                                        <td
                                            style="display: flex;
                                        justify-content: center;
                                        align-items: center;">
                                            <a href="{{ url('/admin/optimize') }}" class="btn"
                                                style="height:30px; width:30px;border-radius:50%" title="click"><i
                                                    class="icon-database-refresh text-primary"></i></a></td>
                                    </tr>
                                    <tr>

                                        <td>View Clear</td>
                                        <td
                                            style="display: flex;
                                        justify-content: center;
                                        align-items: center;">
                                            <a href="{{ url('/admin/clear-view') }}" class="btn"
                                                style="height:30px; width:30px;border-radius:50%" title="click"><i
                                                    class="icon-database-refresh text-primary"></i></a></td>
                                    </tr>
                                    <tr>
                                        <td>Migration</td>
                                        <td
                                            style="display: flex;
                                        justify-content: center;
                                        align-items: center;">
                                            <a href="{{ url('/admin/migrate') }}" class="btn"
                                                style="height:30px; width:30px;border-radius:50%" title="click"><i
                                                    class="icon-database-refresh text-primary"></i></a></td>
                                    </tr>

                                </tbody>

                            </table>
                        </div>
                    </div>
                </div>

            </div>
            <div class="container w-75 mx-auto mb-3">
                <div class="row">
                    <div class="col d-flex align-items-center justify-content-center">
                        <button type="submit" class="submit_btn from-prevent-multiple-submits"
                            style="padding: 5px;">Save
                            Changes</button>
                    </div>
                </div>
            </div>
            <!-- /content area -->
        </form>


        @include('admin.partials.modals')

        <!-- /inner content -->

    </div>
@endsection

@push('script')
@endpush
