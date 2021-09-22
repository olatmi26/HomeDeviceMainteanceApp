@extends('layouts/master')
@section('title', 'Worker-account-login')
@section('content')
    <div class="block-space block-space--layout--after-header"></div>
    <div class="block">
        <div class="container container--max--lg rounded">
            <div class="row">
                <div class="col-md-8 mx-auto">
                    <div class="card flex-grow-1 mb-md-0 mr-0 mr-lg-3 ml-0 ml-lg-4 login-card">
                        <div class="card-body card-body--padding--2">
                            <h3 class="card-title">Worker Login</h3>
                            @if (Session::get('successful-login'))
                                @include('components/success-alert')
                                @endif
                                @if (Session::get('failed'))
                                @include('components/failed-alert')
                             @endif
                            <form method="post" action="{{ route('worker.attempt-login') }}">
                                @csrf
                                <div class="form-group"><label for="signin-email">Email address</label> <input
                                        id="signin-email" type="email" name="email" class="form-control form-control-lg"
                                        placeholder="email address"></div>
                                <div class="form-group"><label for="signin-password">Password</label> <input
                                        id="signin-password" type="password" class="form-control form-control-lg" name="password"
                                        placeholder="Enter password"> <small class="form-text text-muted"><a href="">Forgot
                                            password?</a></small></div>
                                <div class="form-group">
                                    <div class="form-check">
                                        <span class="input-check form-check-input">
                                            <span class="input-check__body">
                                                <input class="input-check__input"
                                                    type="checkbox" id="signin-remember">
                                                    <span class="input-check__box"></span>
                                                    <span class="input-check__icon">
                                                        <svg width="9px" height="7px">
                                                            <path
                                                                d="M9,1.395L3.46,7L0,3.5L1.383,2.095L3.46,4.2L7.617,0L9,1.395Z">
                                                            </path>
                                                        </svg>
                                                    </span>
                                            </span>
                                        </span>
                                        <div class="row">
                                            <label class="form-check-label col-lg-6"
                                                for="signin-remember">{{ __('Remember Me') }}
                                            </label>
                                            <label class="form-check-label col-lg-6"
                                                for="register new account">{!! __('Do not have Account Yet,') !!} <a href="{{ route('worker.register') }}">{{ __('Register here') }}</a>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group mb-0 col-lg-6 col-sm-10 mx-auto"><button type="button" class="btn btn-primary mt-3 col-12">{!! __('Login') !!} <i class="fas fa-spinner fa-spin d-none"></i></button></div>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <div class="block-space block-space--layout--before-footer"></div>
@endsection
