<?php 
namespace Akademik;
/**
*  service menu fetcher
*/
use Route;
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
						'route'=>'akademik',
						'name'=>'Data Akademik',
						'icon'=> 'fa fa-puzzle-piece',
						'inGroup' =>[
							['route'=>'ruangan','name'=>'Ruang Belajar','icon'=>'md md-view-module'],
							['route'=>'mapel','name'=>'Mata Pelajaran','inGroup'=>[
								['route'=>'kategori','name'=>'Kategori Mata Pelajaran','icon'=>'fa fa-bookmark'],	
								['route'=>'data','name'=>'Data Mata Pelajaran','icon'=>'md md-book'],
								['route'=>'guru','name'=>'Guru Mata Pelajaran','icon'=>'md md-book']
							]],
							['route'=>'jurusan','name'=>'Jurusan','icon'=>'fa fa-random'],
							['route'=>'kelas','name'=>'Kelas','icon'=>'fa fa-line-chart'],
							['route'=>'tahunajaran','name'=>'Tahun Angkatan','icon'=>'fa fa-calendar'],
							['route'=>'ekskul','name'=>'Ekstra kulikuler','icon'=>'fa fa-asterisk'],
						]
					],
					[
						'route'=>'siswa',
						'name'=>'Kesiswaan',
						'icon'=> 'md md-accessibility',
						'inGroup' =>[
							['route'=>'siswa','name'=>'Data Induk Siswa','icon'=>'fa fa-graduation-cap'],
							['route'=>'siswahobi','name'=>'Hobi Siswa','icon'=>'fa fa-graduation-cap'],
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
							['route'=>'ijazah','name'=>'Ijazah','icon'=>'fa fa-graduation-cap'],
							['route'=>'akta','name'=>'Akta','icon'=>'fa fa-graduation-cap'],
							['route'=>'golongan','name'=>'Golongan','icon'=>'fa fa-graduation-cap'],
							['route'=>'pangkat','name'=>'Pangkat','icon'=>'fa fa-graduation-cap'],
							['route'=>'kebutuhankhusus','name'=>'Kebutuhan Khusus','icon'=>'fa fa-asterisk'],
						]
					]
			]
		];
		return $menu[$level];
	}
	public function make($menu,$role = null,$prefix = null)
	{
		$o = null;
		$lists = is_object($menu) ? $menu->lists($role) : $menu;
		foreach ($lists as $list) {
			if(is_array($list)){
				if(isset($list['inGroup'])){
					$inGroup = $list['inGroup'];
					unset($list['inGroup']);
					$active  = in_array( $list['route'],explode( '.',Route::currentRouteName() ) ) ? 'active expand':'';
					$icon = isset($list['icon']) ? "<div class='gui-icon'><i class='{$list['icon']}'></i></div>" : ""; 
					echo "<li class = 'gui-folder $active'>";
						echo "<a>$icon<span class='title'>{$list['name']}</span></a>";
						echo "<ul>";
						$oldPrefix = $prefix;
						$prefix = (!is_null($prefix)) ? $prefix.'.'.$list['route'] : $list['route'];
						$this->make($inGroup,$role,$prefix);
						$prefix = $oldPrefix;
						echo "</ul>";
					echo "</li>";
				}else{
					echo "<li>";
					$link = route($role.'.'.$prefix.'.'.$list['route'].'.index');
					echo "<a href='$link' ><span class='title'><span class='{$list['icon']}'></span>{$list['name']}</span></a>";
					echo "</li>";
				}
			}else{
				echo "<li>";
				$link = route($role.'.'.$prefix.'.'.$lists['route'].'.index');
				echo "<a href='$link' ><span class='title'><span class='{$lists['icon']}'></span>{$lists['name']}</span></a>";
				echo "</li>";
				continue;
			}
		}
		return $o;

	}
}