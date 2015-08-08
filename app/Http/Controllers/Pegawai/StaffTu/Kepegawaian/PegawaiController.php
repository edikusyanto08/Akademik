<?php

namespace Akademik\Http\Controllers\Pegawai\StaffTu\Kepegawaian;

use Akademik\Http\Requests\PegawaiRequest;
use Akademik\Http\Controllers\Controller;
use Akademik\Pegawai;
use Akademik\User;

class PegawaiController  extends Controller
{
    public function __construct()
    {
        parent::__construct('stafftu.kepegawaian.pegawai', new Pegawai(), 'Data Pegawai');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(User $user, PegawaiRequest $r)
    {
        $user->username = $r->input('username');
        $user->password = $r->input('password');
        $user->as = 'pegawai';
        if($user->save()){
            $data = $r->only([
                'user_id',
                'nama',
                'gender',
                'nip',
                'tempat_lahir',
                'tanggal_lahir',
                'status_kepegawaian',
                'jenis_ptk',
                'pengawas_bidang_studi',
                'agama',
                'nama_ibu_kandung',
                'status_perkawinan',
                'npwp',
                'kewarganegaraan'
                
                
                ]);
            if ($pegawai = $user->pegawai()->create($data)) {
                $data = $r->only([
                    'pegawai_id',
                    'jalan',
                    'gang',
                    'perumahan',
                    'blok',
                    'no',
                    'rt',
                    'rw',
                    'kelurahan',
                    'kecamatan',
                    'kode_pos'
                    
                    ]);
                if($pegawai->alamat()->create($data)){
                    return $this->routeAndSuccess('store');    
                }
                return $this->routeBackWithError('store');
            }
            return $this->routeBackWithError('store');
        }
        return $this->routeBackWithError('store');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param int $id
     *
     * @return Response
     */
    public function update(Pegawai $model, PegawaiRequest $r)
    {
        $user->username = $r->input('username');
        $user->password = $r->input('password');
        $user->as = 'pegawai';
        if($user->save()){
            $data = $r->only([
                'user_id',
                'nama',
                'gender',
                'nip',
                'tempat_lahir',
                'tanggal_lahir',
                'status_kepegawaian',
                'jenis_ptk',
                'pengawas_bidang_studi',
                'agama',
                'nama_ibu_kandung',
                'status_perkawinan',
                'npwp',
                'kewarganegaraan'
                
                
                ]);
            if ($pegawai = $user->pegawai()->create($data)) {
                $data = $r->only([
                    'pegawai_id',
                    'jalan',
                    'gang',
                    'perumahan',
                    'blok',
                    'no',
                    'rt',
                    'rw',
                    'kelurahan',
                    'kecamatan',
                    'kode_pos'
                    
                    ]);
                if($pegawai->alamat()->create($data)){
                    return $this->routeAndSuccess('update');    
                }
                return $this->routeBackWithError('update');
            }
            return $this->routeBackWithError('update');
        }
        return $this->routeBackWithError('update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     *
     * @return Response
     */
    public function destroy(Pegawai $model)
    {
        if ($model->delete()) {
            return $this->routeAndSuccess('destroy');
        }
        return $this->routeBackWithError('destroy');
    }
}
