<?php

namespace Akademik\Http\Requests;

use Akademik\Http\Requests\Request;
use Auth;
use RoleUserChecker;


class MataPelajaranRequest extends Request
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
             'label'=>'required|min:5',
             'singkatan'=>'required|min:3',
             'kategori_mata_pelajaran_id'=>'required',
             'program_id'=>'required',
             'kelas_id'=>'required'
             
        ];
    }
    public function messages()
    {
        return [
            'label.required' => 'Nama Mata Pelajaran Harus Di Isi',
            'label.min' => 'Nama Mata Harus Lebih Dari 5 Karakter',
            'singkatan.required' => 'Singkatan Harus Di Isi',
            'kategori_mata_pelajaran_id.required' => 'kategori_mata_pelajaran_id Harus Di Isi',
            'program_id.required' => 'program_id Harus Di Isi',
            'kelas_id.required' => 'kelas_id Harus Di Isi'
        ];
    }
}
