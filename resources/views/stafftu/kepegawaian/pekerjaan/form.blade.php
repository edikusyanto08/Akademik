

<div class="row">
	
	<div class="col-md-12">
		<div class="col-md-12">
			<h3 class="text-primary">Data Pekerjaan</h3>
		</div>
		<div class="col-md-6">
			<div class="col-md-12">
				<div class="form-group floating-label">
					{!!Form::select('status',['status1'=>'status 1','status2'=>'status2'],null,['class'=>'form-control', 'id'=>'status'])!!}
					{!!Form::label('status','Status')!!}
				</div>
			</div>
			<div class="col-md-12">
				<div class="form-group floating-label">
					{!!Form::select('pangkat',['pangkat1'=>'pangkat 1','pangkat2'=>'pangkat 2'],null,['class'=>'form-control', 'id'=>'pangkat'])!!}
					{!!Form::label('pangkat','Pangkat')!!}
				</div>
			</div>

			<div class="col-md-12">
				<div class="form-group floating-label">
					{!!Form::select('golongan',['golongan1'=>'golongan 1','golongan2'=>'golongan 2'],null,['class'=>'form-control', 'id'=>'golongan'])!!}
					{!!Form::label('golongan','Golongan')!!}
				</div>
			</div>

			<div class="col-md-12">
				<div class="form-group floating-label">
					{!!Form::text('jabatan',null,['class'=>'form-control', 'id'=>'jabatan'])!!}
					{!!Form::label('jabatan','Jabatan')!!}
				</div>
			</div>
		</div>
		
		
		
		<div class="col-md-6">
			

			<!-- <div class="col-md-12">
				<div class="form-group floating-label">
					{!!Form::text('golongan',null,['class'=>'form-control', 'id'=>'golongan'])!!}
					{!!Form::label('golongan','Golongan')!!}
				</div>
			</div> -->
			
			<div class="col-md-3">
				<div class="form-group floating-label">
					{!!Form::select('tmt_awal',['00'=>'00','01'=>'02'],null,['class'=>'form-control', 'id'=>'tmt_awal'])!!}
					
				</div>
			</div>
			<div class="col-md-6">
				<div class="form-group floating-label">
					{!!Form::select('tmt_awal',['Lorem Ipsum'=>'Lorem Ipsum','Lorem Ipsum'=>'Lorem Ipsum'],null,['class'=>'form-control', 'id'=>'tmt_awal'])!!}
					
				</div>
			</div>
			<div class="col-md-3">
				<div class="form-group floating-label">
					{!!Form::select('tmt_awal',['000'=>'000','001'=>'001'],null,['class'=>'form-control', 'id'=>'tmt_awal'])!!}
					
				</div>
			</div>

		
			<div class="col-md-3">
				<div class="form-group floating-label">
					{!!Form::select('tmt_awal',['00'=>'00','01'=>'02'],null,['class'=>'form-control', 'id'=>'tmt_awal'])!!}
					
				</div>
			</div>
			<div class="col-md-6">
				<div class="form-group floating-label">
					{!!Form::select('tmt_awal',['Lorem Ipsum'=>'Lorem Ipsum','Lorem Ipsum'=>'Lorem Ipsum'],null,['class'=>'form-control', 'id'=>'tmt_awal'])!!}
					
				</div>
			</div>
			<div class="col-md-3">
				<div class="form-group floating-label">
					{!!Form::select('tmt_awal',['000'=>'000','001'=>'001'],null,['class'=>'form-control', 'id'=>'tmt_awal'])!!}
					
				</div>
			</div>
			
		</div>
		
		
		
	</div>
	
</div>


</div>