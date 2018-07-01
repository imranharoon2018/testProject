<?php

namespace imran\youtube;



class Youtube{
	 protected   $DEVELOPER_KEY = 'AIzaSyAjqsGHmwQ3U6vv_pUM96huP-i4VXjPGHg';
	 protected   $client; //= new \Google_Client();
	 protected   $youtube; //= new Google_Service_YouTube($client);
	 
	 private static $instance;

		private function __construct(){
		
			$this->client=new \Google_Client();			
			$this->client->setDeveloperKey($this->DEVELOPER_KEY);
			$this->youtube = new \Google_Service_YouTube($this->client);
		}

		public static function getInstance(){
			if ( is_null( self::$instance ) )
			{
			  self::$instance = new self();
			}
			return self::$instance;
		}

		public function getViewCount($videoID){
			
			$json = file_get_contents("https://www.googleapis.com/youtube/v3/videos?part=statistics&id=" . $videoID . "&key=$this->DEVELOPER_KEY");
			 $jsonData = json_decode($json);
			 $views = $jsonData->items[0]->statistics->viewCount;
			 return ($views);
	
		}

		public function getVideoList($q){
			return $this->youtube->search->listSearch('id,snippet', array('q' => $q,'maxResults' => 5,'type' =>'video'
			));
		}
	
}