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
   	 	$question = DB::table('questions')->get();
   	 	//	return $question;
   	 	return view('question',compact('question'));
   	 }
}
