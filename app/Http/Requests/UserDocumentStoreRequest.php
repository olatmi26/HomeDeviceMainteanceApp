<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserDocumentStoreRequest extends FormRequest
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
            'IdCard' => ['string'],
            'PassportDocument' => ['string'],
            'LegalPapersUploaded' => ['string'],
            'OtherDocsHandPrint' => ['string'],
        ];
    }
}
