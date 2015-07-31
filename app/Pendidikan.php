<?php  namespace Akademik;

/**
* 
*/
class Pendidikan
{
	
	function lists()
	{
		return [
			's3'=>'Doktoral (S3)',
			's2' => 'Pasca Sarjana (S2)',
			's1' => 'Sarjana (S1)',
			'd4' => 'Diploma-4 (D4)',
			'd3' => 'Diploma-3 (D3)',
			'sma' => 'SMA/SMK/MA',
			'smp' => 'SMP/MTS',
			'sd' => 'SD/MI',
		];
	}
}