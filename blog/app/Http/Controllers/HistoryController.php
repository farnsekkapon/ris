<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use App\History;
use App\Computer;



class HistoryController extends Controller
{
    public function index_history()
    {
    	return view('history');
    }
    public function create(Request $request)
    {
    	$data = new History;
    	$data->computers_id=$request->com_id;
    	$data->histories=$request->history;
    	

    	$data->save();
    	return view('insert');

    }
    public function getCom()
    {
    	$coms = Computer::all();
    	return view('history',['coms' => $coms]);
    }
}
