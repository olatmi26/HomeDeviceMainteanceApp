<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StockStoreRequest extends FormRequest
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
            'category_id' => ['integer', 'exists:categories,id'],
            'partName' => ['required', 'string'],
            'UnitCost' => ['integer'],
            'Maker' => ['required', 'string'],
            'ModelNo' => ['required', 'string'],
            'Type' => ['string'],
            'QtyInstock' => ['integer'],
        ];
    }
}
