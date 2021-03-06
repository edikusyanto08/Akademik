<?php

namespace Akademik\Http\Requests;

use Akademik\Http\Requests\Request;
use Auth;
use RoleUserChecker;
class JurusanRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
   public function authorize()
    {
        return true;
        /*if (! Auth::guest()) {
            if (Auth::user()->role == 'pegawai' && RoleUserChecker::checkRole(Auth::user()->pegawai->tugas()->lists('role'), 'stafftu')) {
                return true;
            }
        }
        return false;*/
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'label'=>'required|min:3'
        ];
    }
    public function messages()
    {
        return [
            'label.required'=> 'Nama jurusan dibutuhkan',
            'label.min'=> 'Nama jurusan harus lebih dari 3 karakter',
        ];
    }
}
