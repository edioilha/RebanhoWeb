<?php

namespace rebanhoweb\Http\Controllers;

use DB;
use Request;
use Auth;

use rebanhoweb\Http\Requests;
use rebanhoweb\Http\Controllers\Controller;

class SanidadeController extends Controller
{
    public function __construct()
	{
		$this->middleware('auth');
	}
}
