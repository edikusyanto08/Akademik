<?php

namespace Akademik\Http\Controllers\Pegawai\StaffTu\kepegawaian;

use Illuminate\Http\Request;

use Akademik\Http\Requests\TugasPegawaiRequest;
use Akademik\Http\Controllers\Controller;
use Akademik\PegawaiTugas;

class TugasController extends Controller
{

    public function __construct()
    {
        parent::__construct('stafftu.kepegawaian.tugas', new PegawaiTugas(), 'Tugas Pegawai');

    }
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    // public function index()
    // {
    //     //
    // }

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
    public function store(PegawaiTugas $bebas, TugasPegawaiRequest $b)
    {
        if ($bebas->fill($b->all())->save()) {
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
    public function update(PegawaiTugas $bebas, TugasPegawaiRequest $b)
    {
        if ($bebas->fill($b->all())->save()) {
            return $this->routeAndSuccess('update');
        }
        return $this->routeBackWithError('update');
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy( PegawaiTugas $bebas)
    {
        if ($bebas->delete()) {
            return $this->routeAndSuccess('destroy');
        }
        return $this->routeBackWithError('destroy');
    }
}
