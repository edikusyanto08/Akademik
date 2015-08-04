

<div class="form-group floating-label">
	{!!Form::select('kategori_mata_pelajaran_id',\Akademik\KategoriMataPelajaran::lists('label','id'),null,['class'=>'form-control', 'id'=>'kategori_mata_pelajaran_id'])!!}
	{!!Form::label('kategori_mata_pelajaran_id','Kategori Mata Pelajaran')!!}
</div>
<div class="form-group floating-label">
	{!!Form::text('label',null,['class'=>'form-control', 'id'=>'label'])!!}
	{!!Form::label('label','Nama Mata Pelajaran')!!}
</div>
<div class="form-group floating-label">
	{!!Form::text('singkatan',null,['class'=>'form-control', 'id'=>'singkatan'])!!}
	{!!Form::label('singkatan','singkatan')!!}
</div>
<div class="form-group floating-label">
	{!!Form::select('program_id',\Akademik\Program::lists('label','id'),null,['class'=>'form-control', 'id'=>'program_id'])!!}
	{!!Form::label('program_id','Program')!!}
</div>
<div class="form-group floating-label">
	{!!Form::select('kelas_id',\Akademik\Kelas::lists('label','id'),null,['class'=>'form-control', 'id'=>'kelas_id'])!!}
	{!!Form::label('kelas_id','Kelas')!!}
</div>