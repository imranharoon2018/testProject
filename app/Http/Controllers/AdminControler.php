<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use App\Http\Requests\VideoSearchRequest;
use App\Video;
use imran\youtube\Youtube;
class AdminControler extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {	
		if (Gate::allows('videos.create'))
			return view('admin');
		else 
			return view('home');
    }
	/**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
	public function searchVideo( VideoSearchRequest $request)
    {	
		
		if (Gate::allows('videos.create')){
			if(!is_null($request->input('q'))){
				$q=$request->input('q');
					
				$results = Youtube::getInstance()->getVideoList($q);
				$videos = array();
				foreach ($results as $a_result) {
					
					$object = new Video;
					$object->thumbnail =  $a_result['snippet']['thumbnails']["default"]->url;
					$object->youtube_id =  $a_result["id"]->videoId;
					$object->description = substr( $a_result["snippet"]->description,0,100)." ...";
					
					$videos[]=$object;
				}
				
			}
			
			return view('admin')->with(compact('videos'));;
		}
		else 
			return view('home');
		
    }
	
	public function addVideo( VideoSearchRequest $request)
    {	
		if (Gate::allows('videos.create')){
			if(!is_null($request->input('q'))){
			$video_ids = $request->input('video_ids');
			if(count($video_ids))
				foreach ($video_ids as $video_id)
				{
					$thumbnail = $request->input("thumbnail_".$video_id);
					$description = $request->input("description_".$video_id);
					$videos[] = [
					
					'youtube_id' =>$video_id,			
					'thumbnail' =>$thumbnail,			
					'description' =>$description	
					
					];
				}
		
				Video::insert($videos);
		
		}
			return view('admin');
		}
		else 
		return view('home');
		
		/* if(!is_null($request->input('q'))){
			$video_ids = $request->input('video_ids');
			if(count($video_ids))
				foreach ($video_ids as $video_id)
				{
					$thumbnail = $request->input("thumbnail_".$video_id);
					$description = $request->input("description_".$video_id);
					$videos[] = [
					
					'youtube_id' =>$video_id,			
					'thumbnail' =>$thumbnail,			
					'description' =>$description	
					
					];
				}
		
				Video::insert($videos);
		
		} */
		
    }
}
