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
                        'username'=>'required',
                        'password'=>'required|confirmed',
                        'nama'=>'required',
                        'gender'=>'required',
                        'nis'=>'required',
                        'nisn'=>'required',
                        'tempat_lahir'=>'required',
                        'tanggal_lahir'=>'required',
                        'nik'=>'required',
                        'agama'=>'required',    
                          
                        'urutan_saudara'=>'required',    
                            
                           
                        'jalan'=>'required',
                        'gang'=>'required',
                        'blok'=>'required',
                        'no'=>'required',
                        'rt'=>'required',
                        'rw'=>'required',
                        'kelurahan'=>'required',
                        'kecamatan'=>'required',
                        'kode_pos'=>'required',
                        'nama_ayah'=>'required',
                        'tahun_lahir_ayah'=>'required',
                        'pendidikan_terakhir_ayah'=>'required',
                        'pekerjaan_ayah'=>'required',
                        'penghasilan_ayah'=>'required',
                        'nama_ibu'=>'required',
                        'tahun_lahir_ibu'=>'required',
                        'pendidikan_terakhir_ibu'=>'required',
                        'pekerjaan_ibu'=>'required',
                        'penghasilan_ibu'=>'required',
        ];
    }
    public function messages()
    {
        return [
                        'username.required'=>'Kolom username tidak boleh kosong',
                        'password.required'=>'Kolom password  tidak boleh kosong',
                        'password.confirmed'=>'Password tidak sama',
                        'nama.required'=>'Kolom nama siswa tidak boleh kosong',
                        'gender.required'=>'Kolom jenis Kelamin siswa tidak boleh kosong',
                        'nis.required'=>'Kolom NIS tidak boleh Kosong',
                        'nisn.required'=>'Kolom NISN tidak boleh kosong',
                        'tempat_lahir.required'=>'Kolom tempat lahir siswa tidak boleh kosong',
                        'tanggal_lahir.required'=>'Kolom tanngal lahir siswa tidak boleh kosong',
                        'nik.required'=>'Kolom NIK siswa tidak boleh kosong',
                        'agama.required'=>'Kolom Agama siswa tidak boleh kosong',
                        
                        'urutan_saudara.required'=>'Kolom anak ke- tidak boleh kosong',
                        'jalan.required'=>'Kolom Jalan tidak boleh kosong',
                        'gang.required'=>'Kolom Gang tidak boleh kosong',
                        'blok.required'=>'Kolom Blok tidak boleh kosong',
                        'no.required'=>'Kolom nomor rumah tidak boleh kosong',
                        'rt.required'=>'Kolom nomor rt tidak boleh kosong',
                        'rw.required'=>'Kolom nomor rw tidak boleh kosong',
                        'kelurahan.required'=>'Kolom kelurahan tidak boleh kosong',
                        'kecamatan.required'=>'Kolom kecamatan tidak boleh kosong',
                        'kode_pos.required'=>'Kolom kode pos tidak boleh kosong',
                        'nama_ayah.required'=>'Kolom nama ayah tidak boleh kosong',
                        'tahun_lahir_ayah.required'=>'Kolom tahun lahir ayah tidak boleh kosong',
                        'pendidikan_terakhir_ayah.required'=>'Kolom pendidikan ayah tidak boleh kosong',
                        'pekerjaan_ayah.required'=>'Kolom pekerjaan tidak boleh kosong',
                        'penghasilan_ayah.required'=>'Kolom penghasilan tidak boleh kosong',
                        'nama_ibu.required'=>'Kolom nama ibu tidak boleh kosong',
                        'tahun_lahir_ibu.required'=>'Kolom tahun lahir tidak boleh kosong',
                        'pendidikan_terakhir_ibu.required'=>'Kolom pendidikan ibu tidak boleh kosong',
                        'pekerjaan_ibu.required'=>'Kolom pekerjaan ibu tidak boleh kosong',
                        'penghasilan_ibu.required'=>'Kolom penghasilan ibu tidak boleh kosong',
        ];
    }
}
