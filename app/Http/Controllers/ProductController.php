<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function getAllProducts()
    {
        $products = Product::all();
        return response()->json($products);
    }

    public function addProduct(Request $request)
    {
        $request->validate([
            'name' => 'required|min:3|max:255',
            'description' => 'required|min:10|max:255',
            'price' => 'required|numeric|min:0',
            'stock' => 'required|numeric|min:0'
        ]);

        $product = new Product();
        $product->name = $request->name;
        $product->description = $request->description;
        $product->price = $request->price;
        $product->stock = $request->stock;

        $product->save();

        return response()->json([
            'message' => 'Product added'
        ]);
    }

    public function getProductById(int $id)
    {
        $product = Product::find($id);
        return response()->json($product);
    }
}
