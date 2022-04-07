<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;

class ProductController extends Controller
{
    public function index()
    {
        return view('products.products');
    }
    //--------- Créer un produit --------
    public function create()
    {
       $categories = Category::all();
        return view('products.create', compact('categories'));
    }
    //--------- Enregistrer un produit --------
    public function save(Request $request)
    {
        $product = new Product;
        $product->code_pr = $request->input('code_pr');
        $product->name_pr = $request->input('name_pr');
        $product->description_pr = $request->input('description_pr');
        $product->image = $request->input('image');
        $product->price = $request->input('price');

        $product->user_id = auth()->user()->id;
        $product->category_id = $request->get('name_cat');
        //---- enregistrer image -------
        if($request->hasfile('image') != null)
        {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('uploads/products/', $filename);
            $product->image = $filename;
        }
        else{
          //  return $request;
            $product->image='';
        }
        $product->save();
        return redirect('products');
    }
    //-------- lister -----------
    public function list()
    {
        $products = Product::all();
        return view('products.products', ['products' => $products]);
    }
    //--------- modifier article ----------
    public function edit(Request $request, $id)
    {
        $product = Product::find($id);
       $categories = Product::all();
        return view('products.edit', compact('product', 'categories'));
    }

    public function update(Request $request, $id)
    {
        $product = Product::find($id);

        $product->code_pr = $request->input('code_pr');
        $product->name_pr = $request->input('name_pr');
        $product->description_pr = $request->input('description_pr');
        $product->image = $request->input('image');
        $product->price = $request->input('price');

        $product->category_id = $request->get('name_cat');

        //---- enregistrer image -------
        if($request->hasfile('image') != null)
        {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('uploads/products/', $filename);
            $product->image = $filename;
        }
        else{
          //  return $request;
            $product->image='';
        }

        $product->save();
        return redirect('products');
    }
    //---------- supprimer article ----------
    public function delete($id)
    {
        $product = Product::find($id);
        $product->delete();
        return redirect('products');
    }
}
