<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use App\Computer;
use App\History;

class DeleteController extends Controller {
   public function index_del(){
      $shows = DB::select('select * from Computers');
      return view('showall',['shows'=>$shows]);
   }
   public function destroy($id) {
      DB::delete('delete from Computers where id = ?',[$id]);
      
   }
}