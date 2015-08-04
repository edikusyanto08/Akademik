<?php

namespace Akademik\Http\Controllers\StaffTu\Student;

use Illuminate\Http\Request;
use Akademik\Http\Requests\StudentRequest;
use Akademik\Http\Controllers\Controller;
use Akademik\Siswa;

class StudentController extends Controller
{
    public function __construct()
    {
        parent::__construct('stafftu.siswa.siswa', new Siswa(), 'Siswa');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Siswa $siswa, StudentRequest $r )
    {
        if ($siswa->create($r->all())) {
            return $this->routeAndSuccess('store');
        }
        return $this->routeBackWithError('store');
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update(Siswa $siswa , StudentRequest $r)
    {
        if ($siswa->fill($r->all())->save()) {
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
    public function destroy(Siswa $siswa)
    {
        if ($siswa->destroy()) {
            return $this->routeAndSuccess('update');
        }
        return $this->routeBackWithError('update');
    }
}
