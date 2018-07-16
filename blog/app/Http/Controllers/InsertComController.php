<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use App\Computer;

class InsertComController extends Controller
{
    public function index_insert()
    {
    	return view('insert');
    }
    public function create(Request $request)
    {
    	$data = new Computer;
    	$data->com_name=$request->com_name;
    	$data->com_serail=$request->com_serail;
    	$data->com_ristax=$request->com_ristax;
    	$data->com_ip=$request->com_ip;
    	$data->brand=$request->brand;
    	$data->gen=$request->gen;

    	$data->save();
    	return view('insert');

    }
}
