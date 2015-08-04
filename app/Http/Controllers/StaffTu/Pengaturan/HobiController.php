<?php

namespace Akademik\Http\Controllers\StaffTu\Pengaturan;

use Illuminate\Http\Request;

use Akademik\Http\Requests\HobiRequest;
use Akademik\Http\Controllers\Controller;
use Akademik\Hobi;

class HobiController extends Controller
{

     public function __construct()
    {
        parent::__construct('stafftu.pengaturan.hobi', new Hobi(),'hobi');
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
    public function store( Hobi $model,  HobiRequest $r)
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
    public function update(Hobi $model, HobiRequest $r)
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
    public function destroy(Hobi $model)
    {
         if ($model->delete()) {
            return $this->routeAndSuccess('destroy');
        }
        return $this->routeBackWithError('destroy');
    }
}
