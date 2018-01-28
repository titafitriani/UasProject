@extends('layouts.app')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-6 col-md-offset-3">
				<div class="panel panel-default">
  <div class="panel-heading">Input Snack Lion Air</div>
  <div class="panel-body">
  	<form action="{{route ('barang.update', $barang)}}" method="post">
  		{{csrf_field()}}
      {{method_field('patch')}}
  		<div class="form-group">
  		}
    <label for="inputsm">Nama Barang</label>
    <input class="form-control input-sm" value="{{$barang->namabarang}}" name="namabarang" id="inputsm" type="text">
  </div>
   <div class="form-group">
    <label for="inputdefault">Jumlah Barang Masuk</label>
    <input class="form-control" value="{{$barang->jumlahbarangmasuk}}" name="jumlahbarangmasuk" id="inputdefault" type="text">
  </div>
  <div class="form-group">
    <label for="inputlg">Tanggal Barang Masuk</label>
    <input class="form-control input-lg" name="tanggalmasukbarang" value="{{$barang->tanggalmasukbarang}}" id="inputlg" type="date">
  </div>
	<div class="form-group">
		<input class="btn btn-primary" type="submit" value="Save" name="">
	</div>
  </div>
  	</form>
  		
			</div>
		</div>

</div>
		
	
@endsection