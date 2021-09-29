<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    @include('components/head')
    @livewireStyles
</head>
<body>
    <!-- site -->
    <div class="site">
        <!-- site__mobile-header -->
        @include('components/mobile-header')
        <!-- site__mobile-header / end -->
        <!-- site__header -->
        @include('components/header-menu')
        <!-- site__header / end -->
        <!-- site__body -->
        <div class="site__body">
            @yield('content')
        </div>
        <!-- site__body / end -->
        <!-- site__footer -->
        @include('components/site-footer')
        <!-- site__footer / end -->
    </div>
    <!-- site / end -->
    <!-- mobile-menu -->
   @include('components/mobile-menu')
    <!-- mobile-menu / end -->
    <!-- quickview-modal -->
    <div id="quickview-modal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true"></div>
    <!-- quickview-modal / end -->
    <!-- add-vehicle-modal -->
    @include('components/add-vehicle-modal-quick')
    <!-- add-vehicle-modal / end -->
    <!-- vehicle-picker-modal -->
    @include('components/vehicle-picker')
    <!-- vehicle-picker-modal / end -->
    <!-- photoswipe -->
    @include('components/pswploader')
    <!-- photoswipe / end -->
    <!-- scripts -->
    @livewireScripts
   @include('components/script')
   @include('sweetalert::alert')
</body>
</html>
