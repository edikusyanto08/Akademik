<div class="col-xs-12">
	<h3 class="text-primary">Data Ayah Kandung</h3>
</div>
<div class="col-xs-12">
	<div class="form-group floating-label">
		{!!Form::text('nama_ayah',null,['class'=>'form-control', 'id'=>'nama_ayah'])!!}
		{!!Form::label('nama_ayah','Nama Lengkap')!!}
	</div>
</div>
<div class="col-xs-3">
	<div class="form-group floating-label">
		{!!Form::text('tahun_lahir_ayah',null,['class'=>'form-control', 'id'=>'tahun_lahir_ayah'])!!}
		{!!Form::label('tahun_lahir_ayah','Tahun Lahir ')!!}
	</div>
</div>
<div class="col-xs-9">
	<div class="form-group floating-label">
		{!!Form::select('pendidikan_terakhir_ayah',$pendidikan->lists(),null,['class'=>'form-control', 'id'=>'pendidikan_terakhir_ayah'])!!}
		{!!Form::label('pendidikan_terakhir_ayah','Pendidikan')!!}
	</div>
</div>
<div class="col-xs-8">
	<div class="form-group floating-label">
		{!!Form::select('pekerjaan_ayah',$pekerjaan->lists(),null,['class'=>'form-control', 'id'=>'pekerjaan_ayah'])!!}
		{!!Form::label('pekerjaan_ayah','Pekerjaan')!!}
	</div>
</div>
<div class="col-xs-4">
	<div class="form-group floating-label">
		{!!Form::select('penghasilan_ayah',$penghasilan->lists(),null,['class'=>'form-control', 'id'=>'penghasilan_ayah'])!!}
		{!!Form::label('penghasilan_ayah','Penghasilan ')!!}
	</div>
</div>