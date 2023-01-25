<?php

namespace App\Http\Controllers;

use App\Models\Category;

use Illuminate\Http\Request;

class EditCategoryController extends Controller
{
    public function edit($id){
        $category=Category::where('id',$id)->first();
        return view('categories.edit',compact('category'));

    }
    public function update(Request $request , $id){
        $category=category::where('id',$id)->first();
        $category->title=$request->title;
        $category->quantity=$request->quantity;
        $category->save();
        return redirect('/');

    }
}
