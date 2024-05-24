<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SayItController extends Controller
{
    public function index(Request $req) {
	return view('sayit');
}

    public function error(Request $req) {
	$code= $req->query('error');
	$msg= "Unexpected Error";
   	   if ($code=='db_connect') {
		$msg= "Error connecting to database.";
	   }



	return view('error', [
		'error_msg' => $msg
	]);
    }
}
