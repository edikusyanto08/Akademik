

<div class="row">
	
	<div class="col-md-12">
		<div class="col-md-12">
			<h3 class="text-primary">Data Pendidikan</h3>
		</div>
		<div class="col-md-6">
			<div class="col-md-12">
				<div class="form-group floating-label">
					{!!Form::select('ijazah',['ijazah1'=>'Ijazah 1','ijazah2'=>'ijasah2'],null,['class'=>'form-control', 'id'=>'ijazah'])!!}
					{!!Form::label('ijazah','Ijazah')!!}
				</div>
			</div>
			<div class="col-md-12">
				<div class="form-group floating-label">
					{!!Form::select('akta',['akta1'=>'akta 1','akta2'=>'akta2'],null,['class'=>'form-control', 'id'=>'akta'])!!}
					{!!Form::label('akta','Akta')!!}
				</div>
			</div>

			<div class="col-md-12">
				<div class="form-group floating-label">
					{!!Form::text('tahun_lulus',null,['class'=>'form-control', 'id'=>'tahun_lulus'])!!}
					{!!Form::label('tahun_lulus','Tahun Lulus')!!}
				</div>
			</div>
		</div>
		
		
		
		<div class="col-md-6">

			<div class="form-group floating-label">
				{!!Form::text('jurusan',null,['class'=>'form-control', 'id'=>'jurusan'])!!}
				{!!Form::label('jurusan','Jurusan')!!}
			</div>
		</div>
		<div class="col-md-6">
			<div class="form-group floating-label">
				{!!Form::text('nama_perguruan_tinggi',null,['class'=>'form-control', 'id'=>'nama_perguruan_tinggi'])!!}
				{!!Form::label('nama_perguruan_tinggi','Nama Perguruan Tinggi')!!}
			</div>
		</div>
		
		
	</div>
	
</div>


</div>