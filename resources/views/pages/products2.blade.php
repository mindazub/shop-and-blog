@extends('layouts.app')

@section('content')

	            <div class="container">

        <div class="row">

            <div class="col-md-3">
                <p class="lead">Shop Name</p>
                <div class="list-group">
                    <a href="#" class="list-group-item">Category 1</a>
                    <a href="#" class="list-group-item">Category 2</a>
                    <a href="#" class="list-group-item">Category 3</a>
                </div>
            </div>

            <div class="col-md-9">

                <div class="row carousel-holder">

                    <div class="col-md-12">
                        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                            </ol>
                            <div class="carousel-inner">
                                <div class="item active">
                                    <img class="slide-image" src="/pictures/111.jpg" alt="">
                                </div>
                                <div class="item">
                                    <img class="slide-image" src="/pictures/222.jpg" alt="">
                                </div>
                                <div class="item">
                                    <img class="slide-image" src="/pictures/333.jpg" alt="">
                                </div>
                            </div>
                            <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                                <span class="glyphicon glyphicon-chevron-left"></span>
                            </a>
                            <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                                <span class="glyphicon glyphicon-chevron-right"></span>
                            </a>
                        </div>
                    </div>

                </div>

                <div class="row">
                    @forelse($products as $product)
                    <div class="col-sm-4 col-lg-4 col-md-4">

                        <p></p>
                    
                        <div class="thumbnail">
                            <img src="http://lorempixel.com/240/120/business/{{ $product->id }} " alt="">
                            <div class="caption">
                                <h4 class="pull-right">${{ $product->price }}</h4>
                                <h4><a href="#">{{ $product->brand }}</a>
                                </h4>
                                <h6><a href="#">{{ $product->model_number }}</a>
                                </h6>
                                <!-- <p>See more snippets like this online store item at <a target="_blank" href="http://www.bootsnipp.com">Bootsnipp - http://bootsnipp.com</a>.</p> -->
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

                    <h1>No products, folks! </h1>

                    @endforelse

                </div>

            </div>

        </div>

    </div>
    <!-- /.container -->

    <div class="text-center">       
        {{ $products->render() }}

    </div>

    <div class="container">

        <hr>

        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; Your Website 2014</p>
                </div>
            </div>
        </footer>

    </div>
    <!-- /.container -->


@stop