<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\barang;

class BarangController extends Controller
{
    public function create()
    {
    	return view('inputdata');
    }

    public function store()
    {
    	barang::create([
    		'namabarang' => request('namabarang'),
    		'jumlahbarangmasuk' => request('jumlahbarangmasuk'),
    		'tanggalmasukbarang' => request('tanggalmasukbarang'),
		]);
		return redirect()->route('home');
    }

    public function index()
    {
    	$barangs = barang::all();
    	return view ('barang',compact('barangs'));
    }

    public function edit($id)
    {
    	$barang = barang::find($id);
    	return view('editdata', compact('barang'));

    }

    public function update(barang  $barang)
    {
    	$barang->update([
    		'namabarang'=> request('namabarang'),
    		'jumlahbarangmasuk'=> request('jumlahbarangmasuk'),
    		'tanggalmasukbarang'=> request('tanggalmasukbarang'),
    	]);
    	return redirect()->route('barang.index');
    }

    public function destroy(barang $barang)
    {
    	$barang->delete();
    	return redirect()->route('barang.index');
    }
}
