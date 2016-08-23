@extends('layouts.app')

@section('content')

<div class="container">
	<div class="row text-center">
		<h1>FORUM is HERE!</h1>
	</div>
</div>


<div class="container">
	<div class="row">    
        <div class="col-md-6 col-md-offset-3">
            <form action="/search" method="POST" role="search">
                {{ csrf_field() }}
                <div class="input-group">
                    <input type="text" class="form-control" name="q"
                        placeholder="Search Forum"> <span class="input-group-btn">
                        <button type="submit" class="btn btn-default">
                            <span class="glyphicon glyphicon-search"></span>
                        </button>
                    </span>
                </div>
            </form>
        </div>
    </div>
</div>

<div class="container">
	
		<div class="col-md-2">
			<div class="row">
				<div class="panel panel-primary">
				  <!-- <div class="panel-heading">
				    <h3 class="panel-title">Panel title</h3>
				  </div> -->
				  <div class="panel-body">
				    <div class="panel ">General</div>
				    <div class="panel">Technical</div>
				    <div class="panel ">Ecommerce</div>
				    <div class="panel ">Personal</div>
				  </div>
				</div>
			</div>
		</div>
	

	<div class="col-md-10">
		<div class="row">
			<div class="col-md-12">
				<a href="#" class="btn btn-lg btn-success">Ask on Forum</a>
			</div>
		</div>
		<p></p>
		<p></p>
		<div class="row">
			<div class=" col-md-10 col-offset-1">
				<div class="panel panel-primary">
				  <div class="panel-heading">
				    <h3 class="panel-title">Panel title</h3>
				  </div>
				  <div class="panel-body">
				    Panel content
				  </div>
				</div>
			</div>
		</div>
	</div>
</div>




@endsection