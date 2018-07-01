<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use  App\Http\Requests\VideoSearchRequest;
use  App\Video;

class WellcomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
       
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
			$videos = Video::all();
		
			return view('welcome')->with(compact('videos'));
    }
}
