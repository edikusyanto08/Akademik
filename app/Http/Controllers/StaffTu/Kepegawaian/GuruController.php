<?php

namespace Akademik\Http\Controllers\staffTu\kepegawaian;



use Akademik\Http\Requests\GuruRequest;
use Akademik\Http\Controllers\Controller;
use Akademik\Guru;
use Auth;

class GuruController extends Controller
{

     public function __construct()
    {
        parent::__construct('stafftu.kepegawaian.guru', new Guru(), 'Data Guru');

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
    // public function create()
    // {
    //     //
    // }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store( Guru $bebas,GuruRequest $g)
    {

    if ($bebas->fill($g->all())->save()) {
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
    // public function show($id)
    // {
    //     //
    // }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    // public function edit($id)
    // {
    //     //
    // }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update( Guru $bebas, GuruRequest $g)
    {
        
        if ($bebas->fill($g->all())->save()) {
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
    public function destroy(Guru $bebas)
    {
        if ($bebas->delete()) {
            return $this->routeAndSuccess('destroy');
        }
        return $this->routeBackWithError('destroy');
    }
}
