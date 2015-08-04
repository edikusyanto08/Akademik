<?php

namespace Akademik\Http\Requests;

use Akademik\Http\Requests\Request;
use Auth;
use RoleUserChecker;

class SpecialNeedRequest extends Request
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
               'label'=>'required|min:3'
           ];
       }
       public function messages()
       {
           return [
               'label.required'=> 'Nama Kebutuhan tidak boleh kosong',
               'label.min'=> 'Nama kebutuhan seharusnya lebih dari 3 karakter',
           ];
       }
}
