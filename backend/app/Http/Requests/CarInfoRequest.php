<?php
namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CarInfoRequest extends FormRequest
{
    public function rules()
    {
        return [
            'user_id' => 'required|exists:users,id',
            'brand' => 'required|string',
            'model' => 'required|string',
            'year' => 'required|integer',
            'plate_letter_right' => 'required|string',
            'plate_letter_middle' => 'required|string',
            'plate_letter_left' => 'required|string',
            'plate_number' => 'required|integer',
            'plate_type' => 'required|in:1,2,3',
            'sequence_number' => 'required|string|max:15',
            'seats' => 'required|integer|between:1,8',
            'car_category_status_id' => 'required|exists:car_categories,id',
            'image' => 'nullable|image',
        ];
    }
}