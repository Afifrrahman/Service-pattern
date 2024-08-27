<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SiswaRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, 
     */
    public function rules(): array
    {
        return [
            'nama' => 'required|string|max:255',
            'alamat' => 'required|string',
            'jenis_kelamin' => 'required|in:Laki-laki,Perempuan',
            'email' => 'required|email|unique:siswas,email,' . ($this->route('siswa') ? $this->route('siswa')->id : ''),
            'kelas' => 'required|string|max:10',
            'nama' => 'required|string|max:255',
            'alamat' => 'required|string|max:500',
            'jenis_kelamin' => 'required|in:Laki-laki,Perempuan',
            'email' => 'required|email|max:255',
            'kelas' => 'required|string|max:100',
            'no_telp' => 'required|digits_between:10,15', 
        ];
    }
}
