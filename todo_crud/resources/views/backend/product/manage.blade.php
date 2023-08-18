@extends('master')
@section('title','Manage Product')
@section('page')
    <section class="my-5 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-md-8 offset-2">
                    <h1 class="text-center">Manage Product</h1>
                    @if (Session::get('notification'))
                      <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{Session::get('notification')}}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                      </div>
                    @endif
                    <table class="table mt-4 table-bordered table-striped table-hover"  >
                        <thead >
                            <tr >
                                <th scope="col">ID</th>
                                <th scope="col">Title</th>
                                <th scope="col">Price</th>
                                <th scope="col">Description</th>
                                <th scope="col">Color</th>
                                <th scope="col">Size</th>
                                <th scope="col">Image</th>
                                <th scope="col">Opereation</th>

                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($products as $product)
                                <tr>
                                    <td>{{$product->id}}</td>
                                    <td>{{$product->title}}</td>
                                    <td>{{$product->price}}</td>
                                    <td>{{$product->description}}</td>
                                    <td>{{$product->color}}</td>
                                    <td>{{$product->size}}</td>
                                    <td>
                                        <img src="{{ asset($product->image) }}" class="img-fluid" style="height: 50px;width: 50px" alt="">
                                    </td>
                                    <td>
                                        <button name="update" type="button" class="btn btn-primary">
                                            <a class="text-light " href="{{route('update-Product',['id'=>$product->id])}}">Update</a>
                                            </button>
                                            <button name="delete" type="button" class="btn btn-danger">
                                            <a class="text-light " href="{{route('delete-Product',['id'=>$product->id])}}">Delete</a>
                                            </button>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
@endsection
