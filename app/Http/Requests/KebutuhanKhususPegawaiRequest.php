<?php

namespace Akademik\Http\Requests;

use Akademik\Http\Requests\Request;
use Auth;

class KebutuhanKhususPegawaiRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
         if (Auth::check()) {
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
            'pegawai_id'=>'required',
            'kebutuhan_khusus_id'
        ];
    }
     public function messages()
    {
        return [
            'pegawai_id.required'=>'pilihan pegawai tidak boleh kosong',
            'kebutuhan_khusus_id.required'=>'kebutuhan khusus tidak boleh kosong'
        ];
    }

}
