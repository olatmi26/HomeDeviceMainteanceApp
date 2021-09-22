<div>
    <div class="form-group col-lg-6 mx-auto col-sm-12 ">
        <label for="seccode">
            {{ __('Platform Security Code') }}
        </label>
        <input class="form-control form-control-lg @error('securitycode') is-invalid @enderror" id="cardno"
            inputmode="numeric" maxlength="4" minlength="4" name="securitycode"
            onkeypress="return (event.charCode == 8 || event.charCode == 0 || event.charCode == 13) ? null : event.charCode >= 48 && event.charCode <= 57"
            pattern="[0-9]*" placeholder="{{ __('Platform Security Code') }}" required="" tabindex="3" type="tel"
            value="{{ old('securitycode') }}" wire:model="securitycode" />
        @error('securitycode')
        <span class="invalid-feedback" role="alert">
            {{ $message }}
        </span>
        @enderror
    </div>
</div>