@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                	<h1 class="display-4">Movie List</h1></div>
                	<a href="movies/create" class="display-4 font-weight-bold text-dark">Film</a>
                	<table class="table table-info table-hover table-sm">
						<thead>
							<tr>
								<th>rbr</th>
								<th>Name</th>
								<th>Year</th>
								<th>Rating</th>
								<th>Country</th>
							</tr>
						</thead>
						<tbody>
							@foreach($movies as $movie)
							<tr>
								<td><a href="">{{$loop->iteration}}.</a></td>  	<!-- ispisivanje rednog broja -->
								<td>{{$movie["title"]}}</td>
								<td>{{$movie["year"]}}</td>
								<td>{{$movie["rating"]}}</td>
								<td>{{$movie["country"]}}</td>
							</tr>
							@endforeach
						</tbody>
					</table>
				</div>
            </div>
        </div>
    </div>
</div>
@endsection
