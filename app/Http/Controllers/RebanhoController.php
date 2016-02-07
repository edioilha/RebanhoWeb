<?php

namespace rebanhoweb\Http\Controllers;

use DB;
use Request;
use Auth;

use rebanhoweb\Http\Requests;
use rebanhoweb\Http\Controllers\Controller;

class RebanhoController extends Controller
{
    public function __construct()
	{
		$this->middleware('auth');
	}
	
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
