<div class="col-xs-12">
	<h3 class="text-primary">Data Ibu Kandung</h3>
</div>
<div class="col-xs-12">
	<div class="form-group floating-label">
		{!!Form::text('nama_ibu',null,['class'=>'form-control', 'id'=>'nama_ibu'])!!}
		{!!Form::label('nama_ibu','Nama Lengkap')!!}
	</div>
</div>
<div class="col-xs-3">
	<div class="form-group floating-label">
		{!!Form::text('tahun_lahir_ibu',null,['class'=>'form-control', 'id'=>'tahun_lahir_ibu'])!!}
		{!!Form::label('tahun_lahir_ibu','Tahun Lahir ')!!}
	</div>
</div>
<div class="col-xs-9">
	<div class="form-group floating-label">
		{!!Form::select('pendidikan_terakhir_ibu',$pendidikan->lists(),null,['class'=>'form-control', 'id'=>'pendidikan_terakhir_ibu'])!!}
		{!!Form::label('pendidikan_terakhir_ibu','Pendidikan')!!}
	</div>
</div>
<div class="col-xs-8">
	<div class="form-group floating-label">
		{!!Form::select('pekerjaan_ibu',$pekerjaan->lists(),null,['class'=>'form-control', 'id'=>'pekerjaan_ibu'])!!}
		{!!Form::label('pekerjaan_ibu','Pekerjaan')!!}
	</div>
</div>
<div class="col-xs-4">
	<div class="form-group floating-label">
		{!!Form::select('penghasilan_ibu',$penghasilan->lists(),null,['class'=>'form-control', 'id'=>'penghasilan_ibu'])!!}
		{!!Form::label('penghasilan_ibu','Penghasilan ')!!}
	</div>
</div>