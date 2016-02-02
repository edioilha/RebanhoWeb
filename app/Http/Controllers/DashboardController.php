<?php

namespace rebanhoweb\Http\Controllers;

use Illuminate\Http\Request;

use rebanhoweb\Http\Requests;
use rebanhoweb\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function index()
	{
		return view('dashboard.index');
	}
}
