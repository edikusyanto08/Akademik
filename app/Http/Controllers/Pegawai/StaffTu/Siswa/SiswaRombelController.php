<?php

namespace Akademik\Http\Controllers\Pegawai\StaffTu\Siswa;

use Illuminate\Http\Request;

use Akademik\Http\Requests\SiswaRombelRequest;
use Akademik\Http\Controllers\Controller;
use Akademik\SiswaRombonganBelajar;
use Akademik\TahunAjaran;
use Akademik\RombonganBelajar;

class SiswaRombelController extends Controller
{
    public function __construct(){
        parent:: __construct('stafftu.siswa.siswarombel',new SiswaRombonganBelajar(),'Penempatan Siswa');
    }
    
    public function index()
    {
        $lists = ['Tahun Ajaran'];
        $lists = array_merge($lists,TahunAjaran::lists('label','id')->toArray());
        $namaForm =  "Data <b>{$this->moduleName}</b>";
        return $this->view($this->nameFix('index'), compact('lists', 'namaForm'))->with($this->nameFix());

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(SiswaRombonganBelajar $model,SiswaRombelRequest $r)
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
    public function update(SiswaRombonganBelajar $model,SiswaRombelRequest $r)
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
    public function destroy(SiswaRombonganBelajar $model)
    {
        if ($model->delete()) {
            return $this->routeAndSuccess('delete');
        
        }
        return $this->routebackWithError('delete');
    
    }

   public function ajaxRequest(RombonganBelajar $data, Request $r)
   {
       $tahun = $r->input('tahun_ajaran');
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
       if(! is_null($semester)) $data = $data->where('semester', $semester);
       $d = [];
       if($data->count() > 0){
        foreach ($data->get() as $list) {
            $d['combobox']['tahun_ajaran'][] = ['id'=>$list->tahun_ajaran_id, 'val'=> $list->tahun_ajaran->label];
            $d['combobox']['jurusan'][] = ['id'=>$list->jurusan_id, 'val'=> $list->jurusan->label];
            $d['combobox']['kelas'][] = ['id'=>$list->kelas_id, 'val'=> $list->kelas->label];
            $d['combobox']['ruangan'][] = ['id'=>$list->ruangan_id, 'val'=> $list->ruangan->label];
            $d['combobox']['semester'][] = ['id'=>$list->semester, 'val'=> ucwords($list->semester)];
            if($list->siswarombel()->count() > 0){

                foreach ($list->siswarombel()->where('status','true')->get() as $siswa) {

                    $d['siswa'][] = [
                        'rombel' => $list->id,
                        'siswa_id' => $siswa->siswa->id,
                        'nama'   => $siswa->siswa->nama,
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
