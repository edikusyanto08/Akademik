<?php

namespace Akademik\Http\Requests;

use Akademik\Http\Requests\Request;
use Auth;
use Akademik\RoleUserChecker;

class DiscliplineCatagoryRequest extends Request
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
            'label'=>'required|min:1|max:1',
            'keterangan'=>'required|min:5'
        ];
    }
    public function messages()
    {
        return [
            'label.required' => 'Label disclipline catagory is required',
            'label.min' => 'Label disclipline catagory must be at least 1 character',
            'label.max' => 'Label disclipline may not be greater than 1 characters.',
            'keterangan.required' => 'Describe disclipline catagory is required',
            'keterangan.min' => 'Describe disclipline catagory must be at least 10 character',
        ];
    }
}
