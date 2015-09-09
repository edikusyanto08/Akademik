<?php

namespace Akademik\Http\Requests;

use Akademik\Http\Requests\Request;
use Auth;

class SiswaKesehatanRequest extends Request
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
            'siswa_id'=>'required',
            'kebutuhan_khusus_id'=>'required',
            'golongan_darah'=>'required|min:1|max:2',
            'penyakit'=>'required',
            'berat'=>'required',
            'tinggi'=>'required'

        ];
    }
    public function messages()
    {
        return [
            'siswa_id.required'=>'field nama siswa harus diisi harus diisi',
            'kebutuhan_khusus_id.required'=>'field kebutuhan khusus harus diisi',
            'golongan_darah.required'=>'field golongan darah harus di isi',
            'golongan_darah.min'=>'field golongan darah tidak boleh kurang dari 1 karakter',
            'golongan_darah.max'=>'field golongan darah tidak boleh lebih dari 2 karakter',
            'penyakit.required'=>'field penyakit harus diisi',
            'berat.required'=>'field berat badan harus diisi',
            'tinggi.required'=>'field tinggi harus diisi'

        ];
    }
}
