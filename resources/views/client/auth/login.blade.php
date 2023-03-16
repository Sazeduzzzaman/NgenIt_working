@extends('frontend.master')
@section('content')
     <!--=======// Login //=======-->
     <div class="section">
        <div class="container">
            <div class="row full-height justify-content-center">
                <div class="col-12 text-center align-self-center py-5">
                    <div class="section pb-5 pt-5 pt-sm-2 text-center">
                        <h2 class="mb-0 pb-3" style="color: #ae0a46;"><span>Log In </span> / <span>Sign Up</span></h2>
                        <input class="checkbox" type="checkbox" id="reg-log" name="reg-log" />
                        <label for="reg-log"></label>
                        <div class="card-3d-wrap mx-auto">
                            <div class="card-3d-wrapper">
                                <div class="card-front">
                                    <div class="center-wrap">
                                        <form id="myform" action="{{ route('client.loginstore') }}" method="POST" class="login">
                                            @csrf
                                            <div class="section text-center">
                                                <h4 class="mb-4 pb-3 text-white">Log In</h4>
                                                <div class="form-group">
                                                    <input type="email" name="email" class="form-style"
                                                        placeholder="Your Email" id="logemail" autocomplete="off" required>
                                                    <i class="input-icon uil uil-at"></i>
                                                </div>
                                                <div class="form-group mt-2">
                                                    <input type="password" name="password" class="form-style"
                                                        placeholder="Your Password" id="logpass" autocomplete="off"
                                                        required>
                                                    <i class="input-icon uil uil-lock-alt"></i>
                                                </div>
                                                <div class="">
                                                    <button type="submit" class="btn shadow-lg mt-4" style="
                                                        width: 85px !important;
                                                        background: white !important;
                                                        color: #ae0a46 !important;
                                                        padding: 10px 0px 10px !important;
                                                ">Login</button>
                                                </div>
                                                <p class="mb-0 mt-4 text-center"><a href="" class="link text-white">Forgot
                                                        your password?</a></p>

                                                <div class="signup-link">Not a member? <a href="" class="text-white">Create
                                                        new account</a></div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <div class="card-back">
                                    <div class="center-wrap">
                                        <form action="{{ route('clientRegister.store') }}" method="POST" class="signup">
                                            @csrf
                                            <div class="section text-center">
                                                <h4 class="text-white mt-2">Sign Up</h4>
                                                <div class="form-group">
                                                    <input type="text" name="name" class="form-style"
                                                        placeholder="Your Full Name" id="logname" autocomplete="off"
                                                        required>
                                                    <i class="input-icon uil uil-user"></i>
                                                </div>
                                                <div class="form-group mt-2">
                                                    <input type="email" name="email" class="form-style"
                                                        placeholder="Your Email" id="logemail" autocomplete="off" required>
                                                    <i class="input-icon uil uil-at"></i>
                                                </div>
                                                <div class="form-group mt-2">
                                                    <input type="text" name="phone" class="form-style"
                                                        placeholder="Your Phone" id="logemail" autocomplete="off" required>
                                                    <i class="input-icon uil uil-at"></i>
                                                </div>
                                                <div class="form-group mt-2">
                                                    <input type="password" name="password" class="form-style"
                                                        placeholder="Your Password" id="logpass" autocomplete="off"
                                                        required>
                                                    <i class="input-icon uil uil-lock-alt"></i>
                                                </div>
                                                <div class="form-group mt-2">
                                                    <input type="password" name="password_confirmation" class="form-style"
                                                        placeholder="Confirm Password" id="logpass" autocomplete="off"
                                                        required>
                                                    <i class="input-icon uil uil-lock-alt"></i>
                                                </div>
                                                <button type="submit" class="btn shadow-lg mt-4" style="
                                                        width: 85px !important;
                                                        background: white !important;
                                                        color: #ae0a46 !important;
                                                        padding: 10px 0px 10px !important;
                                                ">Sign Up</button>
                                                <div class="pb-3 pt-2">
                                                    <span class="text-center text-black">You've read our <a href="#"
                                                            class="text-white">Terms &amp; Conditions</a> and <a href="#"
                                                            class="text-white">Cookie Policy</a></span>
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
        </div>
    </div>
    <!-------End-------->
@endsection
