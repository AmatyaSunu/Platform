<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
// use App\question;

class homeController extends Controller
{
   public function index()
    	{
     		 return view('welcome');
   	 }
   	 public function question()
   	 {
   	 	for($i=1;$i<=2;$i++){
   	 	$question = DB::table('questions')->where('id',$i)->get();

   	 	//return $question;
   	 	return view('question',compact('question'));
   	 }
   	 }
}
