<?php
namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DocumentsRequest extends FormRequest
{
    public function rules()
    {
        return [
            'identity_document' => 'required|file',
            'car_license' => 'required|file',
            'car_application' => 'required|file',
        ];
    }
}