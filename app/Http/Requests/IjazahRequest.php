<?php

namespace Akademik\Http\Requests;

use Akademik\Http\Requests\Request;
use Auth;

class IjazahRequest extends Request
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
        'label'=>'required|min:2'
        ];
    }

    public function messages(){
        return
        [
            'label.required'=>'Field ijazah tidak boleh kosong',
            'label.min'=>'Field ijazah tidak boleh kurang dari 2 karakter'
        ];
    }
}
