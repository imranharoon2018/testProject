<?php

namespace App\Http\Controllers;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use  App\Http\Requests\VideoSearchRequest;
use  App\Video;
use imran\youtube\Youtube;

class PlayerController extends Controller
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
     * 
     * @return \Illuminate\Http\Response
     */
    public function displayPlayer(Request $request,$youtube_id)
    {
		//$user = Auth::user();
		//var_dump($user);
			//Gate::allows('videos.view');
			//echo "nothin"; exit();
	//if (Gate::allows('videos.create'))
	
	
	
			if(isset($youtube_id)){	
				$viewCount = Youtube::getInstance()->getViewCount($youtube_id);
				if($viewCount > 100000){
			
					$user= Auth::user();
					if(!isset($user))
						return view('auth.login')->with('youtube_id',$youtube_id);
					else 
						return view('displayPlayer')->with('youtube_id',$youtube_id);	
					
				}else 
					return view('displayPlayer')->with('youtube_id',$youtube_id);
			}
			else {
				return view('welcome');
			}
    }
}
