<?php

namespace Akademik\Http\Controllers\Pegawai\StaffTu\Akademik;

use Illuminate\Http\Request;

use Akademik\Http\Requests\RombelRequest;
use Akademik\Http\Controllers\Controller;
use Akademik\RombonganBelajar;

class RombelController extends Controller
{
    public function __construct(){
        parent:: __construct('stafftu.akademik.rombel',new RombonganBelajar(),'Rombongan Belajar');
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
     * @param  Request  $request
     * @return Response
     */
    public function store(RombonganBelajar $model,RombelRequest $r)
    {
        if ($model->fill($r->all())->save()) {
             return $this->routeAndSuccess('store');
         }
         return $this->routeBackWithError('store');
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
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(RombonganBelajar $model,RombelRequest $r)
    {
        if ($model->fill($r->all())->save()) {
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
    public function destroy(RombonganBelajar $model)
    {
        if ($model->delete()) {
            return $this->routeAndSuccess('delete');
        }
        return $this->routeBackWithError('delete');
    }
}
