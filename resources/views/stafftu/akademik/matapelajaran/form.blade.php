@inject(kategoriMapel,\Akademik\KategoriMataPelajaran)
@inject(jurusan,\Akademik\Jurusan)
@inject(kelas,\Akademik\Kelas)
<div class="col-md-12">
	<div class="col-xs-12 col-md-4">
		<div class="form-group floating-label">
			{!!Form::select('kategori_mata_pelajaran_id',$kategoriMapel->lists('label','id'),null,['class'=>'form-control', 'id'=>'kategori_mata_pelajaran_id'])!!}
			{!!Form::label('kategori_mata_pelajaran_id','Kategori Mata Pelajaran')!!}
		</div>
	</div>
	<div class="col-xs-6 col-md-4 ">
		<div class="form-group floating-label">
			{!!Form::text('label',null,['class'=>'form-control', 'id'=>'label'])!!}
			{!!Form::label('label','Nama Mata Pelajaran')!!}
		</div>
	</div>
	<div class="col-xs-6 col-md-4">
		<div class="form-group floating-label">
			{!!Form::text('singkatan',null,['class'=>'form-control', 'id'=>'singkatan'])!!}
			{!!Form::label('singkatan','singkatan')!!}
		</div>
	</div>
	<div class="col-xs-6">
		<div class="form-group floating-label">
			{!!Form::select('program_id',$jurusan->lists('label','id'),null,['class'=>'form-control', 'id'=>'program_id'])!!}
			{!!Form::label('program_id','Program')!!}
		</div>
	</div>
	<div class="col-xs-6">
		<div class="form-group floating-label">
			{!!Form::select('kelas_id',$kelas->lists('label','id'),null,['class'=>'form-control', 'id'=>'kelas_id'])!!}
			{!!Form::label('kelas_id','Kelas')!!}
		</div>	
	</div>
</div>
