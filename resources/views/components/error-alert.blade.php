<div class="alert text-center alert-danger border rounded-md" role="alert">
    <p class="m-0">
        <img class="img-fluid mr-2" src="{{ asset('images/info/notice-error.png') }}" alt="">
        <span class="font-weight-bolder">{{ __('Login Faild') }}</span> <span
            class="redirecting">{{ __('Please try again') }}
            @yield('failedSession')
        </span>
    </p>
</div>
