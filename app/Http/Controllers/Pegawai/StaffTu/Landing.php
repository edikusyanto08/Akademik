<?php

namespace Akademik\Http\Controllers\Pegawai\StaffTu;

use Illuminate\Http\Request;

use Akademik\Http\Requests;
use Akademik\Http\Controllers\Controller;

class Landing extends Controller
{
    /**
     * first page staff tu get
     * @return [type] [description]
     */
  public function page()
  {
      return  view("stafftu.landing");
  }
}
