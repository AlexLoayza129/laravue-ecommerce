<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index(){        
        return view('products.index', ['products' => Product::all()]);
    }

    public function create(){
        return view('products.create');
    }

    //Create product
    public function store(Request $request){
        $product = new Product;

        $product->name = $request->name;
        $product->description = $request->description;
        $product->price = $request->price;
        
        $product->save();

        return redirect()->route('products.index');
    }

    //Show Product
    public function show($id){
        $product = Product::find($id);
        return view('products.show', ['product' => $product]);
    }

    //Update Product view
    public function edit($id){
        $product = Product::find($id);
        return view('products.edit', ['product' => $product]);
    }

    //Update Product
    public function update(Request $request, $id){
        $product = Product::find($id);

        $product->id = $request->id;
        $product->name = $request->name;
        $product->description = $request->description;
        $product->price = $request->price;
        
        $product->save();
        return redirect()->route('products.show', $id);
    }


    //Delete a product
    public function destroy($id){

        $product = Product::find($id);

        $product->delete();

        return redirect()->route('products.index');
    }

}
