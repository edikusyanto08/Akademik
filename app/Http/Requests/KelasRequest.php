<?php

namespace Akademik\Http\Requests;

use Akademik\Http\Requests\Request;
use Auth;
use Akademik\RoleUserChecker;

class KelasRequest extends Request
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
            'label'=>'required|min:1|max:3'
        ];
    }
    public function messages()
    {
        return [
            'label.required'=> 'Nama Kelas Tidak Boleh Kosong',
            'label.min'=> 'Nama kelas harus lebih dari 1 karakter',
            'label.max'=> ' Nama kelas tidak boleh melebihi 3 karakter',
        ];
    }
}
