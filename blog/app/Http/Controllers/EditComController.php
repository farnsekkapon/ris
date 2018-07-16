<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use App\Computer;


class EditComController extends Controller
{
    public function editcom($id){
        //get post data by id
        $data = Computer::find($id);
        //load form view
        return view('editcom', compact('data'));
    }
     public function updatecom($id, Request $request){
     	$data = Computer::find($id);
     	$data->com_name=$request->com_name;
    	$data->com_serail=$request->com_serail;
    	$data->com_ristax=$request->com_ristax;
    	$data->com_ip=$request->com_ip;
    	$data->brand=$request->brand;
    	$data->gen=$request->gen;
    	$data->update();
        return view('editcom', compact('data'));
    }
}
