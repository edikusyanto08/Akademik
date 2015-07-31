<?php  namespace Akademik;

/**
* 
*/
class Penghasilan
{
	
	function lists()
	{
		return [
			'1'=>' < Rp. 1,000,000'
			'2'=>' ≥ Rp. 1,000,000 dan ≤ Rp. 3,000,0000'
			'3'=>' ≥ Rp. 3,000,000 dan ≤ Rp. 5,000,0000'
			'4'=>' ≥ Rp. 5,000,000'
		];
	}
}