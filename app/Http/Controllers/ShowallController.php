<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use App\Computer;

class ShowallController extends Controller
{
	 public function index_shows()
    {
    	return view('showall');
    }


    public function getShow()
    {
    	$shows = Computer::all();
    	return view('showall',['shows' => $shows]);
    }
}
