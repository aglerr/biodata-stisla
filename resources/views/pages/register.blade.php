@extends('master')

@section('title', "BiodataKu - Registrasi")

@section('content')
    <section class="section">
        <div class="d-flex flex-wrap align-items-stretch">
            <div class="col-lg-4 col-md-6 col-12 order-lg-1 min-vh-100 order-2 bg-white">
                <div class="p-4 m-3">
                    <img src="../assets/img/stisla-fill.svg" alt="logo" width="80"
                        class="shadow-light rounded-circle mb-5 mt-2">
                    <h4 class="text-dark font-weight-normal">Welcome to <span class="font-weight-bold">BiodataKu</span></h4>
                    <p class="text-muted">Please register to continue using BiodataKu</p>

                    <form method="POST" action="/register-success">
                        @csrf

                        <div class="form-group">
                            <label for="name">Full Name</label>
                            <input id="name" type="text" class="form-control" name="name" tabindex="1" required
                                autofocus>
                            <div class="invalid-feedback">
                                Please fill in your full name
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="email">Email</label>
                            <input id="email" type="email" class="form-control" name="email" tabindex="2" required
                                autofocus>
                            <div class="invalid-feedback">
                                Please fill in your email
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="d-block">
                                <label for="password" class="control-label">Password</label>
                            </div>
                            <input id="password" type="password" class="form-control" name="password" tabindex="3"
                                required>
                            <div class="invalid-feedback">
                                Please fill in your password
                            </div>
                        </div>

                        <div class="form-group text-right">
                            <button type="submit" class="btn btn-primary btn-lg btn-icon icon-right" tabindex="4">
                                Register
                            </button>
                        </div>
                    </form>

                </div>
            </div>
            <div class="col-lg-8 col-12 order-lg-2 order-1 min-vh-100 background-walk-y position-relative overlay-gradient-bottom"
                data-background="../assets/img/unsplash/login-bg.jpg">
                <div class="absolute-bottom-left index-2">
                    <div class="text-light p-5 pb-2">
                        <div class="mb-5 pb-3">
                            <h1 class="mb-2 display-4 font-weight-bold">Good Morning</h1>
                            <h5 class="font-weight-normal text-muted-transparent">Bali, Indonesia</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
