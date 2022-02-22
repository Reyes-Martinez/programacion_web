<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function shop()
    {
        //$products = Product::all();
        // foreach ($categories as $category) {
        //     $products[$category->name] = Product::where('category_id', $category->id)->orderBy('id', 'ASC')->take(10)
        //         ->get();
        // }
        // foreach ($categories as $category) {
        //     echo $category->name . "<br>";
        //     foreach ($category->products as $product) {
        //         echo $product->name . " (" . $product->price . ")<br>";
        //   
        // }
        //*TODO Ingresar minimo 100 datos a la base de datos(products) con el generador de datos https://mockaroo.com/
        // return view('shop', ['categories' => $categories, 'products' => $products]);
        $categories = Category::all();
        return view('shop', compact('categories'));
    }
    public function register()
    {
        return view('register');
    }
    public function login()
    {
        return view('login');
    }
    public function product_details($id)
    {
        $product = Product::find($id);
        return view('product_details', compact('product'));
    }
}
