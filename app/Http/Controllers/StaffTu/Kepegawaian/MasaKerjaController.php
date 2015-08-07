<?php

namespace Akademik\Http\Controllers\StaffTu\kepegawaian;

use Illuminate\Http\Request;

use Akademik\Http\Requests;
use Akademik\Http\Controllers\Controller;
use Akademik\Guru;

class MasaKerjaController extends Controller
{

     public function __construct()
    {
        parent::__construct('stafftu.kepegawaian.masa kerja', new Guru(), 'Masa kerja');

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
    public function store()
    {
        //
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
