@extends('layouts.grocery')
@section('content')
    <div class="banner">
        <div class="jumbotron jumbotron-bg text-center rounded-0" style="background-image: url('assets/img/bg-header.jpg');">
            <div class="container">
                <h1 class="pt-5">
                    Shopping Page
                </h1>
                <p class="lead">
                    Save time and leave the groceries to us.
                </p>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="shop-categories owl-carousel mt-5">
                    @foreach ($categories as $index => $category)
                    <div class="item">
                        <a href="shop.html">
                            <div class="media d-flex align-items-center justify-content-center">
                                <span class="d-flex mr-2"><i class="{{ $category->icon }}"></i></span>
                                <div class="media-body">
                                    <h5>{{ $category->name }}</h5>
                                    <p>{{ $category->description }}</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

    <section id="most-wanted">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="title">Most Wanted</h2>
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
                                    <img src="assets/img/meats.jpg" alt="Card image 2" class="card-img-top">
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
                                    <img src="assets/img/fish.jpg" alt="Card image 2" class="card-img-top">
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
                                    <img src="assets/img/vegetables.jpg" alt="Card image 2" class="card-img-top">
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
                                    <img src="assets/img/frozen.jpg" alt="Card image 2" class="card-img-top">
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


    @foreach ($categories as $index => $category)
    <section id="{{ $category->name }}"  @if ($index%2 == 0) class="gray-bg" @endif >
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="title">{{ $category->name }}</h2>
                    <div class="product-carousel owl-carousel">
                        @foreach ($category->products as $index => $item)
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
                                            {{ $item->discount }}% OFF
                                        </span>
                                    </div>
                                    <img src="assets/img/{{ $item->image}}" alt="Card image 2" class="card-img-top">
                                </div>
                                <div class="card-body">
                                    <h4 class="card-title">
                                        <a href="{{ route('product_details', $item->id_product) }}">{{ $item->name }}</a>
                                    </h4>
                                    <div class="card-price">
                                        <span class="discount">{{ $item->price }}</span>
                                        <span class="reguler">{{ $item->price - ($item->price * $item->discount / 100) }}</span>
                                    </div>
                                    <a href="{{ route('product_details', $item->id_product) }}" class="btn btn-block btn-primary">
                                        Add to Cart
                                    </a>

                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
    @endforeach

@endsection