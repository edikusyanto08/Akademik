<?php

namespace Akademik\Http\Controllers\Pegawai\StaffTu\Kepegawaian;

use Illuminate\Http\Request;

use Akademik\Http\Requests\PegawaiMengajarRequest;
use Akademik\Http\Controllers\Controller;
use Akademik\PegawaiMengajar;

class PegawaiMengajarController extends Controller
{
    public function __construct()
    {
        parent::__construct('stafftu.kepegawaian.pegawaimengajar', new PegawaiMengajar(), 'Keahlian Mengajar');
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
    public function store(PegawaiMengajar $model,PegawaiMengajarRequest $r)
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
