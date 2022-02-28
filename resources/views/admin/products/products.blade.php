@extends('layouts.grocery')
@section('content')

<div class="banner">
    <div class="jumbotron jumbotron-bg text-center rounded-0" style="background-image: url( '{{ asset('assets/img/bg-header.jpg') }}');">
        <div class="container">
            <h1 class="pt-5">
                Product Management
            </h1>
        </div>
    </div>
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

    @if(session()->get('successUpdate'))
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session()->get('successUpdate') }}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            </div>
        </div>
    </div>
    @endif

    @if(session()->get('successDelete'))
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session()->get('successDelete') }}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            </div>
        </div>
    </div>
    @endif
    <div class="container">
        <div class="table-responsive">
            <table class="table table-striped table-hover">
                <thead>
                  <tr>
                    <th scope="col">Name</th>
                    <th scope="col">Description</th>
                    <th scope="col">Price</th>
                    <th scope="col">Old Price</th>
                    <th scope="col">Quantity</th>
                    <th scope="col">Discount</th>
                    <th scope="col">Category</th>
                    <th scope="col">Actions</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($products as $index => $product)
                        <tr>
                            <td>{{ $product->name }}</td>
                            <td>{{ $product->description }}</td>
                            <td>{{ $product->price }}</td>
                            <td>{{ $product->old_price }}</td>
                            <td>{{ $product->quantity }}</td>
                            <td>{{ $product->discount }}</td>
                            <td>{{ $product->id_category }}</td>
                            <td>
                                <a href="{{ route('edit_product', $product->id_product) }}"><button type="button" class="btn btn-warning mb-3">Edit</button></a>
                                <a href="{{ route('delete_product', $product->id_product) }}"><button type="button" class="btn btn-danger">Delete</button></a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>




@endsection