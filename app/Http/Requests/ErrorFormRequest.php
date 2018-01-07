<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ErrorFormRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
        'nama_barang' =>  'required',
        'harga_barang' => 'required|numeric',
        'harga' => 'required|numeric',
        'name' => 'required',
        'email' => 'required',
        'nama' => 'required',
        'alamat' => 'required',
        'jumlah' => 'required|numeric',
        'no_telepon' => 'required|numeric'
        ];
    }
    public function messages()
    {
        return [
            'nama_barang.required' => 'Nama Barang Tidak boleh Kosong!',
            'harga_barang.numeric' => 'Harga Barang Tidak bisa Pakai Huruf',
            'harga' => 'Harga Tidak Bisa Pakai Huruf',
            'name' => 'Name Harus Diisi',
            'email' => 'email Tidak Boleh Kosong',
            'nama' => 'Nama/Jenis Harus Diisi',
            'alamat' => 'Alamat Harus Diisi',
            'jumlah' => 'jumlah Barang Tidak Bisa Pakai Huruf',
            'no_telepon' => 'no_telepon Tidak Bisa Pakai Huruf',
        ];
    }
}
