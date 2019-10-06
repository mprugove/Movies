@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                	<h1 class="display-4">Create new movie</h1></div>
                    @if(session()->has('message')) 
                        <div class="alert alert-success"> 
                            {{ session()->get('message') }} 
                        </div> 
                    @endif  
                    <form method="POST" action="store">
                        @csrf
                		<div class="form-group">
                            <label class="font-weight-bold">Title</label>
                			<input type="text" name="title" class="form-control" >
                			<label class="font-weight-bold">Year</label>
                			<input type="text" name="year" class="form-control">
                			<label class="font-weight-bold">Rating</label>
                			<input type="text" name="rating" class="form-control">
                			<label class="font-weight-bold">Country</label>
                			<input type="text" name="country" class="form-control">
                			<br/>
                			<input type="submit" value="Submit" class="btn btn-primary">
                        </div>
                	</form>

                @if ($errors->any()) 
                    <div class="alert alert-danger"> 
                    <ul> 
                        @foreach ($errors->all() as $error) 
                            <li>{{ $error }}</li> 
                        @endforeach 
                    </ul> 
                    </div> 
                @endif

                
            	 </div>
            </div>
        </div>
    </div>
</div>
@endsection
