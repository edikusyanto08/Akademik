<div class="form-group floating-label">
	{!!Form::select('kategori_mata_pelajaran_id',\Akademik\KategoriMataPelajaran::lists('label','id'),null,['class'=>'form-control', 'id'=>'kategori_mata_pelajaran_id'])!!}
	{!!Form::label('kategori_mata_pelajaran_id','Label Disclipline Catagory')!!}
</div>
<div class="form-group floating-label">
	{!!Form::text('label',null,['class'=>'form-control', 'id'=>'label'])!!}
	{!!Form::label('label','Label Disclipline')!!}
</div>