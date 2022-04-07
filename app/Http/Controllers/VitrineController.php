<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;

class VitrineController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        //----- systeme de pagination -------
        $products = Product::paginate(4);
        return view('vitrine' , compact('categories', 'products'));
    }
    public function products($id)
    {
        $products = Category::find($id)->products;
        $categories = Category::all();
        return view('vitrinecategories' , compact('categories', 'products'));
    }
    public function detail($id)
    {
        $product = Product::find($id);
        $categories = Category::all();
        return view('products.detailproduct',compact('product' , 'categories'));
    }
    public function category($name_cat)
    {
        $products = Category::find($name_cat)->products;
        return view('vitrinecategories' , compact( 'products'));
    }
}
