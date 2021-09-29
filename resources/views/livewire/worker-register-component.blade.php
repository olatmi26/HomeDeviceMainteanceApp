<div class="col-md-10 d-flex mt-md-0 mx-auto p-0">
    <div class="card flex-grow-1 my-0 transition-fade" id="swup">
        <div class="card-body p-0">
            <h3 class="card-title mt-0 mb-0 py-4 text-center">{{ __('Workers Registration') }} <span>Portal</span></h3>
            <form method="POST" enctype="multipart/form-data" class="workersRegisterForm">
                {{-- wire:submit.prevent='SaveWorker' --}}
                @csrf
                <div class="col-lg-12 employee-data">
                    <div class="row pb-0 border-bottom">
                        <div class="col-lg-3 col-sm-12 mx-auto worker-linker-navigation">
                            <a class="nav-link @if($currentStage==1) {{ 'active' }} @endif mx-auto" wire.click.prevent='ContinueNext()' id="biodatainfo"
                                href="#">
                                {{ __('Workers Biodata Profile') }}
                            </a>
                        </div>
                        <div class="col-lg-4 col-sm-12 mx-auto worker-linker-navigation">
                            <a class="nav-link mx-auto @if($currentStage==2) {{ 'active' }} @endif" wire.click.prevent='ContinueNext()' href="#">
                                {{ __('Worker Document Attachments') }}
                            </a>
                        </div>
                        <div class="col-lg-3 col-sm-12 mx-auto worker-linker-navigation">
                            <a class="nav-link mx-auto @if($currentStage==3) {{ 'active' }} @endif" wire.click.prevent='ContinueNext()' href="#">Authentication
                                Details</a>
                        </div>
                        <div class="col-lg-2 col-sm-12 mx-auto worker-linker-navigation">
                                 <span class="paddingTop3 nav-link">
                                    [ step {{ $currentStage }} of / {{ $totalStage  }} ]
                                 </span>                           
                        </div>
                    </div>
                    <div class="col-12 my-4 p-0">
                        {{-- Step 1 --}}
                        @if ($currentStage==1)
                            <div class="row">
                                <div class="col-11 mx-auto form-section">
                                    <div class="row">
                                        <div class="form-group mb-4 col-lg-5 col-sm-12">
                                            <label for="Firstname"> {{ __('First Name')}} </label>
                                            <input class="form-control form-control-lg @error('firstName') is-invalid @enderror" name="firstName"
                                                placeholder="First name" type="text"  value="{{old('firstName')}}">
                                                @error('firstName')<span class="invalid-feedback" role="alert"><strong> {{ $message }}</strong></span>@enderror
                                                {{-- wire:model="firstName" --}}
                                        </div>
                                        <div class=" form-group mb-4 col-lg-4 col-sm-12 ">
                                            <label for="Middlename">{{ __('Middle Name')}}</label>
                                            <input class="form-control form-control-lg @error('Lastname') is-invalid @enderror" name="Lastname" placeholder="Last Name" type="text" value="{{old('Lastname')}}">
                                            @error('Lastname')<span class="invalid-feedback" role="alert"><strong> {{ $message }}</strong></span>@enderror
                                             {{-- wire:model="Lastname" --}}
                                        </div>
                                        <div class=" form-group mb-4 col-lg-3 col-sm-12 ">
                                            <label for=" Othername">{{ __('Other Name')}}</label>
                                            <input class="form-control form-control-lg @error('Othername') is-invalid @enderror" name="Othername"
                                                placeholder="Other name" value="{{ old('Othername') }}" type="text">
                                            @error('Othername')<span class="invalid-feedback" role="alert"><strong> {{ $message }}</strong></span>@enderror
                                            {{-- wire:model="Othername" --}}
                                        </div>
                                    </div>
                                    <div class=" row">
                                        <div class="form-group mb-4 col-lg-5 col-sm-12 ">
                                            <label for="MobileN01">{{__('Primary phone Number') }}</label>
                                            <input class="form-control @error('MobileN01') is-invalid @enderror"
                                                inputmode="numeric" maxlength="11" minlength="11" name="MobileN01" onkeypress="return (event.charCode == 8 || event.charCode == 0 || event.charCode == 13) ? null : event.charCode >= 48 && event.charCode <= 57" pattern="[0-9]*" placeholder="Primary Mobile N0" tabindex="3" type="text"
                                                value="{{ old('MobileN01') }}" />
                                                @error('MobileN01')<span class="invalid-feedback" role="alert"><strong> {{ $message }}</strong></span>@enderror
                                                {{-- wire:model="MobileN01" --}}
                                        </div>
                                        <div class="form-group mb-4 col-lg-4 col-sm-12 ">
                                            <label for="MobileN02"> {{ __('Mobile Number2') }}</label>
                                            <input class="form-control @error('MobileN02') is-invalid @enderror" inputmode="numeric" maxlength="11" minlength="11" name="MobileN02" onkeypress="return (event.charCode == 8 || event.charCode == 0 || event.charCode == 13) ? null : event.charCode >= 48 && event.charCode <= 57" pattern="[0-9]*" placeholder="Seconday Mobile N0" tabindex="3" type="text"
                                                value="{{ old('MobileN02') }}" />
                                                @error('MobileN02')<span class="invalid-feedback" role="alert"><strong> {{ $message }}</strong></span>@enderror
                                                {{-- wire:model="MobileN02" --}}
                                        </div>
                                        <div class="form-group mb-4 col-lg-3 col-sm-12 ">
                                            <label for="MobileN03">
                                                {{ __('Other Phone Number') }}
                                            </label>
                                            <input class="form-control @error('MobileN03') is-invalid @enderror"
                                                inputmode="numeric" maxlength="11" minlength="11" name="MobileN03"
                                                onkeypress="return (event.charCode == 8 || event.charCode == 0 || event.charCode == 13) ? null : event.charCode >= 48 && event.charCode <= 57" pattern="[0-9]*" placeholder="Other reachable Mobile" tabindex="3"
                                                type="text" value="{{ old('MobileN03') }}" />
                                            @error('MobileN03')<span class="invalid-feedback" role="alert"><strong> {{ $message }}</strong></span>@enderror
                                            {{-- wire:model="MobileN03" --}}
                                        </div>
                                    </div>
                                    <div class="row d-flex">
                                        <div class="form-group mb-4 col-lg-8 col-sm-12 flex-md-shrink-0">
                                            <label for="signup-email">  {{ __('Email address') }}</label>
                                            <input class="form-control form-control-lg @error('email') is-invalid @enderror" id="signup-email" placeholder="{{__('enter valid email address')}}" type="email" name="email" >
                                            @error('email')<span class="invalid-feedback" role="alert"><strong> {{ $message }}</strong></span>@enderror
                                            {{-- wire:model="email" --}}
                                        </div>
                                        <div class="form-group mb-4 col-lg-4 col-sm-12">
                                            <label for="nationalcardno">{{ __('National ID Number') }} </label>
                                            <input
                                                class="form-control form-control-lg @error('nationalcardno') is-invalid @enderror"
                                                id="nationalcardno" inputmode="numeric" maxlength="14" minlength="14"
                                                name="nationalcardno" onkeypress="return (event.charCode == 8 || event.charCode == 0 || event.charCode == 13) ? null : event.charCode >= 48 && event.charCode <= 57" pattern="[0-9]*" placeholder="{{ __('Enter your National ID Number') }}"
                                                tabindex="3" type="tel" value="{{ old('nationalcardno') }}"
                                            />
                                            @error('nationalcardno')<span class="invalid-feedback" role="alert"><strong> {{ $message }}</strong></span>@enderror
                                            {{-- wire:model="nationalcardno" --}}
                                        </div>
                                        <div class="form-group col-lg-8 col-sm-12 flex-md-shrink-0">
                                            <label for="residentialAddress"> {{ __('Residential Address') }}</label>
                                            <textarea class="form-control" id="residentialAddress" name="ResidentialAddress"
                                                placeholder="Required example textarea" required>
                                            </textarea>
                                            @error('ResidentialAddress')<span class="invalid-feedback" role="alert"><strong> {{ $message }}</strong></span>@enderror
                                            {{-- text="{{ old('ResidentialAddress') }}" --}}
                                            {{-- wire:model="ResidentialAddress" --}}
                                        </div>
                                        <div class="form-group col-lg-6 col-sm-12 flex-md-shrink-0 mt-3">
                                            <label for="DOB">{{ __('DOB') }}</label>
                                            <div class="input-group" id="DOB">
                                                <input class="form-control " data-toggle="datepicker" name="DOB" type="text"
                                                    value="{{ old('DOB') }}">
                                                <span class="input-group-addon input-group-append border-left">
                                                    <span class="fas fa-calendar input-group-text">
                                                    </span>
                                                </span>
                                                @error('DOB')<span class="invalid-feedback" role="alert"><strong> {{ $message }}</strong></span>@enderror
                                                <input type="hidden" name="selectDob" value="" id="selectDob">
                                                {{-- wire:model='dobpoicked' --}}
                                            </div>
                                        </div>
                                        <div class="form-group col-lg-6 col-sm-12 flex-md-shrink-0 mt-3">
                                            <label for="Gender">{{ __('Gender') }}</label>
                                            <div class="input-group" id="gender">
                                                  <label for=""></label>
                                                  <select  class="form-control" name="gender">
                                                      <option value="" selected>{{ __('Gender') }}</option>
                                                      <option value="1">{{ __('Male') }}</option>
                                                      <option value="2">{{ __('Female') }}</option>
                                                  </select>
                                                  @error('gender')<span class="invalid-feedback" role="alert"><strong> {{ $message }}</strong></span>@enderror
                                                  {{-- wire:model='gender' --}}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endif
                        {{-- Step 2 --}}
                        {{-- @if ($currentStage==2) --}}
                            <div class="col-11 mx-auto form-section">
                                <div class="row">
                                    <div class="form-group col-lg-6 col-sm-12 ">
                                        <label for="IdCard"> {{ __('Upload Identiity card')}}</label>
                                        <input class="form-control" name="IdCard" type="file" value="{{ old('IdCard') }}" >
                                        @error('IdCard')<span class="invalid-feedback" role="alert"><strong> {{ $message }}</strong></span>@enderror     
                                        {{-- wire:model="IdCard"                            --}}
                                    </div>
                                    <div class="form-group col-lg-6 col-sm-12 ">
                                        <label for="LegalPapersUploaded">{{ __('Work Peermit Legal Document') }}</label>
                                        <input class="form-control" name="LegalPapersUploaded" type="file" value="{{ old('LegalPapersUploaded') }}"
                                           />
                                        @error('LegalPapersUploaded')<span class="invalid-feedback" role="alert"><strong> {{ $message }}</strong></span>@enderror
                                        {{-- wire:model="LegalPapersUploaded" --}}
                                    </div>
                                    <div class="form-group col-lg-6 col-sm-12 ">
                                        <label for="OtherDocsHandPrint">{{ __('Other Document') }}</label>
                                        <input class="form-control" name="OtherDocsHandPrint" type="file" value="{{ old('OtherDocsHandPrint') }}"
                                           />
                                        <span class="invalid-feedback">
                                            @error('OtherDocsHandPrint'){{ $message }}@enderror
                                        </span>  
                                        {{-- wire:model="OtherDocsHandPrint"                                  --}}
                                    </div>
                                    <div class="form-group col-lg-6 col-sm-12 ">
                                        <label for="profilePhoto"> {{ __('Profile Picture') }}</label>
                                        <input class="form-control" name="profilePhoto" type="file" value="{{ old('profilePhoto') }}"
                                            accept="image/*" />
                                        <span class="invalid-feedback">
                                            @error('profilePhoto'){{ $message }}@enderror
                                        </span>   
                                        {{-- wire:model="profilePhoto"  --}}
                                    </div>
                                </div>
                            </div>
                        {{-- @endif --}}
                        {{-- Step 3 --}}
                        {{-- @if ($currentStage==3) --}}
                            <div class="col-11 mx-auto form-section">
                                <div class="row">
                                    <div class="form-group col-lg-6 mx-auto col-sm-12 ">
                                        <label for="username"> {{ __('User Name') }}</label>
                                        <input class="form-control form-control-lg" name="username" placeholder="username" type="text"
                                            value="{{ old('username')}}">
                                        @error('username')<span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>@enderror
                                    </div>
                                    {{-- wire:model="username" --}}
                                </div>
                                <div class="row">
                                    <div class="form-group col-lg-6 mx-auto col-sm-12 ">
                                        <label for="password">{{ __('Password') }}</label>
                                        <input class="form-control form-control-lg" name="password" placeholder="password" type="password"
                                            value="{{ old('password')}}">
                                        @error('password')<span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>@enderror
                                    {{-- wire:model="password" --}}
                                    </div>
                                    <div class="form-group col-lg-6 mx-auto col-sm-12 ">
                                        <label for="confirm_password"> {{ __('Comfirm Password') }}</label>
                                        <input class="form-control form-control-lg" name="confirm_password" placeholder="confirm password"
                                            type="password" value="{{ old('confirm_password')}}">
                                        @error('confirm_password')<span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>@enderror
                                        {{-- wire:model="confirm_password" --}}
                                    </div>
                                </div>
                            </div>
                        {{-- @endif --}}
                    </div>
                    <div class="col-lg-8 col-sm-12 mx-auto">
                        <div class="row">
                            {{-- @if($currentStage >1 && $currentStage <=3) --}}
                            <div class="col-lg-6 mx-auto form-navigation">
                                <div class="form-group mb-0 mr-auto float-right">
                                    <button type="button" class="btn btn-outline-primary btn-radius mb-4 previous"><span>Back</span> 
                                        <i class="fas fa-angle-double-right ml-2"></i>
                                    </button>
                                    {{-- wire:click.prevent='PreviousBtnt' --}}
                                </div>
                        </div>
                        {{-- @endif --}}
                        {{-- @if($currentStage ==1 || $currentStage ==2) --}}
                        <div class="col-lg-6 mx-auto">
                            <div class="form-group mb-0 mr-auto float-right form-navigation">
                                <button type="button" class="btn btn-outline-primary btn-radius mb-4 next step1-form"> <span>Continue</span>
                                    <i class="fas fa-angle-double-right ml-2"></i>
                                </button>
                                    {{-- wire:click.prevent='ContinueNext' --}}
                            </div>
                        </div>
                        {{-- @endif --}}
                        {{-- @if($currentStage ==3) --}}
                        <div class="col-lg-6 mx-auto form-navigation">
                            <div class="form-group mb-0 mr-auto float-right form-navigation">
                                <button type="submit" class="btn btn-outline-primary btn-radius mb-4 submit final">Register
                                    <i class="fas fa-angle-double-right ml-2"></i></button>
                            </div>
                        </div>
                        {{-- @endif --}}
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>