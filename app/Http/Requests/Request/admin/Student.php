<?php

namespace App\Http\Requests\Request\admin;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class Student extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'nama' => 'required|string|max:255', 'unique:fazril_crud,nama,except,id',
            'nis' => 'required|numeric',
            'email' => 'required|email|unique:students',
            'tempat_lahir' => 'required|string|max:255',
            'tanggal_lahir' => 'required|date',
            'jenis_kelamin' => ['required', Rule::in(['Laki-laki', 'Perempuan'])],
            'angkatan' => 'required|numeric',
        ];
    }
}
