<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{   
    public function index(){
        $categories = Category::latest()->get();
        return response()->json($categories, 200);
    }

    public function store(Request $request){
        $this->validate($request, [
            'name' => 'required',
            'description' => 'required',
        ]);

        $category = Category::create([
            'name' => $request->name,
            'description' => $request->description,
        ]);
        return response()->json('success', 200);
    }


}
