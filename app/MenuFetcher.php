<?php 
namespace Akademik;
/**
*  service menu fetcher
*/
class MenuFetcher
{
	function __construct()
	{

	}
	public function lists($level)
	{
		$menu = [
			'stafftu'=>[
					[
						'route'=>'masterdata',
						'name'=>'Data Pokok',
						'icon'=> 'fa fa-puzzle-piece',
						'inGroup' =>[
							['route'=>'classroom','name'=>'Ruang Belajar','icon'=>'md md-view-module'],
							['route'=>'disclipline','name'=>'Mata Pelajaran','icon'=>'md md-book'],
							['route'=>'discliplinecatagory','name'=>'Kategori Mata Pelajaran','icon'=>'fa fa-bookmark'],
							['route'=>'program','name'=>'Jurusan','icon'=>'fa fa-random'],
							['route'=>'degree','name'=>'Kelas','icon'=>'fa fa-line-chart'],
							['route'=>'schoolyear','name'=>'Tahun Angkatan','icon'=>'fa fa-calendar'],
							['route'=>'specialneed','name'=>'Kebutuhan Khusus','icon'=>'fa fa-asterisk'],
						]
					],
					[
						'route'=>'siswa',
						'name'=>'Siswa',
						'icon'=> 'md md-accessibility',
						'inGroup' =>[
							['route'=>'siswa','name'=>'Data Induk Siswa','icon'=>'fa fa-graduation-cap'],
							['route'=>'siswa','name'=>'siswa','icon'=>'fa fa-graduation-cap'],
							['route'=>'siswa','name'=>'siswa','icon'=>'fa fa-graduation-cap'],
							['route'=>'siswa','name'=>'siswa','icon'=>'fa fa-graduation-cap'],
						]
					]
			]
		];
		return $menu[$level];
	}
}