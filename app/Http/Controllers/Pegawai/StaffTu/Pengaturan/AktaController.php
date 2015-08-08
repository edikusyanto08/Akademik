<?php

namespace Akademik\Http\Controllers\Pegawai\StaffTu\Pengaturan;

use Illuminate\Http\Request;

use Akademik\Http\Requests\AktaRequest;
use Akademik\Http\Controllers\Controller;
use Akademik\Akta;

class AktaController extends Controller
{
    public function __construct(){
        parent:: __construct('stafftu.pengaturan.akta',new Akta(),'Akta');
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
    public function store( Akta $jamil, AktaRequest $j)
    {
        if ($jamil->fill($j->all())->save()) {
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
    public function update(Akta $jamil,AktaRequest $r)
    {
        if ($jamil->fill($r->all())->save()) {
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
    public function destroy(Akta $jamil)
    {
        if ($jamil->delete()) {
            return $this->routeAndSuccess('destroy');
        }
        return $this->routebackWithError('destroy');
    }
}
