<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StudentRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true; 
    }

    public function rules(): array
    {
        return [
            'name' => 'required|string|max:255',
            'address' => 'required|string|max:500',
            'email' => 'required|email',
            'gendre' => 'required|in:male,female',
            'phone_number' => 'required|digits_between:10,15',
            'class_id' => 'required|exists:classes,id',
        ];
    }
}
