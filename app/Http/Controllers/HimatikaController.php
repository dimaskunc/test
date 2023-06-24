<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Himatika;

class HimatikaController extends Controller
{
    public function index()
    {
    	$data = Himatika::all();
    	return view('himatika', compact('data'));
    }
}
