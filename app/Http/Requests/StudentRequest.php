<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StudentRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true; // Atur sesuai kebutuhan otorisasi
    }

    public function rules(): array
    {
        return [
            'name' => 'required|string|max:255',
            'address' => 'required|string|max:500',
            'gendre' => 'required|in:male,female', // Sesuaikan dengan field gender yang ada
            'email' => 'required|email|unique:students,email,' . ($this->student ? $this->student->id : ''),
            'class' => 'required|string|max:100',
            'phone_number' => 'required|digits_between:10,15',
        ];
    }
}
