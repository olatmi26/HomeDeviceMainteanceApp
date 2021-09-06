<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CustomerStoreRequest extends FormRequest
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
            'email' => ['required', 'email', 'unique:customers,email'],
            'Address' => ['required', 'string'],
            'password' => ['required', 'password'],
        ];
    }
}
