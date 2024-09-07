<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
use LaravelEasyRepository\Traits\JsonValidateResponse;

class ProductRequest extends FormRequest
{
    use JsonValidateResponse;
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'nama_produk' => [
                'required',
            ],
            'harga_produk' => [
                'required',
            ],
            'tgl_produksi' => [
                'required',
            ],
            'tgl_expired' => [
                'required',
            ],
        ];
    }

    public function messages()
    {
        return [
            'nama_produk.required' => 'Nama produk wajib diisi.',
            'harga_produk.required' => 'Harga produk wajib diisi.',
            'tgl_produksi.required' => 'Tanggal produksi wajib diisi.',
            'tgl_expired.required' => 'Tanggal expired wajib diisi.',
        ];
    }
}
