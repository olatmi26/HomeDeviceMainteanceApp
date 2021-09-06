<?php

namespace App\Http\Requests\CompanyAssets;

use Illuminate\Foundation\Http\FormRequest;

class CarserviceUpdateRequest extends FormRequest
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
            'isCustomerCar' => [''],
            'customer_id' => ['integer', 'exists:customers,id'],
            'isCompanyCar' => [''],
            'partfault_id' => ['integer', 'exists:partfaults,id'],
            'fualtyCOmponentPicture' => ['string'],
            'RepairCost' => ['integer'],
            'TotalCost' => ['integer'],
            'ServiceBy' => [''],
            'DateService' => ['required'],
        ];
    }
}
