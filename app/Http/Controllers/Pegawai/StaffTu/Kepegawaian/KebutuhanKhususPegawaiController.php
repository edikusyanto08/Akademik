<?php

namespace Akademik\Http\Controllers\Pegawai\StaffTu\Kepegawaian;

use Illuminate\Http\Request;

use Akademik\Http\Requests\KebutuhanKhususPegawaiRequest;
use Akademik\Http\Controllers\Controller;
use Akademik\PegawaiKebutuhanKhusus;

class KebutuhanKhususPegawaiController extends Controller
{
    public function __construct(){
        parent::__construct('stafftu.kepegawaian.kebutuhankhususpegawai', new PegawaiKebutuhanKhusus(), 'Kebutuhan Khusus Pegawai');
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
    public function store(KebutuhanKhusus $model,KebutuhanKhususPegawaiRequest $r)
    {
        if ($model->fill($r->all())->save()) {
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
    public function update()
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy()
    {
        //
    }
}
