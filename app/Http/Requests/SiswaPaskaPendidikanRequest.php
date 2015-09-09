<?php

namespace Akademik\Http\Requests;

use Akademik\Http\Requests\Request;
use Auth;
class SiswaPaskaPendidikanRequest extends Request
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
            'pendidikan'=>'required',
            'nama_tempat_kerja'=>'required',
            'tanggal_kerja'=>'required',
            'penghasilan'=>'required'
            
        ];
    }
}
