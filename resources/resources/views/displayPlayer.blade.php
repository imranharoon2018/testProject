@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"></div>

                <div class="card-body align-items-center"  >
					
					<iframe style="width:100%" height="315"
						src="https://www.youtube.com/embed/{{ $youtube_id }}">
					</iframe>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
