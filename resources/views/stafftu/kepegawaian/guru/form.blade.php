@inject('pegawai','\Akademik\Pegawai')
<div class="container">
	<div class="row">
	<div class="col-md-12">
		<div class="form-group floating-label">
			{!!Form::select('pegawai_id',$pegawai->lists('nama','id'),null,['class'=>'form-control', 'id'=>'pegawai_id'])!!}
			{!!Form::label('pegawai_id','ID Pegawai')!!}
		</div>
		
		
	</div>
	
</div>
</div>
