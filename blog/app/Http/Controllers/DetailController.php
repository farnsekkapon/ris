<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use App\Computer;
use App\History;

class DetailController extends Controller
{
    public function index_detail()
    {
    	return view('detail');
    }
     public function index_details($id)
    {  	
		$data = Computer::find($id);
		$histories = History::all();
		return view('detail',compact('data','histories'));
    }
}
