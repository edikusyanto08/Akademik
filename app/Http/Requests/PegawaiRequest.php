<?php

namespace Akademik\Http\Requests;

use Akademik\Http\Requests\Request;
use Auth;
use Akademik\RoleUserChecker;

class  extends Request
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
            'nama'                  =>'required',
            'username'              =>'required',
            'password'              =>'required|confirmed',
            'gender'                =>'required',
            'nip'                   =>'required|max:12',
            'tempat_lahir'          =>'required',
            'tanggal_lahir'         =>'required',
            'status_kepegawaian'    =>'required',
            'jenis_ptk'             =>'required',
            // 'pengawas_bidang_studi' =>'required',
            'agama'                 =>'required',
            
            'nama_ibu_kandung'      =>'required',
            'status_perkawinan'     =>'required',
            'npwp'                  =>'required',
            
            'jalan'                 =>'required',
            'gang'                  =>'required',
            'perumahan'             =>'required',
            'blok'                  =>'required',
            'no'                    =>'required',
            'rt'                    =>'required',
            'rw'                    =>'required',
            'kelurahan'             =>'required',
            'kecamatan'             =>'required',
            'kode_pos'              =>'required'    
        ];
    }
    public function messages()
    {
        return [
            'label.required'=> 'Label Classroom is required',
            'label.min'=> 'Label Classroom must be at least 3 characters.',
        ];
    }
}
