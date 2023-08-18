@extends('master')
@section('title','Add Product')
@section('page')
    <section class="my-5 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-md-8 offset-2">
                    <h1 class="text-center">Add Product</h1>
                    @if (Session::get('notification'))
                      <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{Session::get('notification')}}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                      </div>
                    @endif
                    <form class="p-5 bg-secondary rounded" method="POST" action="{{route('add-Product')}}" enctype="multipart/form-data">
                      @csrf
                      <div class="mb-3">
                          <label class="form-label">Product Title</label>
                          <input type="text" class="form-control" name="title">
                        </div>
                        <div class="mb-3">
                          <label class="form-label">Product Price</label>
                          <input type="text" class="form-control" name="price">
                        </div>
                        <div class="mb-3">
                          <label class="form-label">Product Description</label>
                          <textarea placeholder="desc" name="description" cols="37" rows="3" class="form-control"></textarea>
                        </div>
                        <div class="mb-3">
                          <label class="form-label">Product Color</label>
                          <input type="color" class="form-control" name="color">
                        </div>
                        <div class="mb-3">
                          <label class="form-label">Product Size</label>
                          <select name="size" class="form-select">
                            <option value="">-- Choose Size --</option>
                            <option value="xxl">xxl</option>
                            <option value="xl">xl</option>
                            <option value="l">l</option>
                            <option value="m">m</option>
                            <option value="s">s</option>
                          </select>
                        </div>
                        <div class="mb-3">
                          <label class="form-label">Product Image</label>
                          <input type="file" class="form-control" name="image" accept="image/*">
                        </div>
                        <button type="submit" class="btn btn-primary">Add Product</button>
                      </form>
                </div>
            </div>
        </div>
    </section>
@endsection
