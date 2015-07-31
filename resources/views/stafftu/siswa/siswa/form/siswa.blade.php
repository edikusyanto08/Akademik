@inject('kebutuhanKhusus',\Akademik\KebutuhanKhusus)
@inject('agama',\Akademik\Agama)
@inject('pendidikan',\Akademik\Pendidikan)
@inject('penghasilan',\Akademik\Penghasilan)
@inject('pekerjaan',\Akademik\Pekerjaan)
<div class="row">
	<div class="col-md-6">
		<div class="col-xs-12">
			<h3 class="text-primary">Data Siswa</h3>
		</div>
		<div class="col-xs-12">
			<div class="form-group floating-label">
				{!!Form::text('username',null,['class'=>'form-control', 'id'=>'username'])!!}
				{!!Form::label('username','Username ')!!}
			</div>
		</div>
		<div class="col-xs-6">
			<div class="form-group floating-label">
				{!!Form::password('password',['class'=>'form-control', 'id'=>'password'])!!}
				{!!Form::label('password','Password ')!!}
			</div>
		</div>
		<div class="col-xs-6">
			<div class="form-group floating-label">
				{!!Form::password('password_confirmation',['class'=>'form-control', 'id'=>'password_confirmation'])!!}
				{!!Form::label('password_confirmation','Ulangi Password ')!!}
			</div>
		</div>
		<div class="col-xs-6">
			<div class="form-group floating-label">
				{!!Form::text('nama',null,['class'=>'form-control', 'id'=>'nama'])!!}
				{!!Form::label('nama','Nama Siswa ')!!}
			</div>
		</div>
		<div class="col-xs-6">
			<div class="form-group">
				{!!Form::select('gender',['L'=>'Laki-Laki','P'=>'Perempuan'],null,['class'=>'form-control', 'id'=>'gender'])!!}
				{!!Form::label('gender','Jenis Kelamin')!!}
			</div>
		</div>
		<div class="col-xs-6">
			<div class="form-group floating-label">
				{!!Form::text('nis',null,['class'=>'form-control', 'id'=>'nis', 'data-inputmask'=>"'mask': '9999'"])!!}
				{!!Form::label('nis','NIS')!!}
			</div>
		</div>
		<div class="col-xs-6">
			<div class="form-group floating-label">
				{!!Form::text('nisn',null,['class'=>'form-control', 'id'=>'nisn', 'data-inputmask'=>"'mask': '99-9999-9999'"])!!}
				{!!Form::label('nisn','NISN')!!}
			</div>
		</div>
		<div class="col-xs-6">
			<div class="form-group floating-label">
				{!!Form::text('tempat_lahir',null,['class'=>'form-control', 'id'=>'tempat_lahir'])!!}
				{!!Form::label('tempat_lahir','Tempat Lahir')!!}
			</div>
		</div>
		<div class="col-xs-6">
			<div class="form-group floating-label">
				{!!Form::text('tanggal_lahir',null,['class'=>'form-control txt-datepicker', 'id'=>'tanggal_lahir'])!!}
				{!!Form::label('tanggal_lahir','Tanggal Lahir')!!}
			</div>
		</div>
		<div class="col-xs-4">
			<div class="form-group floating-label">
				{!!Form::text('nik',null,['class'=>'form-control txt-input-mask', 'id'=>'nik', 'data-inputmask'=>"'mask': '9999-9999-9999-9999'"])!!}
				{!!Form::label('nik','NIK')!!}
			</div>
		</div>
		<div class="col-xs-4">
			<div class="form-group floating-label">
				{!!Form::select('agama',$agama->lists(),null,['class'=>'form-control', 'id'=>'agama'])!!}
				{!!Form::label('agama','Agama')!!}
			</div>
		</div>
		<div class="col-xs-4">
			<div class="form-group floating-label">
				{!!Form::select('kebutuhan_khusus',$kebutuhanKhusus->lists('label','id'),null,['class'=>'form-control', 'id'=>'kebutuhan_khusus'])!!}
				{!!Form::label('kebutuhan_khusus','Kebutuhan Khusus')!!}
			</div>
		</div>
		<div class="col-xs-4">
			<div class="form-group floating-label">
				{!!Form::select('penerima_kps',['ya'=>'Ya','tidak'=>'Bukan'],null,['class'=>'form-control', 'id'=>'penerima_kps'])!!}
				{!!Form::label('penerima_kps','Penerima KPS')!!}
			</div>
		</div>
		<div class="col-xs-8">
			<div class="form-group floating-label">
				{!!Form::text('no_kps',null,['class'=>'form-control', 'id'=>'no_kps'])!!}
				{!!Form::label('no_kps','Nomor KPS')!!}
			</div>
		</div>
		<div class="col-xs-12">
			<div class="form-group floating-label">
				{!!Form::text('no_skhun',null,['class'=>'form-control', 'id'=>'no_skhun','data-inputmask'=>"'mask': '9-99-99-99-999-999-9'"])!!}
				{!!Form::label('no_skhun','Nomor SKHUN')!!}
			</div>
		</div>
		@include($form.'.alamat')
	</div>
	<div class="col-md-6">
		@include($form.'.ayah')
		@include($form.'.ibu')
		@include($form.'.wali')
	</div>
</div>