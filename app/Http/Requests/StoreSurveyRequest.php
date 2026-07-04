<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreSurveyRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'warga_id' => 'required|exists:wargas,id',
            'tanggal_survey' => 'required|date',
            'hasil' => 'required|string',
            'bukti' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ];
    }

    public function messages(): array
    {
        return [
            'warga_id.required' => 'Data warga wajib dipilih.',
            'tanggal_survey.required' => 'Tanggal survey wajib diisi.',
            'hasil.required' => 'Hasil survey wajib diisi.',
        ];
    }
}