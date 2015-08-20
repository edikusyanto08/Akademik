<?php

namespace Akademik\Http\Requests;

use Akademik\Http\Requests\Request;
use Auth;
class RombelRequest extends Request
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
            'jurusan_id'=>'required',
            'tahun_ajaran_id'=>'required',
            'kelas_id'=>'required',
            'ruangan_id'=>'required'

        ];
    }
    public function messages()
    {
        return [
            'jurusan_id.required'=>'field jurusan tidak boleh kosong',
            'tahun_ajaran_id.required'=>'field tahun ajaran tidak boleh kosong',
            'kelas_id.required'=>'field kelas r=tidak boleh kosong',
            'ruangan_id.required'=>'field ruangan tidak boleh kosong'

        ];
    }
}
