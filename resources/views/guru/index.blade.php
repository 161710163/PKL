@extends('layouts.admin')
@section('content')

	<div class="row">
	<div class="container">
	<div class="col-md-12">
	<div class="panel panel-primary">
		<div class="panel-heading">Data Guru
			<div class="panel-title pull-right"><a href="{{ route('guru.create') }}">Tambah Data</a>
		</div>
	</div>
	<div class="panel-body">
	<div class="table-responsive table--no-card m-b-30">
	<table class="table table-borderless table-striped table-earning">
	<thead>
		<tr>
					<th>No</th>
					<th>Nama Guru</th>
					<th>Jabatan</th>
					<th>Kurikulum</th>
					<th colspan="3">Action</th>
				</tr>	
	           </thead>
	             <tbody>
		            <?php $nomor = 1; ?>
		  		@php $no = 1; @endphp
		  		@foreach($guru as $data)
                         <tr>
                            <td>{{$no++}}</td>
							<td>{{$data->nama_guru}}</td>
							<td>{{$data->jabatan}}</td>
							<td>{{$data->kurikulum->nama_kurikulum}}</td>
							<td>
		<a class="btn btn-primary" href=" {{ route('guru.edit',$data->id)}} ">Ubah</a>
	</td>
	<td>
		<a class="btn btn-success" href=" {{ route('guru.show',$data->id)}} ">Lihat</a>
	</td>
	<td>
		<form method="post" action="{{ route('guru.destroy',$data->id) }}">
		<input name="_token" type="hidden" value="{{ csrf_token() }}">
		<input type="hidden" name="_method" value="DELETE">

		<button type="submit" class="btn btn-danger">Hapus</button>
	</form>
	</td>
	</tr>
	@endforeach
	</tbody>
	</table>
	</div>
	</div>
	</div>
	</div>
	</div>
	</div>
	@endsection