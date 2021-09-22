@extends('layouts.master')
@section('content')
<div class="block-space block-space--layout--divider-xs"></div>
@include('components.slideshow')
<div class="block-space block-space--layout--divider-nl"></div>
@include('components.brand8-col-full')
<div class="block-space block-space--layout--divider-nl"></div>
@yield('category-devices')
<div class="block-space block-space--layout--divider-nl"></div>
@include('components.feature-products')
<div class="block-space block-space--layout--divider-nl"></div>
@include('components.banners')
@include('components.dealZone')
@include('components.top-product')
@include('components.delivery-support-features')
@endsection