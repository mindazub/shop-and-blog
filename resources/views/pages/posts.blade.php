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

        @forelse($posts as $post)

         
                <h1>{{ $post->title }}</h1>

                <!-- Author -->
                <p class="lead">
                    by <a href="{{ route('profile.show', $post->user->id) }}">{{ $post->user->name }}</a>
                    &nbsp&nbsp
                    <span class="glyphicon glyphicon-time"></span> Posted on August 24, 2013 at 9:00 PM
                </p>

                <!-- <hr> -->

                <!-- Date/Time -->
                <!-- <p></p>                 -->

                <!-- Preview Image -->
                <!-- <img class="img-responsive" src="http://placehold.it/900x300" alt=""> -->

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