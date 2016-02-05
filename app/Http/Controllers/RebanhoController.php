<?php

namespace rebanhoweb\Http\Controllers;

use DB;
use Request;

use rebanhoweb\Http\Requests;
use rebanhoweb\Http\Controllers\Controller;

class RebanhoController extends Controller
{
    public function index()
	{
		return view('rebanho.index');
	}
	
	public function vacas()
	{
		return view('rebanho.vacas');
	}
	
	public function bois()
	{
		return view('rebanho.bois');
	}
	
	public function terneiros()
	{
		return view('rebanho.terneiros');
	}	
}
