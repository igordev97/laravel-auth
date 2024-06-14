<?php

namespace App\Http\Controllers;

use App\Models\ProductModel;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    //

    public function createNewProduct(Request $request){
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'amount' => 'required',
            'price' => 'required',
            'category' => 'required',
            'img' => 'required',
        ]);

        $imgName = time().'.'.$request->img->extension();
        $request->img->move(public_path('images'), $imgName);

        ProductModel::create([
            'name'=>$request->get('name'),
            'description'=>$request->get('description'),
            'amount'=>$request->get('amount'),
            'price'=>$request->get('price'),
            'category'=>$request->get('category'),
            'img'=>$imgName,
        ]);

        session()->flash('success', 'Product added successfully');
        return redirect()->back();
    }


    public function singleProduct(ProductModel $product)
    {
        $title="$product->name";

        return view('single-product',compact('product','title'));
    }

    public function editProducts()
    {
        $title = "Edit Products";
        $products=ProductModel::all();
        return view('edit-products',compact('products','title'));
    }
}
