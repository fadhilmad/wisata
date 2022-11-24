<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateDestinasiRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'kategori_id' => 'required',
            'nama' => 'required',
            'deskripsi' => 'required',
            'lokasi' => 'required',
            'gambar' => 'required|file|max:2048'
        ];
    }
}
