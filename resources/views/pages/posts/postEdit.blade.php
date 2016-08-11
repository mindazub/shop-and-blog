@extends('layouts.app')

@section('content')



<div class="container">
<div class="row">

            <!-- Blog Post Content Column -->
            <div class="col-lg-8">

                <div class="panel panel-info">
            <div class="panel-heading">
            {!! Form::model($post, array('method' => 'PATCH', 'route' => array('post.update', $post->id))) !!}
              <h3 class="panel-title">{{ $post->title }} | EDIT POST&nbsp&nbsp<button type="submit" class="btn btn-sm btn-success pull-right" style="color: white;"><!-- <i class="glyphicon glyphicon-ok"> -->OK</button></h3>
            </div>
            <div class="panel-body">
              <div class="row">
              {!! Form::label('Title', null) !!}
              {!! Form::text('title', null, ['class'=>'form-control']) !!}
              {!! Form::label('Excerpt of the Post', null) !!}
              {!! Form::textarea('excerpt', null, ['class'=>'form-control']) !!}
              {!! Form::label('Body of the Post', null) !!}
              {!! Form::textarea('body', null, ['class'=>'form-control']) !!}

              </div>
            </div>
            {!! Form::close() !!}
</div>
<!-- /.row -->	   
</div>
<!-- /.container -->	  



@endsection