<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function getProducts(){

        $fetch_product = Product::OrderBy('created_at', 'desc')->get();

        return response()->json($fetch_product);
    }

    public function addProduct(Request $request){

        $create_product = Product::create($request->all());

        return response()->json($create_product);
    }

    public function updateProduct(Product $product){

        $upd_product= $product->update([
            'name' => request('name'),
            'description' => request('description'),
            'quantity' => request('quantity')
        ]);

        return response()->json(["Product Updated Successifully" => $upd_product]);

    }

    public function delProduct($id){

        $del_product = Product::destroy($id);

        return response()->json(["Product Deleted Successifully" => $del_product]);
    }
}
