<!--=====// Pageform section //=====-->
@php
    $setting = App\Models\Admin\Setting::first();
@endphp
<section class=" solution_contact_wrapper">
    <div class="container" id="Contact">
      <div class="row d-flex justify-content-center align-items-center">
        <div class="col-lg-5 col-sm-12">
          <div class="thing_together_wrapper">
            <h4>
              <span class="why_Choose_lineTop">L</span>et’s do big things together.
            </h4>
            <p>Get assistance with tracking an order, requesting a quote, contacting your account representative and more by phone or over chat.</p>
            <h5>NGentIt Global Headquarters</h5>
            <p>{{$setting->address}}</p>
            <p>Billing & invoice: <span class="font-number">+88 01714243446</span>
              <br> Information and sales: <span class="">{{$setting->email1}}</span>
              <br> OneCall support: <span class="font-number">+88 01714243446</span>
              <br> Returns: <span class="font-number">(+88) 0258155838</span>
            </p>
            <!-- <h5><i class="fa-solid fa-phone"></i>NgenIT</h5> -->
          </div>
        </div>
        <!----------Sidebar Privacy Policy --------->
        <div class="col-lg-7 col-sm-12">
          <!-- form Sidebar -->
          <div class="background">
            <div class="containers">
              <div class="screen">
                <div class="screen-header">
                  <div class="screen-header-left">
                    <div class="screen-header-button maximize"></div>
                    <div class="screen-header-button minimize"></div>
                  </div>
                  <div class="screen-header-right">
                    <div class="screen-header-ellipsis"></div>
                    <div class="screen-header-ellipsis"></div>
                    <div class="screen-header-ellipsis"></div>
                  </div>
                </div>
                <div class="screen-body">
                    <div class="screen-body-item left">
                        <div class="app-title">
                        <span>CONTACT</span>
                        <span>US</span>
                        </div>
                    </div>
                    <form id="myform" action="{{ route('contact.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="screen-body-item screen-body-item-right">
                            <div class="app-form">

                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="app-form-group">
                                        <input class="app-form-control" name="fname" placeholder="First Name">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="app-form-group">
                                        <input class="app-form-control" name="lname" placeholder="Last Name">
                                    </div>
                                </div>
                            </div>

                            <div class="app-form-group">
                                <input class="app-form-control" name="email" placeholder="EMAIL">
                            </div>
                            <div class="app-form-group">
                                <input class="app-form-control" name="phone" placeholder="CONTACT NO">
                            </div>
                            <div class="app-form-group message">
                                <textarea class="app-form-control" name="message" placeholder="MESSAGE"></textarea>
                            </div>
                            <div class="app-form-group buttons">
                                {{-- <button class="app-form-button">CANCEL</button> --}}
                                <button class="app-form-button" type="submit">SEND</button>
                            </div>
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
</section>
  <!---------End -------->
