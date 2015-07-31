<?php

namespace Akademik\Http\Controllers\StaffTu\Student;

use Illuminate\Http\Request;
use Akademik\Http\Requests\StudentRequest;
use Akademik\Http\Controllers\Controller;
use Akademik\Siswa;
use Akademik\User;

class StudentController extends Controller
{
    public function __construct()
    {
        parent::__construct('stafftu.siswa.siswa', new Siswa(), 'Siswa');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(User $u, StudentRequest $r )
    {
        $u->username = $r->input('username');
        $u->password = $r->input('password');
        $u->as = 'siswa';
        if ($user  = $u->save()) {
            $data = $r->only(['nama','gender','nis','nisn','tempat_lahir','tanggal_lahir','nik','agama','penerima_kps','no_kps','no_skhun']);
            // return $u;
            if($u->siswa()->create($data)){
                $siswa = $u->siswa->first();
                $data = $r->only(['jalan','gang','blok','no','rt','rw','kelurahan','kecamatan','kode_pos']);
                if($siswa->alamat()->create($data)){
                   $data = [
                        'nama'=>$r->input('nama_ayah'),
                        'tahun_lahir'=>$r->input('tahun_lahir_ayah'),
                        'pendidikan_terakhir'=>$r->input('pendidikan_terakhir_ayah'),
                        'penghasilan'=>$r->input('penghasilan_ayah')
                    ];
                    if($siswa->ayah()->create($data)){
                        $data = [
                                                'nama'=>$r->input('nama_ibu'),
                                                'tahun_lahir'=>$r->input('tahun_lahir_ibu'),
                                                'pendidikan_terakhir'=>$r->input('pendidikan_terakhir_ibu'),
                                                'penghasilan'=>$r->input('penghasilan_ibu')
                        ];
                        if($siswa->ibu()->create($data)){
                                if( ! is_null( $r->input('nama_wali' ) ) && ! empty( $r->input('nama_wali') ) ){
                                    $data = [
                                                            'nama'=>$r->input('nama_wali'),
                                                            'tahun_lahir'=>$r->input('tahun_lahir_wali'),
                                                            'pendidikan_terakhir'=>$r->input('pendidikan_terakhir_wali'),
                                                            'penghasilan'=>$r->input('penghasilan_wali')
                                    ];
                                    if($siswa->wali()->fill($data)->save()){
                                        return $this->routeAndSuccess('store');
                                    }
                                }
                                return $this->routeAndSuccess('store');
                        }
                    }
                }
            }
        }
        return $this->routeBackWithError('store');
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update(User $u , StudentRequest $r)
    {
        if ($siswa->fill($r->all())->save()) {
                    return $this->routeAndSuccess('update');
                }
        return $this->routeBackWithError('update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy(Siswa $siswa)
    {
        if ($siswa->destroy()) {
            return $this->routeAndSuccess('update');
        }
        return $this->routeBackWithError('update');
    }
}
