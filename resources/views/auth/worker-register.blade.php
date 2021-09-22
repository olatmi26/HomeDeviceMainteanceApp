@extends('layouts/master')
@section('title', 'Worker-account-login')
@section('othercss')
<link rel="stylesheet" href="{{ asset('frontend/js/datepicker.min.css') }}">
@endsection
@section('content')
    @livewire('worker-register-component')
@endsection
@section('otherscript')
<script src="{{ asset('frontend/js/datepicker.min.js') }}"></script>
@endsection


