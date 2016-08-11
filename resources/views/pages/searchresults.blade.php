@extends('layouts.app')

@section('content')

	<div class="container">
        

    <div class="row">    
        <div class="col-md-6 col-md-offset-2" style="margin: 20px;">
            <form action="/search" method="POST" role="search">
                {{ csrf_field() }}
                <div class="input-group">
                    <input type="text" class="form-control" name="q"
                        placeholder="Search Posts"> <span class="input-group-btn">
                        <button type="submit" class="btn btn-default">
                            <span class="glyphicon glyphicon-search"></span>
                        </button>
                    </span>
                </div>
            </form>
        </div>
    </div>   

    <div class="row" style="margin-left: 20px;">
        <a href="{{ route('posts.add') }}" class="btn btn-lg btn-success">Add Post</a>
    </div> 

    <p></p>
    <p></p>

    <h1>Search results: <i style="font-size: 25px;">{!! $q !!}</i></h1>
    <p style="margin-bottom: 50px;"></p>
        @forelse($posts as $post)

         
                <h1>{{ $post->title }}</h1>

                <!-- Author -->
                <p class="lead">
                    by <a href="{{ route('profile.show', $post->user->id) }}">{{ $post->user->name }}</a>
                    &nbsp&nbsp
                    <!-- <span class="glyphicon glyphicon-time"></span> Posted on August 24, 2013 at 9:00 PM -->
                    <span class="glyphicon glyphicon-time"></span> 
                    Posted on {{ $post->created_at->format('F j, Y \a\t\  g:i A') }}
                </p>

                <hr>

                <!-- Post Content -->
                <p class="lead">{{ $post->excerpt }}&nbsp&nbsp&nbsp <a href="{{ route('post.show', $post->id) }}">Read more</a></p> 

                <hr><hr><hr>
  
             @empty
                    <ul>
                        <li>There is nothing in there, please fill in.</li>
                    </ul>
                @endforelse

                </div>
                </div>

        </div>
        <!-- /.row -->	   

	</div>



	<div class="text-center">		
		{{ $posts->render() }}
	</div>

@stop