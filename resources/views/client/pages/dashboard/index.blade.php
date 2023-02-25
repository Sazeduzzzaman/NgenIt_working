@extends('client.master')
@section('content')


            <!-- Content area -->
            <div class="content-wrapper">
                @if (Auth::guard('client')->user()->status == 'inactive')
                <div class="row mt-4">
                    <div class="col-lg-3"></div>
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-header">
                                <h2 class="text-center">Welcome to my <span class="top-line">N</span>Gen I<span class="top-line">T</span></h2>
                            </div>
                            <div class="card-body">
                                <div class="alert text-center text-danger">
                                    <p><strong>Thank You for opening an account in Ngen It <br>
                                        Please wait for the Approval. <br>
                                        Your Patience will be highly appreciated.</strong></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3"></div>
                </div>
                @else
                    <div class="content">

                        <div class="row">
                            <div class="col-sm-6 col-xl-3">
                                <div class="card card-body p-3" style="height: 7rem;">
                                    <div class="d-flex align-items-center">
                                        <i class="ph-shopping-cart ph-2x text-warning me-3"></i>

                                        <div class="flex-fill text-end">
                                            <h4 class="mb-0">
                                                {{App\Models\Frontend\Order::where('client_id' , Auth::guard('client')->user()->id)->count();}}
                                            </h4>
                                            <span class="text-black">Total Orders</span>
                                            <div class="row mt-2">
                                                <div class="col-lg-6">
                                                    <a class="text-success" href="{{route('client.orders')}}">
                                                        Paid : {{App\Models\Frontend\Order::where('client_id' , Auth::guard('client')->user()->id)->where('status','paid')->count();}}
                                                    </a>
                                                </div>
                                                <div class="col-lg-6">
                                                    <a class="text-danger" href="{{route('client.orders')}}">
                                                        Unpaid : {{App\Models\Frontend\Order::where('client_id' , Auth::guard('client')->user()->id)->where('status','unpaid')->count();}}
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-6 col-xl-3">
                                <div class="card card-body p-3" style="height: 7rem;">
                                    <div class="d-flex align-items-center">
                                        <i class="ph-circle-wavy-question ph-2x text-indigo me-3"></i>

                                        <div class="flex-fill text-end">
                                            <h4 class="mb-0">{{App\Models\Admin\Rfq::where('client_id' , Auth::guard('client')->user()->id)->count();}}</h4>
                                            <span class="text-black">Total RFQs</span>
                                            <div class="row mt-2">
                                                <div class="col-lg-6">
                                                    <a href="{{ route('rfq.product.index') }}">
                                                        Quoted : {{App\Models\Frontend\Order::where('client_id' , Auth::guard('client')->user()->id)->where('status','quoted')->count();}}
                                                    </a>
                                                </div>
                                                <div class="col-lg-6">
                                                    <a href="{{ route('rfq.product.index') }}">
                                                        Ordered : {{App\Models\Frontend\Order::where('client_id' , Auth::guard('client')->user()->id)->where('status','sale')->count();}}
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            
                        </div>
                    </div>
                @endif
            </div>

            <!-- /content area -->






@endsection
