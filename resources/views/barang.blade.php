@extends('layouts.app')

@section('content')
<div class="container">

  <div class="panel panel-default">
  <div class="panel-heading"><h2>Table Barang</h2></div>
  <div class="panel-body">
    <a class="btn  btn-primary" href="{{ route('input.data') }}">Tambah Data</a>
       <table class="table">
    <thead>
      <tr>
        <th>No</th>
        <th>Nama Barang</th>
        <th>Jumlah</th>
        <th>Tanggal Masuk Barang</th>
      </tr>
    </thead>
    @foreach($barangs as $barang)
    <tbody>
      <tr>
        <td>{{$barang->id}}</td>
        <td>{{$barang->namabarang}}</td>
        <td>{{$barang->jumlahbarangmasuk}}</td>
        <td>{{$barang->tanggalmasukbarang}}</td>
        <td>
          <form action="{{ route ('barang.delete', $barang)}}" method="post">
          {{csrf_field()}}
          {{method_field('DELETE')}}
          <a href="{{ route('barang.edit', $barang) }}" class="btn btn-info btn-xs">Edit</a>
          <button type="submit" class="btn btn-danger btn-xs">hapus</button>
        </td>
      </tr>
    </tbody>
    @endforeach
  </table>   
  </div>
  </div>
           
 
</div>

@endsection