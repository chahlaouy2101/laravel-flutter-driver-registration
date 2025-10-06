<?php
namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class GeneralInfoRequest extends FormRequest
{
    public function rules()
    {
        return [
            'name' => 'required|string|min:3|max:25',
            'gender' => 'required|in:Male,Female',
            'identity' => 'required|digits:10|unique:users,identity',
            'email' => 'required|email|unique:users,email',
            'phone' => 'required|string|unique:users,phone',
            'birth_date' => 'required|date|before:2007-01-01',
            'password' => 'required|string|min:6',
        ];
    }
}