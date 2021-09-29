@extends('layouts/master')
@section('title', 'Worker-account-login')
@section('othercss')
<link rel="stylesheet" href="{{ asset('frontend/js/datepicker.min.css') }}">
@endsection
@section('content')
{{-- @livewire('worker-register-component') --}}
<div class="col-md-10 d-flex mt-md-0 mx-auto p-0">
    <div class="card flex-grow-1 my-lg-4 pb-0 transition-fade px-0" id="cardRegworker">
        <div class="card-body p-0">
            <h3 class="card-title mt-0 mb-0 py-4 text-center">{{ __('Workers Registration') }} <span>Portal</span></h3>
            <form method="POST" action="{{ route('worker.store')}}" enctype="multipart/form-data"
                class="workersRegisterForm">
                @csrf
                <div class="col-lg-12 px-0">
                    <div class="row pro-wrapper">
                        <div class="col-lg-8 col-sm-12 mx-auto">
                            <div class="progressbar">
                                <div class="progress" id="progress"></div>
                                <div class="progress-step progress-step-active"
                                    data-title="{{ __('Workers Biodata Profile') }}"></div>
                                <div class="progress-step" data-title="{{ __('Worker Document Attachments') }}"></div>
                                <div class="progress-step" data-title="Authentication
                                    Details"></div>
                                <div class="progress-step" data-title="{{ __('Security Pin Setup') }}"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 my-4 p-0">
                        {{-- Step 1 --}}
                        {{-- @if ($currentStage==1) --}}
                        <div class="row">
                            <div
                                class="col-11 mx-auto form-step form-step-active step1 animate__animated animate__fadeInLeft">
                                <div class="row">
                                    <div class="form-group mb-4 col-lg-5 col-sm-12">
                                        <label for="Firstname"> {{ __('First Name')}} </label>
                                        <input required
                                            class="form-control form-control-lg @error('Firstname') is-invalid @enderror"
                                            id="Firstname" name="Firstname" placeholder="First name" type="text"
                                            value="{{old('Firstname')}}">
                                        @error('Firstname')<span class="invalid-feedback" role="alert"><strong>
                                                {{ $message }}</strong></span>@enderror
                                        {{-- wire:model="firstName" --}}
                                        
                                        
                                        
                                    </div>
                                    <div class=" form-group mb-4 col-lg-4 col-sm-12 ">
                                        <label for="Othername">{{ __('Middle Name')}}</label>
                                        <input required
                                            class="form-control form-control-lg @error('Othername') is-invalid @enderror"
                                            name="Othername" placeholder="Middle Name" type="text"
                                            value="{{old('Othername')}}">
                                        @error('Othername')<span class="invalid-feedback" role="alert"><strong>
                                                {{ $message }}</strong></span>@enderror
                                        {{-- wire:model="Lastname" --}}
                                    </div>
                                    <div class=" form-group mb-4 col-lg-3 col-sm-12 ">
                                        <label for=" Lastname">{{ __('Last Name')}}</label>
                                        <input required
                                            class="form-control form-control-lg @error('Lastname') is-invalid @enderror"
                                            name="Lastname" placeholder="Last name" value="{{ old('Lastname') }}"
                                            type="text">
                                        @error('Lastname')<span class="invalid-feedback" role="alert"><strong>
                                                {{ $message }}</strong></span>@enderror
                                        {{-- wire:model="Othername" --}}
                                    </div>
                                </div>
                                <div class=" row">
                                    <div class="form-group mb-4 col-lg-5 col-sm-12 ">
                                        <label for="MobileN01">{{__('Primary phone Number') }}</label>
                                        <input required class="form-control @error('MobileN01') is-invalid @enderror"
                                            inputmode="numeric" maxlength="11" minlength="11" name="MobileN01"
                                            onkeypress="return (event.charCode == 8 || event.charCode == 0 || event.charCode == 13) ? null : event.charCode >= 48 && event.charCode <= 57"
                                            pattern="[0-9]*" placeholder="Primary Mobile N0" tabindex="3" type="text"
                                            value="{{ old('MobileN01') }}" />
                                        @error('MobileN01')<span class="invalid-feedback" role="alert"><strong>
                                                {{ $message }}</strong></span>@enderror
                                        {{-- wire:model="MobileN01" --}}
                                    </div>
                                    <div class="form-group mb-4 col-lg-4 col-sm-12 ">
                                        <label for="MobileN02"> {{ __('Mobile Number2') }}</label>
                                        <input required class="form-control @error('MobileN02') is-invalid @enderror"
                                            inputmode="numeric" maxlength="11" minlength="11" name="MobileN02"
                                            onkeypress="return (event.charCode == 8 || event.charCode == 0 || event.charCode == 13) ? null : event.charCode >= 48 && event.charCode <= 57"
                                            pattern="[0-9]*" placeholder="Seconday Mobile N0" tabindex="3" type="text"
                                            value="{{ old('MobileN02') }}" />
                                        @error('MobileN02')<span class="invalid-feedback" role="alert"><strong>
                                                {{ $message }}</strong></span>@enderror
                                        {{-- wire:model="MobileN02" --}}
                                    </div>
                                    <div class="form-group mb-4 col-lg-3 col-sm-12 ">
                                        <label for="MobileN03">
                                            {{ __('Other Phone Number') }}
                                        </label>
                                        <input required class="form-control @error('MobileN03') is-invalid @enderror"
                                            inputmode="numeric" maxlength="11" minlength="11" name="MobileN03"
                                            onkeypress="return (event.charCode == 8 || event.charCode == 0 || event.charCode == 13) ? null : event.charCode >= 48 && event.charCode <= 57"
                                            pattern="[0-9]*" placeholder="Other reachable Mobile" tabindex="3"
                                            type="text" value="{{ old('MobileN03') }}" />
                                        @error('MobileN03')<span class="invalid-feedback" role="alert"><strong>
                                                {{ $message }}</strong></span>@enderror
                                        {{-- wire:model="MobileN03" --}}
                                    </div>
                                </div>
                                <div class="row d-flex">
                                    <div class="form-group mb-4 col-lg-8 col-sm-12 flex-md-shrink-0">
                                        <label for="signup-email"> {{ __('Email address') }}</label>
                                        <input required
                                            class="form-control form-control-lg @error('email') is-invalid @enderror"
                                            id="signup-email" placeholder="{{__('enter valid email address')}}"
                                            type="email" name="email">
                                        @error('email')<span class="invalid-feedback" role="alert"><strong>
                                                {{ $message }}</strong></span>@enderror
                                        {{-- wire:model="email" --}}
                                    </div>
                                    <div class="form-group mb-4 col-lg-4 col-sm-12">
                                        <label for="nationalcardno">{{ __('National ID Number') }} </label>
                                        <input required
                                            class="form-control form-control-lg @error('nationalcardno') is-invalid @enderror"
                                            id="nationalcardno" inputmode="numeric" maxlength="14" minlength="14"
                                            name="nationalcardno"
                                            onkeypress="return (event.charCode == 8 || event.charCode == 0 || event.charCode == 13) ? null : event.charCode >= 48 && event.charCode <= 57"
                                            pattern="[0-9]*" placeholder="{{ __('Enter your National ID Number') }}"
                                            tabindex="3" type="tel" value="{{ old('nationalcardno') }}" />
                                        @error('nationalcardno')<span class="invalid-feedback" role="alert"><strong>
                                                {{ $message }}</strong></span>@enderror
                                        {{-- wire:model="nationalcardno" --}}
                                    </div>
                                    <div class="form-group col-lg-5 col-sm-12 flex-md-shrink-0">
                                        <label for="residentialAddress"> {{ __('Residential Address') }}</label>
                                        <textarea class="form-control" id="residentialAddress" name="ResidentialAddress"
                                            placeholder="Residenatal Addresss" required>
                                                </textarea>
                                        @error('ResidentialAddress')<span class="invalid-feedback" role="alert"><strong>
                                                {{ $message }}</strong></span>@enderror
                                        {{-- text="{{ old('ResidentialAddress') }}" --}}
                                        {{-- wire:model="ResidentialAddress" --}}
                                    </div>
                                    <div class="form-group col-lg-3 col-sm-12 flex-md-shrink-0">
                                        <label for="dob">{{ __('Date of Birth') }}</label>
                                        <div class="input-group" id="dob">
                                            <input required class="form-control " data-toggle="datepicker" name="dob"
                                                type="text" value="{{ old('dob') }}">
                                            <span class="input-group-addon input-group-append border-left">
                                                <span class="fas fa-calendar input-group-text">
                                                </span>
                                            </span>
                                            @error('dob')<span class="invalid-feedback" role="alert"><strong>
                                                    {{ $message }}</strong></span>@enderror
                                            {{-- wire:model='dobpoicked' --}}
                                        </div>
                                    </div>
                                    <div class="form-group col-lg-4 col-sm-12 flex-md-shrink-0">
                                        <label for="Gender">{{ __('Gender') }}</label>
                                        <div class="input-group" id="gender">
                                            <select required class="form-control" name="gender">
                                                <option value="" selected>{{ __('Gender') }}</option>
                                                <option value="1">{{ __('Male') }}</option>
                                                <option value="2">{{ __('Female') }}</option>
                                            </select>
                                            @error('gender')<span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong></span>@enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="btns-group mx-auto mt-4 mb-1">
                                        <div class="form-group mb-0 mr-auto float-right form-navigation">
                                            <button type="button"
                                                class="btn btn-outline-primary btn-radius mb-0 btn-next">
                                                <span>Continue</span>
                                                <i class="fas fa-angle-double-right ml-2"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-11 mx-auto form-step animate__animated animate__fadeInUp step2">
                            <div class="row">
                                <div class="form-group col-lg-6 col-sm-12 ">
                                    <label for="profilePhoto"> {{ __('Profile Picture') }}</label>
                                    <input class="form-control" name="profilePhoto" type="file"
                                        value="{{ old('profilePhoto') }}" accept="image/*" id="ProfilePhoto" />
                                    <span class="invalid-feedback">
                                        @error('profilePhoto'){{ $message }}@enderror
                                    </span>
                                    {{-- wire:model="profilePhoto"  --}}
                                </div>
                                <div class="form-group col-lg-6 col-sm-12 ">
                                    <label for="IdCard"> {{ __('Upload Identiity card')}}</label>
                                    <input required class="form-control" name="IdCard" type="file"
                                        value="{{ old('IdCard') }}" id="IdCard" accept="image/*">
                                    @error('IdCard')<span class="invalid-feedback" role="alert"><strong>
                                            {{ $message }}</strong></span>@enderror
                                    {{-- wire:model="IdCard"                            --}}
                                </div>
                                <div class="form-group col-lg-6 col-sm-12 ">
                                    <label for="LegalPapersUploaded">{{ __('Work Permit Legal Document') }}</label>
                                    <input required class="form-control" name="LegalPapersUploaded" type="file"
                                        id="LegalPapersUploaded" value="{{ old('LegalPapersUploaded') }}" />
                                    <small class="text-muted">{{ __('recommeded Upload format is pdf file')}} </small>
                                    @error('LegalPapersUploaded')<span class="invalid-feedback" role="alert"><strong>
                                            {{ $message }}</strong></span>@enderror
                                    {{-- wire:model="LegalPapersUploaded" --}}
                                </div>
                                <div class="form-group col-lg-6 col-sm-12 ">
                                    <label for="OtherDocsHandPrint">{{ __('Other Document') }}</label>
                                    <input class="form-control" name="OtherDocsHandPrint" type="file"
                                        value="{{ old('OtherDocsHandPrint') }}" id="OtherDocsHandPrint" />
                                    <small class="text-muted">{{ __('recommeded Upload format is pdf file')}} </small>
                                    <span class="invalid-feedback">
                                        @error('OtherDocsHandPrint'){{ $message }}@enderror
                                    </span>
                                    {{-- wire:model="OtherDocsHandPrint"                                  --}}
                                </div>
                            </div>
                            <div class="row">
                                <div class="btns-group mx-auto mt-4 mb-1">
                                    <button type="button" class="btn btn-outline-primary btn-radius mb-0 btn-prev mr-5">
                                        <span>Previous</span>
                                        <i class="fas fa-angle-double-right ml-2"></i>
                                    </button>
                                    <button type="button" class="btn btn-outline-primary btn-radius mb-0 btn-next">
                                        <span>Continue</span>
                                        <i class="fas fa-angle-double-right ml-2"></i>
                                    </button>
                                </div>
                            </div>
                        </div>

                        <div class="col-11 mx-auto form-step animate__animated animate__fadeInRight step3">
                            <div class="row">
                                <div class="form-group col-lg-4 mx-auto col-sm-12 mb-4">
                                    <label for="username"> {{ __('User Name') }}</label>
                                    <input required class="form-control form-control-lg" name="username"
                                        placeholder="username" maxlength="15" type="text" value="{{ old('username')}}">
                                    @error('username')<span class="invalid-feedback"
                                        role="alert"><strong>{{ $message }}</strong></span>@enderror
                                </div>
                                {{-- wire:model="username" --}}

                                <div class="form-group col-lg-4 mx-auto col-sm-12 ">
                                    <label for="password">{{ __('Password') }}</label>
                                    <input required class="form-control form-control-lg" name="password"
                                        placeholder="password" type="password" value="{{ old('password')}}">
                                    @error('password')<span class="invalid-feedback"
                                        role="alert"><strong>{{ $message }}</strong></span>@enderror
                                    {{-- wire:model="password" --}}
                                </div>
                                <div class="form-group col-lg-4 mx-auto col-sm-12 ">
                                    <label for="password_confirmation"> {{ __('Comfirm Password') }}</label>
                                    <input required class="form-control form-control-lg" name="password_confirmation"
                                        placeholder="confirm password" type="password"
                                        value="{{ old('password_confirmation')}}">
                                    @error('password_confirmation')<span class="invalid-feedback"
                                        role="alert"><strong>{{ $message }}</strong></span>@enderror
                                    {{-- wire:model="confirm_password" --}}
                                </div>
                            </div>
                            <div class="row">
                                <div class="btns-group mx-auto mt-4 mb-1">
                                    <button type="button" class="btn btn-outline-primary btn-radius mb-0 btn-prev mr-5">
                                        <span>Previous</span>
                                        <i class="fas fa-angle-double-right ml-2"></i>
                                    </button>
                                    <button type="button" class="btn btn-outline-primary btn-radius mb-0 btn-next">
                                        <span>Continue</span>
                                        <i class="fas fa-angle-double-right ml-2"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="col-11 mx-auto form-step step_submit step4">
                            <div class="row animate__animated animate__backInRight">
                                <div class="form-group col-lg-3 mx-auto col-sm-12 ">
                                    <label for="seccode">
                                        {{ __('Platform Security Access Pin') }}
                                    </label>
                                    <input
                                        class="form-control form-control-lg seccode @error('securitycode') is-invalid @enderror"
                                        inputmode="numeric" maxlength="4" minlength="4" name="securitycode" id="securitycode"
                                        onkeypress="return (event.charCode == 8 || event.charCode == 0 || event.charCode == 13) ? null : event.charCode >= 48 && event.charCode <= 57"
                                        pattern="[0-9]*" placeholder="{{ __('Platform Security Code') }}" required=""
                                        tabindex="3" type="tel" value="{{ old('securitycode') }}" />
                                    @error('securitycode')
                                    <span class="invalid-feedback" role="alert">
                                        {{ $message }}
                                    </span>
                                    @enderror
                                </div>
                                <div class="form-group col-lg-3 mx-auto col-sm-12 ">
                                    <label for="seccode">
                                        {{ __('Confirm Security Access Pin') }}
                                    </label>
                                    <input
                                        class="form-control form-control-lg  seccode @error('securityCode_confirmation') is-invalid @enderror"
                                        inputmode="numeric" maxlength="4" minlength="4" name="securityCode_confirmation" id="securityCode_confirmation"
                                        onkeypress="return (event.charCode == 8 || event.charCode == 0 || event.charCode == 13) ? null : event.charCode >= 48 && event.charCode <= 57"
                                        pattern="[0-9]*" placeholder="{{ __('Platform Security Code') }}" required=""
                                        tabindex="3" type="tel" value="{{ old('securityCode_confirmation') }}" />
                                    @error('securityCode_confirmation')
                                    <span class="invalid-feedback" role="alert">
                                        {{ $message }}
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row">
                                <div class="btns-group mx-auto mt-4 mb-1">
                                    <button type="button" class="btn btn-outline-primary btn-radius mb-0 btn-prev mr-5">
                                        <span>Previous</span>
                                        <i class="fas fa-angle-double-right ml-2"></i>
                                    </button>
                                    <button type="submit" class="btn btn-outline-primary btn-radius mb-0 btn-submit">
                                        <span>Register</span>
                                        <i class="fas fa-angle-double-right ml-2"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
@section('otherscript')
<script src="{{ asset('frontend/js/datepicker.min.js') }}"></script>
<script src="{{ asset('frontend/vendors/parsleyjs/dist/parsley.min.js')}}"></script>
@endsection
