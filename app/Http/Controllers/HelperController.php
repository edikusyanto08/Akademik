<?php

namespace Akademik\Http\Controllers;

use Illuminate\Http\Request;

use Akademik\Http\Requests;
use Akademik\Http\Controllers\Controller;
use Akademik\RombonganBelajar;

class HelperController extends Controller
{
   public function data_chain(RombonganBelajar $data, Request $r)
   {
       $tahun = $r->input('tahun');
       $jurusan = $r->input('jurusan');
       $kelas = $r->input('kelas');
       $ruangan = $r->input('ruangan');
       $semester = $r->input('semester');
       if(! is_null($tahun)){
       		$data = $data->where('tahun_ajaran_id', $tahun);
       }else{
       	abort(404);
       }
       if(! is_null($kelas)) $data = $data->where('kelas_id', $kelas);
       if(! is_null($jurusan)) $data = $data->where('jurusan_id', $jurusan);
       if(! is_null($ruangan)) $data = $data->where('ruangan_id', $ruangan);
       if(! is_null($semester)) $data = $data->where('semester_id', $semester);
       $d = [];
       if($data->count() > 0){
       	foreach ($data->get() as $list) {
       		$d['combobox']['tahun_ajaran'][] = [$list->tahun_ajaran_id => $list->tahun_ajaran->label];
       		$d['combobox']['jurusan'][] = [$list->jurusan_id => $list->jurusan->label];
       		$d['combobox']['kelas'][] = [$list->kelas_id => $list->kelas->label];
       		$d['combobox']['ruangan'][] = [$list->ruangan_id => $list->ruangan->label];
       		$d['combobox']['semester'][] = [$list->semester => ucwords($list->semester)];
       		if($list->siswarombel()->count() > 0){
				foreach ($list->siswarombel()->where('status','true')->get() as $siswa) {

					$d['siswa'][] = [
						'rombel' => $list->id,
						'nama'	 => $siswa->siswa->nama,
						'tahun_ajaran' => $list->tahun_ajaran->label,
						'jurusan' => $list->jurusan->label,
						'kelas' => $list->kelas->label,
						'ruangan' => $list->ruangan->label,
						'semester' => ucwords($list->semester),
					];
				}
			}
       	}
       }
       return $d;
   }
}
