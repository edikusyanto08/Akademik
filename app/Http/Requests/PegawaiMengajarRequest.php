<?php

namespace Akademik\Http\Requests;

use Akademik\Http\Requests\Request;
use Auth;

class PegawaiMengajarRequest extends Request
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
            'pegawai_id'=>'required',
            'mata_pelajaran_id'=>'required',
            'jumlah_jam'=>'required'
            
        ];
    }

    public function messages()
    {
        return [
            'pegawai_id.required'=>'nama pegawai tidak boleh kosong',
            'mata_pelajaran_id'=>'nama mata pekajaran tidak boleh kosong',
            'jumlah_jam'=>'jumlah jam tidak boleh kosong'
            
        ];
    }
}
