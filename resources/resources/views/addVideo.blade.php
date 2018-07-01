@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
				<form action="{{url('addVideo')}}" method="POST" >
					@csrf
					<table>
						
						<tr>
							<td>Search Video:</td><td><input type="text" value=""  id="q"  name="q" ></td><td><input type="submit" class="btn" value="Search"/></td>
						</tr>
					</table>
				</form>
				
				<input type="checkbox" id="inlineCheckbox1" name="my_checkbox[]" value="option1"> 1
				<input type="checkbox" id="inlineCheckbox2" name="my_checkbox[]" value="option2"> 2
				<input type="checkbox" id="inlineCheckbox3" name="my_checkbox[]" value="option3"> 3
				

                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
