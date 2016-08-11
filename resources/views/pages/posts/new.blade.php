@extends('layouts.app')

@section('content')



<div class="container">
<div class="row">

            <!-- Blog Post Content Column -->
            <div class="col-lg-8">

                <div class="panel panel-info">
            <div class="panel-heading">
            
            {!! Form::open(['method'=>'POST', 'action' => 'HomeController@storePost']) !!}  
            </div>
            <div class="panel-body">
              <div class="row">
              {!! Form::hidden('user_id', Auth::user()->id ) !!}

              {!! Form::label('Title', null) !!}
              {!! Form::text('title', null, ['class'=>'form-control']) !!}
              {!! Form::label('Excerpt of the Post', null) !!}
              {!! Form::textarea('excerpt', null, ['class'=>'form-control']) !!}
              {!! Form::label('Body of the Post', null) !!}
              {!! Form::textarea('body', null, ['class'=>'form-control']) !!}
              <p></p><p></p>
              {!! Form::submit('Submit', array('class' => 'btn btn-sm btn-success'));!!}
              </div>
            </div>
            {!! Form::close() !!}
</div>
<!-- /.row -->	   
</div>
<!-- /.container -->	  



@endsection