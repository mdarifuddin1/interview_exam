@extends('master')
@section('title', 'Home')
@section('page')
    <section class="py-5">
        <div class="container mb-2">
            <h1 class="text-center mb-3">New Product</h1>
            <div class="row">
                @foreach ($products as $product)
                    <div class="col-md-4 mb-4"> 
                        <div class="card" style="width: 18rem;">
                            <img src="{{ asset($product->image) }}" alt="image">
                            <div class="card-body">
                                <h5 class="card-title">{{$product->title}}</h5>
                                <span>Price {{$product->price}}Tk</span><br>
                                <span>Size: {{$product->size}}</span>
                                <p class="card-text">{{$product->description}}</p>
                                <a href="#" class="btn btn-primary"> Buy Now</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
