<?php

namespace rebanhoweb\Http\Controllers;

use Request;
use Auth;

use rebanhoweb\Http\Requests;
use rebanhoweb\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function __construct()
	{
		$this->middleware('auth');
	}
	
	public function index()
	{
		return view('dashboard.index');
	}
}
