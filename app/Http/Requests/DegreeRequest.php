<?php

namespace Akademik\Http\Requests;

use Akademik\Http\Requests\Request;
use Auth;
use Akademik\RoleUserChecker;

class DegreeRequest extends Request
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
        return false;
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
            'label.required'=> 'Label Degree is required',
            'label.min'=> 'Label Degree must be at least 1 characters.',
            'label.max'=> 'Label Degree may not be greater than 3 characters.',
        ];
    }
}
