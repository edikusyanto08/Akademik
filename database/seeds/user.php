\<?php

use Illuminate\Database\Seeder;

class user extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new \Akademik\User;
        $user->user = "pegawai";
        $user->password = "pegawai";
        $user->as = "pegawai";
        if($user->save()){
        	$pegawai = new \Akademik\Pegawai;
        	$pegawai->nama = $faker
        }
    }
}
