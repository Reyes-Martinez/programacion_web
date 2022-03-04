<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class JsonController extends Controller
{
    public function json1()
    {
        return response()->json([
            'name' => 'Abigail',
            'state' => 'CA',
        ]);
    }
    public function products()
    {
        $products = Product::all()->take(10);
        foreach ($products as $product) {
            $product->quantity_comments = $product->comments->count();
        }

        return response()->json($products);
    }

    public function products_list()
    {
        return view('products_list');
    }
    
}
