<?php

namespace Akademik\Http\Requests;

use Akademik\Http\Requests\Request;
use Auth;

class PegawaiMasaKerjaRequest extends Request
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
            'jumlah_tahun_sk_terakhir'=>'required|min:4|max:4',
            'jumlah_bulan_sk_terakhir'=>'required|min:4|max:4',
            'jumlah_tahun_mk_terakhir'=>'required|min:4|max:4',
            'jumlah_bulan_mk_terakhir'=>'required|min:4|max:4',
            
        ];
    }

    public function messages()
    {
        return [
            'pegawai_id.required'=>'field Id Pegawai tidak boleh kosong',
            'jumlah_tahun_sk_terakhir.required'=>'field jumlah tahun SK terakhir tidak boleh kosong',
            'jumlah_tahun_sk_terakhir.min'=>'field jumlah tahun SK terakhir tidak boleh kurang dari 4 karakter',
            'jumlah_tahun_sk_terakhir.max'=>'field jumlah tahun SK terakhir tidak boleh lebih dari 4 karakter',
            'jumlah_bulan_sk_terakhir.required'=>'field jumlah bulan sk terakhir tidak boleh kosong',
            'jumlah_bulan_sk_terakhir.min'=>'field jumlah bulan sk terakhir tidak boleh kurang dari 4 karakter',
            'jumlah_bulan_sk_terakhir.max'=>'field jumlah bulan sk terakhir tidak boleh kurang dari 4 karakter',
            'jumlah_tahun_mk_terakhir.required'=>'field jumlah tahun mk terakhir tidak boleh kosong',
            'jumlah_tahun_mk_terakhir.min'=>'field jumlah tahun mk terakhir tidak boleh kurang dari 4 karakter',
            'jumlah_tahun_mk_terakhir.max'=>'field jumlah tahun mk terakhir tidak boleh lebih dari 4 karakter',
            'jumlah_bulan_mk_terakhir.required'=>'field bulan mk terakhir tidak boleh kosong',
            'jumlah_bulan_mk_terakhir.min'=>'field bulan mk terakhir tidak boleh kurang dari 4 karakter',
            'jumlah_bulan_mk_terakhir.max'=>'field bulan mk terakhir tidak boleh lebih dari 4 karakter',
            
        ];
    }
}
