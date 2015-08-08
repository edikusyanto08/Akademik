<?php

namespace Akademik\Http\Controllers\Pegawai\StaffTu\Pengaturan;

use Illuminate\Http\Request;

use Akademik\Http\Requests\GolonganRequest;
use Akademik\Http\Controllers\Controller;
use Akademik\GolonganPegawai;

class GolonganController extends Controller
{

    public function __construct()
    {
        parent::__construct('stafftu.pengaturan.golongan', new GolonganPegawai(),'Golongan');
    }
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(GolonganPegawai $model,GolonganRequest $j)
    {
        if ($model->fill($j->all())->save()) {
            return $this->routeAndSuccess('store');
        }
        return $this->routebackWithError('store');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
   

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update(GolonganPegawai $model,GolonganRequest $j)
    {
        if ($model->fill($j->all())->save()) {
            return $this->routeAndSuccess('update');
        }
        return $this->routebackWithError('update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy(GolonganPegawai $model)
    {
        if ($model->delete()) {
            return $this->routeAndSuccess('delete');
        }
        return $this->routebackWithError('delete');
    }
}
