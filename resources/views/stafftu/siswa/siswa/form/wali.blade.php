<div class="col-xs-12">
	<h3 class="text-primary">Data Wali Siswa</h3>
</div>
<div class="col-xs-12">
	<div class="form-group floating-label">
		{!!Form::text('nama_wali',null,['class'=>'form-control', 'id'=>'nama_wali'])!!}
		{!!Form::label('nama_wali','Nama Lengkap')!!}
	</div>
</div>
<div class="col-xs-3">
	<div class="form-group floating-label">
		{!!Form::text('tahun_lahir_wali',null,['class'=>'form-control', 'id'=>'tahun_lahir_wali'])!!}
		{!!Form::label('tahun_lahir_wali','Tahun Lahir ')!!}
	</div>
</div>
<div class="col-xs-9">
	<div class="form-group floating-label">
		{!!Form::select('pendidikan_terakhir_wali',$pendidikan->lists(),null,['class'=>'form-control', 'id'=>'pendidikan_terakhir_wali'])!!}
		{!!Form::label('pendidikan_terakhir_wali','Pendidikan')!!}
	</div>
</div>
<div class="col-xs-8">
	<div class="form-group floating-label">
		{!!Form::select('pekerjaan_wali',$pekerjaan->lists(),null,['class'=>'form-control', 'id'=>'pekerjaan_wali'])!!}
		{!!Form::label('pekerjaan_wali','Pekerjaan')!!}
	</div>
</div>
<div class="col-xs-4">
	<div class="form-group floating-label">
		{!!Form::select('penghasilan_wali',$penghasilan->lists(),null,['class'=>'form-control', 'id'=>'penghasilan_wali'])!!}
		{!!Form::label('penghasilan_wali','Penghasilan ')!!}
	</div>
</div>