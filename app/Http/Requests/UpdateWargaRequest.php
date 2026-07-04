<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateWargaRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        $id = $this->route('warga');

        return [
            'nik' => 'required|digits:16|unique:wargas,nik,' . $id,
            'nama' => 'required|string|max:100',
            'alamat' => 'required|string',
            'no_hp' => 'nullable|string|max:15',
            'pekerjaan' => 'required|string|max:100',
            'penghasilan' => 'required|numeric|min:0',
        ];
    }

    public function messages(): array
    {
        return [
            'nik.required' => 'NIK wajib diisi.',
            'nik.unique' => 'NIK sudah digunakan.',
            'nama.required' => 'Nama wajib diisi.',
            'alamat.required' => 'Alamat wajib diisi.',
            'pekerjaan.required' => 'Pekerjaan wajib diisi.',
            'penghasilan.required' => 'Penghasilan wajib diisi.',
        ];
    }
}