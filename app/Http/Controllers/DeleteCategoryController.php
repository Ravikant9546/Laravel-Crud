<?php

namespace App\Http\Controllers;

use App\Models\Category;

use Illuminate\Http\Request;

class DeleteCategoryController extends Controller
{
    public function destroy($id){
        $category=Category::whereId($id)->first();
        $category->delete();
        return redirect('/');

    }
}
