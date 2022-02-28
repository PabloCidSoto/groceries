@extends('layouts.grocery')
@section('content')
    <div class="banner">
        <div class="jumbotron jumbotron-bg text-center rounded-0" style="background-image: url('{{ asset('assets/img/bg-header.jpg') }}');">
            <div class="container">
                <h1 class="pt-5">
                    Update Page
                </h1>
                <p class="lead">
                    Save time and leave the groceries to us.
                </p>

                <div class="card card-login mb-5">
                    <div class="card-body">
                        <form class="form-horizontal" action="{{ route('update_product', $product->id_product) }}"  method="post">
                            @csrf
                            <div class="form-group row mt-3">
                                <div class="col-md-12">
                                    <input class="form-control" type="text" required="" name="name" placeholder="Name" value="{{ $product->name }}">
                                </div>
                            </div>
                            <div class="form-group row mt-3">
                                <div class="col-md-12">
                                    <textarea class="form-control" type="textArea" name="description" required="" placeholder="Description" >{{ $product->description }}</textarea>
                                </div>
                            </div>
                            <div class="form-group row mt-3">
                                <div class="col-md-12">
                                    <input class="form-control" type="number" name="price" required="" placeholder="Price" value="{{ $product->price }}">
                                </div>
                            </div>
                            <div class="form-group row mt-3">
                                <div class="col-md-12">
                                    <input class="form-control" type="number" name="old_price" required="" placeholder="Old Price" value="{{ $product->old_price }}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-12">
                                    <input class="form-control" type="number" name="discount" required="" placeholder="discount" value="{{ $product->discount }}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-12">
                                    <input class="form-control" type="number" name="quantity" required="" placeholder="quantity" value="{{ $product->quantity }}">
                                </div>
                            </div>
                            <div class="form-group row mt-3">
                                <div class="col-md-12">
                                    <select class="form-control" id="category" name="id_category">
                                        @foreach ($categories as $index => $category)
                                            <option value="{{ $index }}" @if ($index == $product->id_category) selected="selected" @endif>{{ $category }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row mt-3">
                                <div class="col-md-12">
                                    <select class="form-control" id="category" name="image">
                                        <option value="meats.jpg">meats.jpg</option>
                                        <option value="fish.jpg">fish.jpg</option>
                                        <option value="frozen.jpg">frozen.jpg</option>
                                        <option value="fruits.jpg">fruits.jpg</option>
                                        <option value="vegetables.jpg">vegetables.jpg</option>
                                        <option value="package.jpg">package.jpg</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row text-center mt-4">
                                <div class="col-md-12">
                                    <button type="submit" class="btn btn-primary btn-block text-uppercase">Register</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection