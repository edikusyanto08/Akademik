<?php

namespace Akademik\Http\Requests;

use Akademik\Http\Requests\Request;
use Auth;

class PerkembanganSiswaRequest extends Request
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
             return true;
        }
    
       
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
            
            'tanggal_lulus'=>'required',
            'no_sttb'=>'required'
            
        ];
    }
     public function messages()
    {
        return [
            'siswa_id.required'=>'field id siswa tidak boleh kosong',
            'tanggal_lulus.required'=>'field tanggal lulus tidak boleh kosong',
            'no_sttb.required'=>'field nomor sttb tidak boleh kosong'
            
        ];
    }
}
