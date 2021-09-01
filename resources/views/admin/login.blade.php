@extends('layouts.admin.blank')
@section('content')
<div class="main-content">
    <div class="content-wrapper">
        <!--Login Page Starts-->
        <section id="login">
            <div class="container-fluid">
                <div class="row full-height-vh m-0">
                    <div class="col-12 d-flex align-items-center justify-content-center">
                        <div class="card">
                            <div class="card-content">
                                <div class="card-body login-img">
                                    <div class="row m-0">

                                        <div class="col-lg-6 d-lg-block d-none py-2 text-center align-middle">

                                            <img src="{{ getasset('/app-assets/img/logo.png')}}" class="img-fluid mt-5" width="400" height="230" />
                                        </div>
                                        <div class="col-lg-6 col-md-12 bg-white px-4 pt-3">
                                            <h4 class="mb-2 card-title">Login</h4>
                                            <p class="card-text mb-3">
                                                Welcome back, please login to your account.
                                            </p>
                                            <form action="{{ route('admin.dologin') }}" method="POST" class="form-validate" novalidate="novalidate">

                                                @csrf
                                                <input type="email" class="form-control mb-3" name="email" id="email" placeholder="Email" required>
                                                @if ($errors->has('email'))
                                                <span class="invalid-feedback">
                                                    <strong>{{ $errors->first('email') }}</strong>
                                                </span>
                                                @endif
                                                <input type="password" class="form-control mb-1" name="password" id="password" placeholder="Password" required>
                                                @if ($errors->has('password'))
                                                <span class="invalid-feedback">
                                                    <strong>{{ $errors->first('password') }}</strong>
                                                </span>
                                                @endif


                                                <div class="d-flex justify-content-between mt-2">
                                                    <div class="remember-me">
                                                        <div class="custom-control custom-checkbox custom-control-inline mb-3">
                                                            <input type="checkbox" class="custom-control-input" checked id="rememberme">
                                                            <label class="custom-control-label" for="rememberme">
                                                                Remember Me
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <!-- <div class="forgot-password-option">
                                                        <a href=" route('admin.password.resetpassword') }}" class="text-decoration-none text-primary">Forgot Password
                                                            ?</a>
                                                    </div> -->
                                                </div>

                                                <div class="fg-actions d-flex justify-content-between">
                                                    <div class="login-btn">
                                                        <button type="submit" class="btn btn-primary">
                                                            Login
                                                        </button>
                                                    </div>
                                                    <div class="recover-pass">

                                                        <!-- <button type="button" class="btn btn-outline-primary">
                                                            Cancel
                                                        </button> -->
                                                    </div>
                                                </div>
                                                </form>
                                                <!-- <hr class="m-0">
                                            <div class="d-flex justify-content-between mt-3">
                                                <div class="option-login">
                                                    <h6 class="text-decoration-none text-primary">Or Login With</h6>
                                                </div>
                                                <div class="social-login-options">
                                                    <a class="btn btn-social-icon mr-2 btn-facebook">
                                                        <span class="fa fa-facebook"></span>
                                                    </a>
                                                    <a class="btn btn-social-icon mr-2 btn-twitter">
                                                        <span class="fa fa-twitter"></span>
                                                    </a>
                                                </div>
                                            </div> -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>
<!--Login Page Ends-->
@endsection