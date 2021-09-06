<?php

namespace App\Http\Requests\CompanyAssets;

use Illuminate\Foundation\Http\FormRequest;

class CarFuellingStoreRequest extends FormRequest
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
            'vehicle_id' => ['integer'],
            'FuelLiter' => ['integer'],
            'UnitCost' => ['integer'],
        ];
    }
}
