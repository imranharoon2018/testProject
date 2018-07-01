<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
	<link href="{{ asset('css/app.css') }}" rel="stylesheet">
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/welcome') }}">Home</a>
                    @else
                      
                    @endauth
                </div>
            @endif

            <div class="content">
             @if (isset($videos))
						@if (count($videos)==0)
							<p>No Videos Added Yet</p>
						@else
							<table class="table">
							<tr>
								  
								  
								   <th>Thumbnail</th>
								   <th>Description</th>
								 </tr>
								@foreach ($videos as $video)
								
									<tr>
										
										<td>
										<a 
										href="{{ url('/displayPlayer') }}/youtube_id/{!! $video->youtube_id !!}">	
										<img src ="{!! $video->thumbnail !!}"/> </a>
										</td>
										<td>
											<p>{!! $video->description !!}</p>
										</td>
										
											
									</tr>
								@endforeach
							</table>
							
						@endif
					@endif
            </div>
        </div>
    </body>
</html>
