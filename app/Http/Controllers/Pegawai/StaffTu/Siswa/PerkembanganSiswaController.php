<?php

namespace Akademik\Http\Controllers\Pegawai\StaffTu\Siswa;

use Illuminate\Http\Request;

use Akademik\Http\Requests\PerkembanganSiswaRequest;
use Akademik\Http\Controllers\Controller;
use Akademik\SiswaPerkembangan;

class PerkembanganSiswaController extends Controller
{
    public function __construct(){
        parent:: __construct('stafftu.siswa.siswaperkembangan',new SiswaPerkembangan(),'Perkembangan Siswa');
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
    public function store(SiswaPerkembangan $model,PerkembanganSiswaRequest $r)
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
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(SiswaPerkembangan $model,PerkembanganSiswaRequest $r)
    {
         if ($model->fill($r->all())->save()) {
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
    public function destroy(SiswaPerkembangan $model)
    {
        if ($model->delete()) {
            return $this->routeAndSuccess('delete');
        }
         return $this->routebackWithError('delete');
    }
}
