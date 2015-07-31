<?php  namespace Akademik;

/**
* 
*/
class Pekerjaan
{
	
	function lists()
	{
		return [
			'pns'=>'Pegawai Negri',
			'tni'=>'TNI',
			'polisi'=>'Polisi',
			'buruh'=>'Buruh',
			'petani'=>'Petani',
			'nelayan'=>'Nelayan',
			'wiraswasta'=>'Wiraswasta',
			'-'=>'Tidak Berkerja',
		];
	}
}