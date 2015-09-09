@extends('main')
@section('content')
	<div class="row">
		<div class="col-md-12">
			<div class="card card-underline">
				<div class="card-head">
					<header>
						{!! $namaForm !!}
					</header>
				</div>
				<div class="card-body">
				
				{!!Form::open(['routes'=>'data.chain', 'method'=>'POST','id'=>'form_rombel'])!!}
					<table class="table no-margin datatable">
						<thead>
							<tr>
								<th>No</th>
								<th colspan="2">Nama Siswa</th>
								<th>{!!Form::select('tahun_ajaran',['test'],null,['class'=>'form-control select'])!!}</th>
								<th>{!!Form::select('kelas',['test'],null,['class'=>'form-control select'])!!}</th>
								<th>{!!Form::select('jurusan',['test'],null,['class'=>'form-control select'])!!}</th>
								<th>{!!Form::select('ruangan',['test'],null,['class'=>'form-control select'])!!}</th>
								<th>{!!Form::select('semester',['ganjil' => 'Ganjil','genap'=>'Genap'],null,['class'=>'form-control select'])!!}</th>							
							</tr>
						</thead>
						<tbody>
							<tr>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
							</tr>
						</tbody>
					</table>
				{!!Form::close()!!}
				<script type="text/javascript" src="{{asset('js/ajax_rombel.js')}}"></script>
				</div>
			</div>
		</div>
	</div>
@stop