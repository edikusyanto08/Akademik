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
						'name'=>'Data Akademik',
						'icon'=> 'fa fa-puzzle-piece',
						'inGroup' =>[
							['route'=>'classroom','name'=>'Ruang Belajar','icon'=>'md md-view-module'],
							['route'=>'disclipline','name'=>'Mata Pelajaran','icon'=>'md md-book'],
							['route'=>'discliplinecatagory','name'=>'Kategori Mata Pelajaran','icon'=>'fa fa-bookmark'],
							['route'=>'program','name'=>'Jurusan','icon'=>'fa fa-random'],
							['route'=>'degree','name'=>'Kelas','icon'=>'fa fa-line-chart'],
							['route'=>'schoolyear','name'=>'Tahun Angkatan','icon'=>'fa fa-calendar'],
							['route'=>'specialneed','name'=>'Kebutuhan Khusus','icon'=>'fa fa-asterisk'],
							['route'=>'exkul','name'=>'Exkul','icon'=>'fa fa-asterisk'],
							['route'=>'specialneed','name'=>'','icon'=>'fa fa-asterisk'],
						]
					],
					[
						'route'=>'siswa',
						'name'=>'Kesiswaan',
						'icon'=> 'md md-accessibility',
						'inGroup' =>[
							['route'=>'siswa','name'=>'Data Induk Siswa','icon'=>'fa fa-graduation-cap'],
							['route'=>'siswa','name'=>'siswa','icon'=>'fa fa-graduation-cap'],
							['route'=>'siswa','name'=>'siswa','icon'=>'fa fa-graduation-cap'],
							['route'=>'siswa','name'=>'siswa','icon'=>'fa fa-graduation-cap'],
						]
					],
					[
						'route'=>'kepegawaian',
						'name'=>'Kepegawaiaan',
						'icon'=> 'md md-account-box',
						'inGroup' =>[
							['route'=>'pegawai','name'=>'Data Pegawai','icon'=>'fa fa-graduation-cap'],
							['route'=>'tugas','name'=>'Tugas Pegawai','icon'=>'fa fa-graduation-cap'],
							['route'=>'guru','name'=>'Guru','icon'=>'fa fa-graduation-cap'],
							['route'=>'diklat','name'=>'Diklat','icon'=>'fa fa-graduation-cap'],
							['route'=>'pendidikan','name'=>'Pendidikan','icon'=>'fa fa-graduation-cap'],
							['route'=>'pekerjaan','name'=>'Pekerjaan','icon'=>'fa fa-graduation-cap'],
							['route'=>'masakerja','name'=>'Masa Kerja','icon'=>'fa fa-graduation-cap'],
						]
					],
					[
						'route'=>'pengaturan',
						'name'=>'Pengaturan',
						'icon'=> 'md md-conf',
						'inGroup' =>[
							['route'=>'hobi','name'=>'Hobi','icon'=>'fa fa-graduation-cap'],
						]
					]
			]
		];
		return $menu[$level];
	}
}