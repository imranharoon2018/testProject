@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
				<form action="{{url('searchVideo')}}" method="POST" >
					@csrf
					<table>
						
						<tr>
							<td>Search Video:</td><td><input type="text" value=""  id="q"  name="q" ></td><td><input type="submit" class="btn" value="Search"/></td>
						</tr>
					</table>
				</form>
				<div class="panel panel-default">
				<form action="{{url('addVideo')}}" method="POST" >
					@csrf

					@if (isset($videos))
						@if (count($videos)==0)
							<p>&nbsp</p>
						@else
							<table class="table">
							<tr>
								   <th>Select</th>
								   <th>Thumbnail</th>
								   <th>Description</th>
								 </tr>
								@foreach ($videos as $video)
								
									<tr>
										<td>
											<input type="checkbox" id="videoId{!! $video->youtube_id !!}" name="video_ids[]" value="{!! $video->youtube_id !!}"/>
										</td>
										<td>
											<img src ="{!! $video->thumbnail !!}"/><input type="hidden" id= "thumbnail_{!! $video->youtube_id !!}" name ="thumbnail_{!! $video->youtube_id !!}"  value="{!! $video->thumbnail !!}"/>
										</td>
										<td>
											<p>{!! $video->description !!}</p><input type="hidden" id= "description_{!! $video->youtube_id !!}" name ="description_{!! $video->youtube_id !!}"  value="{!! $video->description !!}"/>
										</td>
										
											
									</tr>
								@endforeach
							</table>
							<input type="submit" class="btn" value="Save"/>
						@endif
					@endif
	
				
					
				</form>

                    
                </div>
               </div>
            </div>
        </div>
    </div>
</div>
@endsection
