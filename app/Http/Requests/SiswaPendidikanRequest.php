<?php

namespace Akademik\Http\Requests;

use Akademik\Http\Requests\Request;
use Auth;

class SiswaPendidikanRequest extends Request
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
            'siswa_id'=>'required',
            'lulusan_dari'=>'required',
            'tanggal_sttb'=>'required',
            'no_sttb'=>'required',
            'lama_belajar'=>'required',
            'pindahan_dari'=>'required',
            'jurusan_id'=>'required',
            'kelas_id'=>'required',
            'tanggal_masuk'=>'required'
            
        ];
    }

    public function messages(){
        return [



        'siswa_id.required'=>'field nama siswa tidak boleh kosong',
        'lulusan_dari.required'=>'field lulusan_dari tidak boleh kosong',
        'tanggal_sttb.required'=>'field tanggal sttb  tidak boleh kosong',
        'no_sttb.required'=>'field nomor sttb tidak boleh kosong',
        'lama_belajar.required'=>'field lama belajar tidak boleh kosong',
        'pindahan_dari.required'=>'field pindahan dari tidak boleh kosong',
        'jurusan_id.required'=>'field jurusan  tidak boleh kosong',
        'kelas_id.required'=>'field jurusan tidak boleh kosong',
        'tanggal_masuk.required'=>'field tanggal masuk tidak boleh kosong'
        ];

    }
}
