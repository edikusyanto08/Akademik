<?php

namespace Akademik\Http\Requests;

use Akademik\Http\Requests\Request;
use RoleUserChecker;
use Auth;

class SchoolRequest extends Request
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
                'awal'=>'required|digits:4',
                'akhir'=>'required|digits:4'
            ];
        }
        public function messages()
        {
            return [
                'awal.required'=> 'Year Start is required',
                'akhir.required'=> 'Year End is required',
                'awal.digits'=> 'Year Start must be 4 digits.',
                'akhir.digits'=> 'Year End must be 4 digits.',
            ];
        }
}
