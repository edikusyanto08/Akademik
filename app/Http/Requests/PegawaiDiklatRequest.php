<?php

namespace Akademik\Http\Requests;

use Akademik\Http\Requests\Request;
use Auth;

class PegawaiDiklatRequest extends Request
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
            'pegawai_id'=>'required',
            'nama'=>'required',
            'penyelenggara'=>'required',
            'tempat'=>'required',
            'tahun'=>'required|min:4|max:4',
            'lama'=>'required'
            
        ];
    }

    public function messages()
    {
        return [
            'pegawai_id.required'=>'field nama pegawai tidak boleh kosong',
            'nama.required'=>'field nama diklat tidak boleh kosong',
            'penyelenggara.required'=>'field penyelenggara tidak boleh kosong',
            'tempat.required'=>'field tempat tidak boleh kosong',
            'tahun.min'=>'field tahun  tidak boleh kurang dari 4 karakter',
            'tahun.max'=>'field tahun tidak boleh lebih dari 4 karakter',
            'tahun.required'=>'field tahun tidak boleh kosong',
            'lama.required'=>'field lama tidak boleh kosong'
            

        ];
    }
}
