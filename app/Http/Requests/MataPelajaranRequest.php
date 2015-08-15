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
             'jurusan_id'=>'required',
             'kelas_id'=>'required'
             
        ];
    }
    public function messages()
    {
        return [
            'label.required' => 'Nama mata pelajaran harus di isi',
            'label.min' => 'Nama mata pelajaran harus lebih dari 5 karakter',
            'singkatan.required' => 'Singkatan harus di isi',
            'kategori_mata_pelajaran_id.required' => 'Kategori mata pelajaran harus di isi',
            'jurusan_id.required' => 'Jurusan harus di isi',
            'kelas_id.required' => 'kelas harus di isi'
        ];
    }
}
