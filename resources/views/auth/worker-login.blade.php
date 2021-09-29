@extends('layouts/master')
@section('title', 'Worker-account-login')
@section('content')
<div class="block-space block-space--layout--after-header"></div>
@livewire('worker-login-component')
<div class="block-space block-space--layout--before-footer"></div>
@endsection