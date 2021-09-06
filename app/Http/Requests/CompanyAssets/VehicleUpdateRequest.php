<?php

namespace App\Http\Requests\CompanyAssets;

use Illuminate\Foundation\Http\FormRequest;

class VehicleUpdateRequest extends FormRequest
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
            'name' => ['string'],
            'type' => ['required', 'string'],
            'Model' => ['required', 'string'],
            'YearMake' => ['required', 'date'],
            'YearPurchased' => ['required', 'date'],
            'ChassisN0' => ['required', 'string'],
            'AssignedDriver' => [''],
        ];
    }
}
