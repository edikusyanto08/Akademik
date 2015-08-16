<?php

namespace Akademik\Http\Requests;

use Akademik\Http\Requests\Request;

class GuruMataPelajaranRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
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
            "guru_id"=>"required",
            'mata_pelajaran_id'=> 'required'
        ];
    }
    public function messages()
    {
         return [
            "guru_id" =>" Isian nama guru harus di isi",
            "mata_pelajaran_id" =>" Isian mata pelajaran harus di isi",
            ];
    }
}
