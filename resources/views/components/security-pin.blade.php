<div class="row animate__animated animate__backInRight">
    <div class="form-group col-lg-3 mx-auto col-sm-12 ">
        <label for="seccode">
            {{ __('Platform Security Access Pin') }}
        </label>
        <input class="form-control form-control-lg seccode @error('securitycode') is-invalid @enderror"
            inputmode="numeric" maxlength="4" minlength="4" name="securitycode"
            onkeypress="return (event.charCode == 8 || event.charCode == 0 || event.charCode == 13) ? null : event.charCode >= 48 && event.charCode <= 57"
            pattern="[0-9]*" placeholder="{{ __('Platform Security Code') }}" required="" tabindex="3" type="tel" value="{{ old('securitycode') }}" />
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
        <input class="form-control form-control-lg  seccode @error('confirmed_securitycode') is-invalid @enderror" inputmode="numeric" maxlength="4" minlength="4" name="confirmed_securitycode"
            onkeypress="return (event.charCode == 8 || event.charCode == 0 || event.charCode == 13) ? null : event.charCode >= 48 && event.charCode <= 57"
            pattern="[0-9]*" placeholder="{{ __('Platform Security Code') }}" required="" tabindex="3" type="tel" value="{{ old('confirmed_securitycode') }}" />
        @error('confirmed_securitycode')
        <span class="invalid-feedback" role="alert">
            {{ $message }}
        </span>
        @enderror
    </div>
</div>