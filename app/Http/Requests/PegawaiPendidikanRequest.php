<?php

namespace Akademik\Http\Requests;

use Akademik\Http\Requests\Request;
use Auth;

class PegawaiPendidikanRequest extends Request
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
            'pegawai_id'=>'required',
            'akta_id'=>'required',
            'ijazah_id'=>'required',
            'tahun_lulus'=>'required|min:4|max:4',
            'nomor_ijazah'=>'required',
            'jurusan'=>'required',
            'nama_instansi_pendidikan'=>'required'

        ];
    }
    public function messages()
    {
        return [
            'pegawai_id.required'=>'field nama pegawai tidak boleh kosong',
            'akta_id.required'=>'field akta tidak boleh kosong',
            'ijazah_id.required'=>'field ijazah tidak boleh kosong',
            'tahun_lulus.required'=>'field tahun lulus tidak boleh kosong',
            'tahun_lulus.min'=>'field tahun lulus tidak boleh kurang dari 4 karakter',
            'tahun_lulus.max'=>'field tahun lulus tidak boleh lebih dari 4 karakter',
            'nomor_ijazah.required'=>'field nomor ijazah tidak boleh kosong',
            'jurusan.required'=>'field jurusan tidak boleh kosong',
            'nama_instansi_pendidikan.required'=>'field nama perguruan tinggi tidak boleh kosong'

        ];
    }
}
