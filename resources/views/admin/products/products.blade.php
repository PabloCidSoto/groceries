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

@endsection