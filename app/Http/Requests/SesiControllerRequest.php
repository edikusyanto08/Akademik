<?php

namespace Akademik\Http\Requests;

use Akademik\Http\Requests\Request;

class SesiControllerRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return \Auth::guest();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'password'=>'required',
            'username'=>'required'
        ];
    }
    /**
     * Ger the message after aply rules
     * @return array
     */
    public function messages()
    {
        return [
            'password.required'=>'Password tidak boleh kosong',
            'username.required'=>'Username tidak boleh kosong',
        ];
    }
}
