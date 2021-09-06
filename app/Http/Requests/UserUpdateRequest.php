<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserUpdateRequest extends FormRequest
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
            'Firstname' => ['required', 'string', 'max:20'],
            'Lastname' => ['required', 'string', 'max:20'],
            'Othername' => ['string', 'max:20'],
            'department_id' => ['integer', 'exists:departments,id'],
            'MobileN01' => ['required', 'string', 'max:11'],
            'MobileN02' => ['required', 'string', 'max:11'],
            'MobileN03' => ['required', 'string', 'max:11'],
            'ProfilePhoto' => ['string'],
            'ResidentialAddress' => ['required', 'string'],
            'City' => ['required', 'string'],
            'DOB' => ['required', 'date'],
            'email' => ['required', 'email', 'unique:users,email'],
            'email_verified_at' => ['required'],
            'password' => ['required', 'password'],
        ];
    }
}
