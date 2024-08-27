<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SiswaRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'nama' => 'required|string|max:255',
            'alamat' => 'required|string|max:500',
            'jenis_kelamin' => 'required|in:Laki-laki,Perempuan',
            'email' => 'required|email|unique:siswas,email,' . ($this->route('siswa') ? $this->route('siswa')->id : ''),
            'kelas' => 'required|string|max:100',
            'no_telp' => 'required|digits_between:10,15', 
        ];
    }
}
