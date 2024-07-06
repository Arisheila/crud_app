<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;


class ProductController extends Controller
{

    // to diplay the first page of products.index
    public function index(){
         // to diplay the first page of products.
    $products = Product::all();
    return view('products.index', ['products' => $products]);
        
    }
    //to create a new product
    public function create(){
        return view('products.create');
    }

    // to post a new product
    public function store(Request $request){
// to dump data on the front-end use:-
// dd($request->name);

        $data = $request->validate([
            'name' => 'required',
            'qty' => 'required|numeric',
            // 'price' => 'required|numeric',
            'price' => 'required|decimal:0,2',
            'descriptions' => 'required',
            // 'description' => 'nullable',
        ]);

    //    $noProduct = Product::create($data->all());

        // return redirect()->route('product.index')->with('success', 'Product created successfully.');

        $noProduct = Product::create($data);
        return redirect(route('product.index'));
    }

    // to edit product 
    public function edit(Product $product){
        // dump display
//  dd($product);
return view('products.edit', ['product' => $product]);
    }
// update product
    public function update(Product $product , Request $request){
        $data = $request->validate([
            'name' => 'required',
            'qty' => 'required|numeric',
            // 'price' => 'required|numeric',
            'price' => 'required|decimal:0,2',
            'descriptions' => 'required',
            // 'description' => 'nullable',
        ]);

        $product->update($data);
        return redirect(route('product.index'))->with('success','Product updated successfully');
    }

    // to delete a product from a database 
public function destroy(Product $product){
    $product->delete();
    return redirect(route('product.index'))->with('success','Product deleted successfully');
}

// to show a particular product 
public function show(Product $product){
    
        return view('products.show', compact('product'));
        
    
}

}
