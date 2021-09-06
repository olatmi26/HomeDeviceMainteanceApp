<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CustomerUpdateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'FirstName' => ['required', 'string', 'max:20'],
            'LastName' => ['required', 'string', 'max:20'],
            'OtherName' => ['string', 'max:25'],
            'PhoneNo' => ['required', 'string', 'max:11', 'unique:customers,PhoneNo'],
            'PhoneNo2' => ['string', 'max:11', 'unique:customers,PhoneNo2'],
            'ProfileImage' => ['string'],
            'email' => ['required', 'email', 'unique:customers,email'],
            'Address' => ['required', 'string'],
            'city_id' => ['integer'],
            'state_id' => ['integer'],
            'password' => ['required', 'password'],
            'CurrentGpsLocationLong' => ['numeric', 'between:-99.99999999,99.99999999'],
            'CurrentGpsLocationLat' => ['numeric', 'between:-99.99999999,99.99999999'],
            'CustomerStatus' => ['required'],
            'email_verified_at' => ['required'],
        ];
    }
}
