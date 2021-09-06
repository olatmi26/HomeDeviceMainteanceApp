<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StockUpdateRequest extends FormRequest
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
            'partTrackN0' => ['required', 'string', 'unique:stocks,partTrackN0'],
            'category_id' => ['integer', 'exists:categories,id'],
            'partName' => ['required', 'string'],
            'UnitCost' => ['integer'],
            'Maker' => ['required', 'string'],
            'ModelNo' => ['required', 'string'],
            'DateStock' => ['required'],
            'Type' => ['string'],
            'QtyInstock' => ['integer'],
            'Availability' => ['integer'],
            'status' => ['string'],
            'stockBy' => ['integer'],
        ];
    }
}
