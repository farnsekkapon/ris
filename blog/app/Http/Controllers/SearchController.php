<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use App\Computer;

class SearchController extends Controller
{
     public function searchcom(Request $request)
    {
    	$search=$request->get('search');
    	$shows= Computer::Where('com_name','like','%'.$search.'%')->orWhere('com_serail','like','%'.$search.'%')
    		->orWhere('com_ristax','like','%'.$search.'%')
    		->orWhere('com_ip','like','%'.$search.'%')
    		->orWhere('brand','like','%'.$search.'%')
    		->orWhere ('gen','like','%'.$search.'%')->get();
   
    	return view('showall')->with('shows',$shows);
    }
}
