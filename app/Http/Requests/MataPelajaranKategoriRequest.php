<?php

namespace Akademik\Http\Requests;

use Akademik\Http\Requests\Request;
use Auth;
use Akademik\RoleUserChecker;

class MataPelajaranKategoriRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
   public function authorize()
    {
        if (! Auth::guest()) {
            if (Auth::user()->role == 'pegawai' && RoleUserChecker::checkRole(Auth::user()->pegawai->tugas()->lists('role'), 'stafftu')) {
                return true;
            }
        }
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
            'label'=>'required|min:1',
            'huruf'=>'required|min:1|max:1',
        ];
    }
    public function messages()
    {
        return [
            'label.required' => 'Nama kategori harus di Isi',
            'label.min' => 'Nama kategori harusnya lebih dari 1 karakter',
            'huruf.required' => 'Bagian huruf harus di isi',
            'huruf.max' => 'Bagian huruf harusnya tidak lebih dari 1 karakter',
            'huruf.min' => 'Bagian huruf tidak boleh lebih dari 1 karakter',
        ];
    }
}
