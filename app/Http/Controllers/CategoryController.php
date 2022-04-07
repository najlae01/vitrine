<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function index(Request $request)
    {
        return view('categories.categories');

    }
    //--- lister les catégories ---
    public function list()
    {
          $categories = Category::all();
          return view('categories.categories', ['categories' => $categories]);
    }
    //----- enregistrer les données dans la BDD ---
    public function save(Request $request)
    {
        $category = new Category;
        $category->name_cat = $request->input('name_cat');
        $category->description_cat = $request->input('description_cat');
        $category->user_id = auth()->user()->id;
        $category->save();
        return redirect('categories');
    }
     //---- Modifier une catégorie --------
     public function edit($id)
     {
         $category = Category::find($id);
         return view('categories.edit', ['category' => $category]);
     }
     //--- Enregistrer les modifications ---------
     public function update(Request $request, $id)
     {
         $category = Category::find($id);
         $category->name_cat = $request->input('name_cat');
         $category->description_cat = $request->input('description_cat');
         $category->save();
         return redirect('categories');
     }
    //------- Supprimer une catégorie -----
    public function delete($id)
    {
            $category = Category::find($id);
            $category->delete();
           return redirect('categories');
    }
}
