<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Barang;
use Session;
use Image;
use File;
use Input;
use PDF;
use DB;
use DataTables;

class BarangController extends Controller
{
  public function index()
  {

    // $data = Mahasiswa::all();
    // return view('mahasiswa', compact('data'));


    $data = Barang::select('*');
    return DataTables::of($data)
    ->make(true);
    
    return view ('barang', compact('data'));
} 

public function barang()
{
    return view('barang');
}

}