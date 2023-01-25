<?php

namespace App\Http\Controllers;

use App\Models\Category;

use Illuminate\Http\Request;

class NewCategoryController extends Controller
{
    public function create(){
        return view('Categories.new');
    }
    public function store(Request $request){

      $category = new Category;

      $category->title = $request ->title;
      $category->quantity=$request->quantity;
      $category->save();
      return redirect('/');

    }
}
