

<div class="row">
	
	<div class="col-md-6">
		<div class="col-md-12">
			<h3 class="text-primary">Data User</h3>
		</div>
		<div class="col-md-12">
			<div class="form-group floating-label">
				{!!Form::text('username',null,['class'=>'form-control', 'id'=>'username'])!!}
				{!!Form::label('username','Username')!!}
			</div>
		</div>
		<div class="col-md-6">
			<div class="form-group floating-label">
				{!!Form::password('password',['class'=>'form-control', 'id'=>'password'])!!}
				{!!Form::label('password','Password')!!}
			</div>
		</div>
		<div class="col-md-6">
			<div class="form-group floating-label">
				{!!Form::password('password_confirmation',['class'=>'form-control', 'id'=>'password_confirmation'])!!}
				{!!Form::label('password_confirmation','Password Confirmation')!!}
			</div>
		</div>
		<div class="col-md-12">
			<h3 class="text-primary">Data Pegawai</h3>
		</div>
		<div class="col-md-12">
			<div class="form-group floating-label">
				{!!Form::text('nama',null,['class'=>'form-control', 'id'=>'nama'])!!}
				{!!Form::label('nama','Nama')!!}
			</div>
		</div>
		<div class="col-md-6">
			<div class="form-group floating-label">
				{!!Form::select('gender',['L'=>'Laki-Laki','P'=>'Perempuan'],null,['class'=>'form-control', 'id'=>'gender'],'L')!!}
				{!!Form::label('gender','Gender')!!}
			</div>
		</div>
		<div class="col-md-6">
			<div class="form-group floating-label">
				{!!Form::text('nip',null,['class'=>'form-control', 'id'=>'nip', 'data-inputmask'=>"'mask': '99999999 999999  9 999 '"])!!}
				{!!Form::label('nis','NIP')!!}
			</div>
		</div>
		<div class="col-md-6">
			<div class="form-group floating-label">
				{!!Form::text('tempat_lahir',null,['class'=>'form-control', 'id'=>'tempat_lahir'])!!}
				{!!Form::label('tempat_lahir','Tempat Lahir')!!}
			</div>
		</div>
		
		
		<div class="col-md-6">
			<div class="form-group floating-label">
				{!!Form::text('tanggal_lahir',null,['class'=>'form-control txt-datepicker', 'id'=>'tanggal_lahir'])!!}
				{!!Form::label('tanggal_lahir','Tanggal Lahir')!!}
			</div>
		</div>
		<div class="col-md-6">
			<div class="form-group floating-label">
				{!!Form::select('status_kepegawaian',['Pegawai Negeri'=>'Pegawai Negeri','Honorer'=>'Honorer'],null,['class'=>'form-control', 'id'=>'status_kepegawaian'],'Honorer')!!}
				{!!Form::label('status_kepegawaian','Status Kepegawaian')!!}
			</div>
		</div>
		<div class="col-md-6">
			<div class="form-group floating-label">
				{!!Form::text('jenis_ptk',null,['class'=>'form-control', 'id'=>'jenis_ptk'])!!}
				{!!Form::label('jenis_ptk','Jenis Ptk')!!}
			</div>
		</div>
		<div class="col-md-6">

			<div class="form-group floating-label">
				{!!Form::text('pengawas_bidang_studi',null,['class'=>'form-control', 'id'=>'pengawas_bidang_studi'])!!}
				{!!Form::label('pengawas_bidang_studi','Pengawas Bidang Studi')!!}
			</div>
		</div>
		<div class="col-md-6">
			<div class="form-group floating-label">
				{!!Form::select('agama',['islam'=>'Islam','kristen'=>'Kristen','hindu'=>'Hindu','budha'=>'Budha','konghucu'=>'Konghucu'],null,['class'=>'form-control', 'id'=>'agama'])!!}
				{!!Form::label('agama','Agama')!!}
			</div>
		</div>
		
		<div class="col-md-6">
			<div class="form-group floating-label">
				{!!Form::text('nama_ibu_kandung',null,['class'=>'form-control', 'id'=>'nama_ibu_kandung','maxlength'=>'10'])!!}
				{!!Form::label('nama_ibu_kandung','Nama Ibu Kandung')!!}
			</div>
		</div>
		<div class="col-md-6">
			<div class="form-group floating-label">
				{!!Form::select('status_perkawinan',['kawin'=>'kawin','belum kawin'=>'belum kawin'],null,['class'=>'form-control', 'id'=>'status_perkawinan'])!!}
				{!!Form::label('status_perkawinan','Status Perkawinan')!!}
			</div>
		</div>
		<div class="col-md-6">
			<div class="form-group floating-label">
				{!!Form::text('npwp',null,['class'=>'form-control', 'id'=>'npwp','maxlength'=>'25'])!!}
				{!!Form::label('NPWP','NPWP')!!}
			</div>
		</div>
		<div class="col-md-6">
			<div class="form-group floating-label">
				{!!Form::select('kewarganegaraan',['WNI'=>'WNI','WNA'=>'WNA'],null,['class'=>'form-control', 'id'=>'kewarganegaraan','maxlength'=>'25'])!!}
				{!!Form::label('kewarganegaraan','Kewarganegaraan')!!}
			</div>
		</div>
	</div>
	<div class="col-md-6">
		
		@include($form.'_alamat')

	</div>
</div>


</div>