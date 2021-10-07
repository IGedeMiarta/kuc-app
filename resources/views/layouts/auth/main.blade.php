@extends('layouts.auth.logintemp')
@section('content')
    <div class="wrapper">
        <div class="section-authentication-login d-flex align-items-center justify-content-center">
            <div class="row">
                <div class="col-12 col-lg-10 mx-auto">
                    <div class="card radius-15">
                        <div class="row no-gutters">
                            <div class="col-lg-6">
                                <form action="" method="post">
                                    <div class="card-body p-md-5">
                                        @csrf
                                        <div class="text-center">
                                            <img src="/images/logo-icon.png" width="80" alt="">
                                            <h3 class="mt-4 font-weight-bold">Welcome Back</h3>
                                        </div>
                                        <div class="form-group mt-4">
                                            <label>Username</label>
                                            <input type="text" class="form-control" name="username" id="username"
                                                placeholder="Enter your username" />
                                        </div>
                                        <div class="form-group">
                                            <label>Password</label>
                                            <input type="password" class="form-control" name="password" id="password"
                                                placeholder="Enter your password" />
                                        </div>

                                        <div class="btn-group mt-3 w-100">
                                            <button type="submit" class="btn btn-primary btn-block">Log In</button>
                                            <button type="button" class="btn btn-primary"><i
                                                    class="lni lni-arrow-right"></i>
                                            </button>
                                        </div>
                                        <hr>
                                    </div>
                                </form>
                            </div>
                            <div class="col-lg-6">
                                <img src="/images/login-images/login-frent-img.jpg" class="card-img login-img h-100"
                                    alt="...">
                            </div>
                        </div>
                        <!--end row-->
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
