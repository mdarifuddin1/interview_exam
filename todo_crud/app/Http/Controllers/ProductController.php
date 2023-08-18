<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    function create(){
        return view('backend.product.add');
    }

    public function manage()
    {
        return view('backend.product.manage',['products'=>Product::all()]);
    }

    public function update($id)
    {

        $product = Product::find($id);
        return view('backend.product.update',['product'=>$product]);

    }
    public function edit(Request $request)
    {

        $product = Product::find($request->id);

        $product->title       = $request->title;
        $product->price       = $request->price;
        $product->description = $request->description;
        $product->color       = $request->color;
        $product->size        = $request->size;

        $product->save();

        return redirect()->route('manage-Product')->with('notification', 'Product updated successfully');

    }

    // Add Product To Database
    public function store(Request $request)
    {
        $image = $request->image;
        $imageExtention = $image->getClientOriginalExtension();
        $imgName ='product-image'.time().'.'.$imageExtention;
        $image->move(public_path('/product-images'),$imgName);
        $productImage ='product-images/'.$imgName;

        $product = new Product();
        $product->title       = $request->title;
        $product->price       = $request->price;
        $product->description = $request->description;
        $product->color       = $request->color;
        $product->size        = $request->size;
        $product->image       = $productImage;
        $product->save();

        return back()->with('notification','Product Added Successfully');

    }

    public function delete($id)
    {
        $product = Product::find($id);
        $product->delete();
        return back()->with('notification','Product Deleted Successfully');
    }
}
