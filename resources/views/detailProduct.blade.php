@extends('layouts.grocery')
@section('content')
    <div class="banner">
        <div class="jumbotron jumbotron-bg text-center rounded-0" style="background-image: url( '{{ asset('assets/img/bg-header.jpg') }}');">
            <div class="container">
                <h1 class="pt-5">
                    {{ $product->name }}
                </h1>
                <p class="lead">
                    Save time and leave the groceries to us.
                </p>
            </div>
        </div>
    </div>
    <div class="product-detail">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="slider-zoom">
                        <a href="{{ asset('assets/img/'.$product->image) }}" class="cloud-zoom" rel="transparentImage: 'data:image/gif;base64,R0lGODlhAQABAID/AMDAwAAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==', useWrapper: false, showTitle: false, zoomWidth:'500', zoomHeight:'500', adjustY:0, adjustX:10" id="cloudZoom">
                            <img alt="Detail Zoom thumbs image" src="{{ asset('assets/img/'.$product->image) }}" style="width: 100%;">
                        </a>
                    </div>

                    <div class="slider-thumbnail">
                        <ul class="d-flex flex-wrap p-0 list-unstyled">
                            <li>
                                <a href="{{ asset('assets/img/meats.jpg') }}" rel="gallerySwitchOnMouseOver: true, popupWin:'{{ asset('assets/img/meats.jpg') }}', useZoom: 'cloudZoom', smallImage: '{{ asset('assets/img/meats.jpg') }}'" class="cloud-zoom-gallery">
                                    <img itemprop="image" src="{{ asset('assets/img/meats.jpg') }}" style="width:135px;">
                                </a>
                            </li>
                            <li>
                                <a href="{{ asset('assets/img/fish.jpg') }}" rel="gallerySwitchOnMouseOver: true, popupWin:'{{ asset('assets/img/fish.jpg') }}', useZoom: 'cloudZoom', smallImage: '{{ asset('assets/img/fish.jpg') }}'" class="cloud-zoom-gallery">
                                    <img itemprop="image" src="{{ asset('assets/img/fish.jpg') }}" style="width:135px;">
                                </a>
                            </li>
                            <li>
                                <a href="{{ asset('assets/img/vegetables.jpg') }}" rel="gallerySwitchOnMouseOver: true, popupWin:'{{ asset('assets/img/vegetables.jpg') }}', useZoom: 'cloudZoom', smallImage: '{{ asset('assets/img/vegetables.jpg') }}'" class="cloud-zoom-gallery">
                                    <img itemprop="image" src="{{ asset('assets/img/vegetables.jpg') }}" style="width:135px;">
                                </a>
                            </li>
                            <li>
                                <a href="{{ asset('assets/img/frozen.jpg') }}" rel="gallerySwitchOnMouseOver: true, popupWin:'{{ asset('assets/img/frozen.jpg') }}', useZoom: 'cloudZoom', smallImage: '{{ asset('assets/img/frozen.jpg') }}'" class="cloud-zoom-gallery">
                                    <img itemprop="image" src="{{ asset('assets/img/frozen.jpg') }}" style="width:135px;">
                                </a>
                            </li>
                        </ul>
                    </div>

                </div>
                <div class="col-sm-6">
                    <p>
                        <strong>Overview</strong><br>
                        {{ $product->description }}
                    </p>
                    <div class="row">
                        <div class="col-sm-6">
                            <p>
                                <strong>Price</strong> (/Pack)<br>
                                <span class="price">{{ $product->price }}</span>
                                <span class="old-price">{{ $product->old_price }}</span>
                            </p>
                        </div>
                        <div class="col-sm-6 text-right">
                            <p>
                                <span class="stock available">In Stock: {{ $product->quantity }}</span>
                            </p>
                        </div>
                    </div>
                    <p class="mb-1">
                        <strong>Quantity</strong>
                    </p>
                    <div class="row">
                        <div class="col-sm-5">
                            <input class="vertical-spin" type="text" data-bts-button-down-class="btn btn-primary" data-bts-button-up-class="btn btn-primary" value="" name="vertical-spin">
                        </div>
                        <div class="col-sm-6"><span class="pt-1 d-inline-block">Pack (250 gram)</span></div>
                    </div>

                    <button class="mt-3 btn btn-primary btn-lg">
                        <i class="fa fa-shopping-basket"></i> Add to Cart
                    </button>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        @if(session()->get('success'))
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session()->get('success') }}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        @endif
        <h2 class="title">Send a Comment</h2>
        <form class="form-horizontal" action="{{ route('store_comment', $product->id_product) }}"  method="post">
            @csrf
            <div class="form-group row mt-3">
                <div class="col-md-12 mb-3">
                    <input class="form-control" type="text" required="" name="commenter" placeholder="Name" value="">
                </div>
                <div class="col-md-12 mb-3">
                    <input class="form-control" type="text" required="" name="email" placeholder="email" value="">
                </div>
                <div class="col-md-12">
                    <textarea class="form-control" type="textArea" name="comment" required="" placeholder="comment" ></textarea>
                </div>
            </div>
            <div class="form-group row text-center mt-4">
                <div class="col-md-12">
                    <button type="submit" class="btn btn-primary btn-block text-uppercase">Register</button>
                </div>
            </div>
        </form>
    </div>
    <div class="container">
        @if (count($product->comments)>0)
        <h2 class="title">Comments</h2>

        @foreach ($product->comments as $comment)
        <p>
            <strong>{{ $comment->commenter }}</strong> {{ $comment->email }} Commented at: {{ $comment->created_at }} <br>
            {{ $comment->comment }}
        </p>
        

            
        @endforeach
        {{-- id
            comment
            commenter
            email
            product_id
            created_at
            updated_at 
             --}}
        @else
        <h2 class="title">0 comments</h2>
        

        @endif
    </div>
        

        

    <section id="related-product">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="title">Related Products</h2>
                    <div class="product-carousel owl-carousel">
                        <div class="item">
                            <div class="card card-product">
                                <div class="card-ribbon">
                                    <div class="card-ribbon-container right">
                                        <span class="ribbon ribbon-primary">SPECIAL</span>
                                    </div>
                                </div>
                                <div class="card-badge">
                                    <div class="card-badge-container left">
                                        <span class="badge badge-default">
                                            Until 2018
                                        </span>
                                        <span class="badge badge-primary">
                                            20% OFF
                                        </span>
                                    </div>
                                    <img src="{{ asset('assets/img/meats.jpg') }}" alt="Card image 2" class="card-img-top">
                                </div>
                                <div class="card-body">
                                    <h4 class="card-title">
                                        <a href="detail-product.html">Product Title</a>
                                    </h4>
                                    <div class="card-price">
                                        <span class="discount">Rp. 300.000</span>
                                        <span class="reguler">Rp. 200.000</span>
                                    </div>
                                    <a href="detail-product.html" class="btn btn-block btn-primary">
                                        Add to Cart
                                    </a>

                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="card card-product">
                                <div class="card-ribbon">
                                    <div class="card-ribbon-container right">
                                        <span class="ribbon ribbon-primary">SPECIAL</span>
                                    </div>
                                </div>
                                <div class="card-badge">
                                    <div class="card-badge-container left">
                                        <span class="badge badge-default">
                                            Until 2018
                                        </span>
                                        <span class="badge badge-primary">
                                            20% OFF
                                        </span>
                                    </div>
                                    <img src="{{ asset('assets/img/fish.jpg') }}" alt="Card image 2" class="card-img-top">
                                </div>
                                <div class="card-body">
                                    <h4 class="card-title">
                                        <a href="detail-product.html">Product Title</a>
                                    </h4>
                                    <div class="card-price">
                                        <span class="discount">Rp. 300.000</span>
                                        <span class="reguler">Rp. 200.000</span>
                                    </div>
                                    <a href="detail-product.html" class="btn btn-block btn-primary">
                                        Add to Cart
                                    </a>

                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="card card-product">
                                <div class="card-ribbon">
                                    <div class="card-ribbon-container right">
                                        <span class="ribbon ribbon-primary">SPECIAL</span>
                                    </div>
                                </div>
                                <div class="card-badge">
                                    <div class="card-badge-container left">
                                        <span class="badge badge-default">
                                            Until 2018
                                        </span>
                                        <span class="badge badge-primary">
                                            20% OFF
                                        </span>
                                    </div>
                                    <img src="{{ asset('assets/img/vegetables.jpg') }}" alt="Card image 2" class="card-img-top">
                                </div>
                                <div class="card-body">
                                    <h4 class="card-title">
                                        <a href="detail-product.html">Product Title</a>
                                    </h4>
                                    <div class="card-price">
                                        <span class="discount">Rp. 300.000</span>
                                        <span class="reguler">Rp. 200.000</span>
                                    </div>
                                    <a href="detail-product.html" class="btn btn-block btn-primary">
                                        Add to Cart
                                    </a>

                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="card card-product">
                                <div class="card-ribbon">
                                    <div class="card-ribbon-container right">
                                        <span class="ribbon ribbon-primary">SPECIAL</span>
                                    </div>
                                </div>
                                <div class="card-badge">
                                    <div class="card-badge-container left">
                                        <span class="badge badge-default">
                                            Until 2018
                                        </span>
                                        <span class="badge badge-primary">
                                            20% OFF
                                        </span>
                                    </div>
                                    <img src="{{ asset('assets/img/frozen.jpg') }}" alt="Card image 2" class="card-img-top">
                                </div>
                                <div class="card-body">
                                    <h4 class="card-title">
                                        <a href="detail-product.html">Product Title</a>
                                    </h4>
                                    <div class="card-price">
                                        <span class="discount">Rp. 300.000</span>
                                        <span class="reguler">Rp. 200.000</span>
                                    </div>
                                    <a href="detail-product.html" class="btn btn-block btn-primary">
                                        Add to Cart
                                    </a>

                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="card card-product">
                                <div class="card-ribbon">
                                    <div class="card-ribbon-container right">
                                        <span class="ribbon ribbon-primary">SPECIAL</span>
                                    </div>
                                </div>
                                <div class="card-badge">
                                    <div class="card-badge-container left">
                                        <span class="badge badge-default">
                                            Until 2018
                                        </span>
                                        <span class="badge badge-primary">
                                            20% OFF
                                        </span>
                                    </div>
                                    <img src="assets/img/fruits.jpg" alt="Card image 2" class="card-img-top">
                                </div>
                                <div class="card-body">
                                    <h4 class="card-title">
                                        <a href="detail-product.html">Product Title</a>
                                    </h4>
                                    <div class="card-price">
                                        <span class="discount">Rp. 300.000</span>
                                        <span class="reguler">Rp. 200.000</span>
                                    </div>
                                    <a href="detail-product.html" class="btn btn-block btn-primary">
                                        Add to Cart
                                    </a>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection