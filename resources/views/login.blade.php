@extends('layouts.base')
@section('content')
    <div class="d-flex flex-column flex-root">
        <!--begin::Authentication - Sign-in -->
        <div
            class="d-flex flex-column flex-column-fluid bgi-position-y-bottom position-x-center bgi-no-repeat bgi-size-contain bgi-attachment-fixed"
            style="background-image: url({{ asset('assets/media/illustrations/sketchy-1/14.png') }})">
            <!--begin::Content-->
            <div class="d-flex flex-center flex-column flex-column-fluid p-10 pb-lg-20">
                <!--begin::Logo-->
                {{--
                <a href="../../demo1/dist/index.html" class="mb-12">
                    <img alt="Logo" src="assets/media/logos/logo-1.svg" class="h-40px"/>
                </a>
                 --}}
                <!--end::Logo-->
                <h1>NinePoints</h1>
                <!--begin::Wrapper-->
                <div class="w-lg-500px bg-body rounded shadow-sm p-10 p-lg-15 mx-auto">
                    <!--begin::Form-->
                    <form class="form w-100"  novalidate="novalidate" id="sign_in_form" method="POST" action="{{ route('login') }}">
                        @csrf
                        @method('POST')
                        <!--begin::Heading-->
                        <div class="text-center mb-10">
                            <!--begin::Title-->
                            <h1 class="text-dark mb-3">Sign In to NinePoints</h1>
                            <!--end::Title-->
                            {{--
                            <!--begin::Link-->
                            <div class="text-gray-400 fw-bold fs-4">New Here?
                                <a href="{{ route('register') }}"
                                   class="link-primary fw-bolder">Create an Account</a>
                            </div>
                            <!--end::Link-->
                              --}}

                        </div>
                        <!--begin::Heading-->
                        <!--begin::Input group-->
                        <div class="fv-row mb-10" id="username_flied">
                            <!--begin::Label-->
                            <label class="form-label fs-6 fw-bolder text-dark">Username</label>
                            <!--end::Label-->
                            <!--begin::Input-->
                            <input id="username" class="form-control form-control-lg form-control-solid" type="text" name="username" rules="required" placeholder="Ex: admin123"
                                   autocomplete="off" value="{{ old('username') }}" required/>
                            <!--end::Input-->
                            @error('username')
                                <label class="form-label fs-6 fw-bolder text-danger mt-2">{{ $message }}</label>
                            @enderror
                            <span id="username_err" class="form-label fs-6 fw-bolder text-danger mt-2"></span>
                        </div>
                        <!--end::Input group-->
                        <!--begin::Input group-->
                        <div class="fv-row mb-10" id="username_flied">
                            <!--begin::Wrapper-->
                            <div class="d-flex flex-stack mb-2">
                                <!--begin::Label-->
                                <label class="form-label fw-bolder text-dark fs-6 mb-0">Password</label>
                                <!--end::Label-->
                                <!--begin::Link-->
                                <a href="#"
                                   class="link-primary fs-6 fw-bolder">Forgot Password ?</a>
                                <!--end::Link-->
                            </div>
                            <!--end::Wrapper-->
                            <!--begin::Input-->
                            <input id="password" class="form-control form-control-lg form-control-solid" type="password"  rules="required|min:6" placeholder="Enter your password"
                                   name="password" autocomplete="off" required/>
                            <!--end::Input-->
                            @error('password')
                                <label class="form-label fs-6 fw-bolder text-danger mt-2">{{ $message }}</label>
                            @enderror
                            <span id="password_err" class="form-label fs-6 fw-bolder text-danger mt-2"></span>
                        </div>
                        <!--end::Input group-->
                        <!--begin::Actions-->
                        @if(session('error'))
                            <div class="fs-4 fw-bolder text-center text-danger mb-5">Login Error - {{ session('error') }}</div>
                        @endif
                        <div class="text-center">
                            <!--begin::Submit button-->
                            <button type="submit" class="btn btn-lg btn-primary w-100 mb-5">
                                <span class="indicator-label">Login</span>
                                 {{--
                                <input type="submit" class="indicator-label" value="Login">
                                <span class="indicator-progress">Please wait...
                                    <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
                                </span>
                                --}}
                            </button>
                            <!--end::Submit button-->
                            {{--
                            <!--begin::Separator-->
                            <div class="text-center text-muted text-uppercase fw-bolder mb-5">or</div>
                            <!--end::Separator-->
                            <!--begin::Google link-->
                            <a href="#" class="btn btn-flex flex-center btn-light btn-lg w-100 mb-5">
                                <img alt="Logo" src="{{ asset('assets/media/svg/brand-logos/google-icon.svg') }}" class="h-20px me-3"/>Continue
                                with Google</a>
                            <!--end::Google link-->
                            <!--begin::Google link-->
                            <a href="#" class="btn btn-flex flex-center btn-light btn-lg w-100 mb-5">
                                <img alt="Logo" src="{{ asset('assets/media/svg/brand-logos/facebook-4.svg') }}" class="h-20px me-3"/>Continue
                                with Facebook</a>
                            <!--end::Google link-->
                            <!--begin::Google link-->
                            <a href="#" class="btn btn-flex flex-center btn-light btn-lg w-100">
                                <img alt="Logo" src="{{ asset('assets/media/svg/brand-logos/apple-black.svg') }}" class="h-20px me-3"/>Continue
                                with Apple</a>
                            <!--end::Google link-->
                             --}}
                        </div>
                        <!--end::Actions-->
                    </form>
                    <!--end::Form-->
                </div>
                <!--end::Wrapper-->
            </div>
            <!--end::Content-->
            <!--begin::Footer-->
            <div class="d-flex flex-center flex-column-auto p-10">
                <!--begin::Links-->
                <div class="d-flex align-items-center fw-bold fs-6">
                    <a href="https://keenthemes.com" class="text-muted text-hover-primary px-2">About</a>
                    <a href="mailto:support@keenthemes.com" class="text-muted text-hover-primary px-2">Contact</a>
                    <a href="https://1.envato.market/EA4JP" class="text-muted text-hover-primary px-2">Contact Us</a>
                </div>
                <!--end::Links-->
            </div>
            <!--end::Footer-->
        </div>
        <!--end::Authentication - Sign-in-->
    </div>
@endsection
