@extends('layouts.app')

@section('content')

	<div class="container">

@forelse($products as $product)
	<div class="col-sm-4 col-lg-4 col-md-4">
                        <div class="thumbnail">
                            <img src="http://placehold.it/320x150" alt="">
                            <div class="caption">
                                <h4 class="pull-right">${{ $product->price }}</h4>
                                <h4><a href="#">{{ $product->brand }}</a>
                                </h4>
                                <h6><a href="#">{{ $product->model_number }}</a>
                                </h6>
                                <p>See more snippets like this online store item at <a target="_blank" href="http://www.bootsnipp.com">Bootsnipp - http://bootsnipp.com</a>.</p>
                            </div>
                            <div class="ratings">
                                <p class="pull-right">15 reviews</p>
                                <p>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                </p>
                            </div>
                        </div>
                    </div>

		@empty
			<ul>
				<li>There is nothing in there, please fill in.</li>
			</ul>
		@endforelse
	</div>

	<div class="text-center">		
		{{ $products->render() }}
	</div>

@stop