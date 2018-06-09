@extends('layouts.admin')
@section('content')
<div class="row">
	<div class="container">
		<div class="col-md-12">
			<div class="panel panel-primary">
			  <div class="panel-heading">Lihat Berita 
			  	<div class="panel-title pull-right"><a href="{{ url()->previous() }}">Kembali</a>
			  	</div>
			  </div>
			  <div class="panel-body">

			  		<div class="form-group">
			  			<label class="control-label">Nama Kurikulum</label>
						<input type="text" name="nama_kurikulum" class="form-control" value="{{$kurikulum->nama_kurikulum }}"  readonly>
			  		</div>
			  		</div>

			  		<div class="form-group">
			  			<label class="control-label">Keterangan Kurikulum</label>
						<input type="text" name="ket_kurikulum" class="form-control" value="{{$kurikulum->ket_kurikulum }}"  readonly>
			  		</div>
                      
			  		<div class="form-group">
			  			<label class="control-label">Kepala Sekolah</label>
						<input type="text" name="nama_kepsek" class="form-control" value="{{$kurikulum->nama_kepsek }}"  readonly>
			  		</div>

                      
			  		<div class="form-group">
			  			<label class="control-label">Wakil Kepala Sekolah</label>
						<input type="text" name="nama_wkepsek" class="form-control" value="{{$kurikulum->nama_wkepsek }}"  readonly>
			  		</div>

			  		</div>
			  	</div>
			</div>	
		</div>
	</div>
</div>
@endsection