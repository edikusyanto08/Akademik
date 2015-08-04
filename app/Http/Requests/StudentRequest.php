<?php

namespace Akademik\Http\Requests;

use Akademik\Http\Requests\Request;

class StudentRequest extends Request
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
                        'nama'=>'required',
                        'gender'=>'required',
                        'nis'=>'required',
                        'nisn'=>'required',
                        'tempat_lahir'=>'required',
                        'tanggal_lahir'=>'required',
                        'nik'=>'required',
                        'agama'=>'required',
                        'no_skhun'=>'required',
        ];
    }
}
