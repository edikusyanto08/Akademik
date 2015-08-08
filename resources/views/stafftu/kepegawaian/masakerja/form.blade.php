

<div class="row">
	
	<div class="col-md-12">
		<div class="col-md-12">
			<h3 class="text-primary">Data Masa Kerja</h3>
		</div>
		<div class="col-md-6">
			<div class="col-md-12">
				<h4 class="text-primary" style="font-style:italic;" >Sesuai SK</h4>
			</div>
			<div class="col-md-12">
				<div class="form-group floating-label">
					{!!Form::text('jml_tahun',null,['class'=>'form-control', 'id'=>'jml_tahun'])!!}
					{!!Form::label('jml_tahun','Jumlah Tahun')!!}
				</div>
			</div>
			<div class="col-md-12">
				<div class="form-group floating-label">
					{!!Form::text('jml_bln',null,['class'=>'form-control', 'id'=>'jml_bln'])!!}
					{!!Form::label('jml_bln','Jumlah Bulan')!!}
				</div>
			</div>

			
		</div>
		
		<div class="col-md-6">
			<div class="col-md-12">
				<h4 class="text-primary " style="font-style:italic;">Keseluruhan</h4>
			</div>
			<div class="col-md-12">
				<div class="form-group floating-label">
					{!!Form::text('keseluruhan_jml_thn',null,['class'=>'form-control', 'id'=>'keseluruhan_jml_thn'])!!}
					{!!Form::label('keseluruhan_jml_thn','Jumlah Tahun')!!}
				</div>
			</div>
			<div class="col-md-12">
				<div class="form-group floating-label">
					{!!Form::text('keseluruhan_jml_bln',null,['class'=>'form-control', 'id'=>'keseluruhan_jml_bln'])!!}
					{!!Form::label('keseluruhan_jml_bln','Jumlah Bulan')!!}
				</div>
			</div>
		</div>
		
		
		
	</div>
	
</div>


</div>