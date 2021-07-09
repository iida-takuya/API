<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function getAll()
    {
        return Product::all();
    }
 
    public function getByProductNo(Product $product)
    {
        return $product;
    }

    public function create(Request $request)
    {
        return Product::create($request->all());
    }

    public function update(Request $request, Product $product)
    {
        $product->update($request->all());

        return response()->json($product, 200);
    }


    public function delete(Product $product)
    {
        $product->delete();

        return response()->json(null, 204);
    }
}

