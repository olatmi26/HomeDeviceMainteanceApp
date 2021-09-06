<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class OrderUpdateRequest extends FormRequest
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
            'customer_id' => ['integer', 'exists:customers,id'],
            'OrderTrackN0' => ['required', 'string', 'max:6', 'unique:orders,OrderTrackN0'],
            'stock_id' => ['integer', 'exists:stocks,id'],
            'DateOrders' => ['required'],
            'isOrderService' => [''],
        ];
    }
}
