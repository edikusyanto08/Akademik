<?php

namespace Akademik\Http\Controllers\StaffTu\MasterData;

use Illuminate\Http\Request;

use Akademik\Http\Requests;
use Akademik\Http\Controllers\Controller;
use Akademik\Http\Requests\EskulRequest;
use Akademik\Eskul;

class ExkulController extends Controller
{

     public function __construct()
    {
        parent::__construct('stafftu.masterdata.exkul', new Eskul(),'Ekstra Kurikuler');
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
    public function store( Eskul $model,EskulRequest $r)
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
     * @param  int  $id
     * @return Response
     */
    public function update( Eskul $model,EskulRequest $r)
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
    public function destroy( Eskul $model)
    {
        if ($model->delete()) {
            return $this->routeAndSuccess('destroy');
        }
        return $this->routeBackWithError('destroy');
    }
}
