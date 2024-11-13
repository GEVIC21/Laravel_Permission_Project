@extends('layouts.master')
@section('content')
    <main class="main-content">

        <div class="admin">
            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-xxl-3 col-xl-4 col-md-6 col-sm-8">
                        <div class="edit-profile">
                            <div class="edit-profile__logos">
                                <a href="index.html">
                                    <img class="dark" src="img/logo-dark.png" alt="">
                                    <img class="light" src="img/logo-white.png" alt="">
                                </a>
                            </div>
                            <div class="card border-0">
                                <div class="card-header">
                                    <div class="edit-profile__title">
                                        <h6>Connectez Vous !!!</h6>
                                    </div>
                                </div>
                                <div class="card-body">
                                    @include('_message')
                                    <div class="edit-profile__body">
                                        <form method="POST" action="">
                                            @csrf
                                            <div class="form-group mb-25">
                                                <label for="email"> Email Address</label>
                                                <input type="email" name="email" class="form-control" id="email"
                                                    placeholder="name@example.com">
                                            </div>
                                            <div class="form-group mb-15">
                                                <label for="password-field">password</label>
                                                <div class="position-relative">
                                                    <input id="password-field" type="password" class="form-control"
                                                        name="password" placeholder="Password">
                                                    <div
                                                        class="uil uil-eye-slash text-lighten fs-15 field-icon toggle-password2">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="admin-condition">
                                                <div class="checkbox-theme-default custom-checkbox ">
                                                    <input class="checkbox" name="remember" type="checkbox" id="check-1">
                                                    <label for="check-1">
                                                        <span class="checkbox-text">Keep me logged in</span>
                                                    </label>
                                                </div>
                                                <a href="forget-password.html">forget password?</a>
                                            </div>
                                            <div
                                                class="admin__button-group button-group d-flex pt-1 justify-content-md-start justify-content-center">
                                                <button
                                                    class="btn btn-primary btn-default w-100 btn-squared text-capitalize lh-normal px-50 signIn-createBtn ">
                                                    sign in
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                </div><!-- End: .card-body -->
                                <div class="px-20">
                                    <p class="social-connector social-connector__admin text-center">
                                        <span>Or</span>
                                    </p>
                                    <div class="button-group d-flex align-items-center justify-content-center">
                                        <ul class="admin-socialBtn">
                                            <li>
                                                <button class="btn text-dark google">
                                                    <img class="svg" src="img/google-Icon.svg" alt="img" />
                                                </button>
                                            </li>
                                            <li>
                                                <button class=" radius-md wh-48 content-center facebook">
                                                    <i class="uil uil-facebook-f"></i>
                                                </button>
                                            </li>
                                            <li>
                                                <button class="radius-md wh-48 content-center twitter">
                                                    <i class="uil uil-twitter"></i>
                                                </button>
                                            </li>
                                            <li>
                                                <button class="radius-md wh-48 content-center github">
                                                    <i class="uil uil-github"></i>
                                                </button>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="admin-topbar">
                                    <p class="mb-0">
                                        Don't have an account?
                                        <a href="sign-up.html" class="color-primary">
                                            Sign up
                                        </a>
                                    </p>
                                </div><!-- End: .admin-topbar  -->
                            </div><!-- End: .card -->
                        </div><!-- End: .edit-profile -->
                    </div><!-- End: .col-xl-5 -->
                </div>
            </div>
        </div><!-- End: .admin-element  -->

    </main>
    <div id="overlayer">
        <div class="loader-overlay">
            <div class="dm-spin-dots spin-lg">
                <span class="spin-dot badge-dot dot-primary"></span>
                <span class="spin-dot badge-dot dot-primary"></span>
                <span class="spin-dot badge-dot dot-primary"></span>
                <span class="spin-dot badge-dot dot-primary"></span>
            </div>
        </div>
    </div>
    <div class="enable-dark-mode dark-trigger">
        <ul>
            <li>
                <a href="#">
                    <i class="uil uil-moon"></i>
                </a>
            </li>
        </ul>
    </div>
@endsection
