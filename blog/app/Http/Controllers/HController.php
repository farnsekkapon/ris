<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use App\Computer;

class HController extends Controller
{
    public function index_h()
    {
    	return view('h');
    }  
}
