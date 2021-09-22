{{-- @if (Session::get('successful-login')) --}}
<div class="alert text-center alert-success border rounded-md" role="alert">
    <p class="m-0">
        <img class="img-fluid mr-2" src="{{ asset('images/info/notice-success.png') }}" alt="">
        <span class="font-weight-bolder">{{ __('Login Successful') }}</span> <span class="redirecting">{{ __('Please wait while redirecting...') }}</span>
    </p>
</div>
{{-- @endif --}}
{{-- @if (Session::get('failed')) --}}
<div class="alert text-center alert-danger border rounded-md" role="alert">
    <p class="m-0">
        <img class="img-fluid mr-2" src="{{ asset('images/info/notice-error.png') }}" alt="">
        <span class="font-weight-bolder">{{ __('Login Successful') }}</span> <span
            class="redirecting">{{ __('Please wait while redirecting...') }}</span>
    </p>
</div>

{{-- @endif --}}
