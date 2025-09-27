<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function create()
    {
        return view('categories.create');
    }
       public function store(Request $request)
    {
       $request->validate([
        'title' => 'required|min:5'
       ]);
       Category::create([
        'title' => $request->title
       ]);
       return redirect()->route('categories.index');
    }
    public function index()
    {
        $categories = Category::all();
        return view('categories.index', compact('categories'));
    }
     public function edit(Category $category)
    {
        return view('categories.edit',compact('category'));
    }
    public function update(Category $category , Request $request)
    {
         $request->validate([
        'title' => 'required|min:5'
       ]);
       $category->update([
        'title' => $request->title
       ]);
       return redirect()->route('categories.index');
    }
    public function destroy(Category $category)
    {
        $category->delete();
        return redirect()->route('categories.index');
    }
}
