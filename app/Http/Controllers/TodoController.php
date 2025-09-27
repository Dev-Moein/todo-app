<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Todo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TodoController extends Controller
{
public function index()
    {
        $todos = Todo::paginate(3);
        return view('todos.index',compact('todos'));
    }

    public function show(Todo $todo)
    {
        return view('todos.show',compact('todo'));
    }
    public function completed(Todo $todo)
    {
        $todo->update([
            'status' =>1
        ]);
         return redirect()->route('todos.index');
    }
     public function create()
    {
        $categories = Category::all();
        return view('todos.create',compact('categories'));
    }
    public function store(Request $request)
    {

        $request->validate([
            'image' => 'required|max:2000|image',
            'title' => 'required|min:5',
            'category_id' => 'required|integer',
            'description' => 'required'
        ]);
        $fileName = time() . "_" . $request->image->getClientOriginalName();
        $request->image->storeAs('/images',$fileName);
        Todo::create([
              'image' => $fileName,
            'title' => $request->title,
            'category_id' => $request->category_id,
            'description' => $request->description
        ]);
        return redirect()->route('todos.index');
    }
     public function edit(Todo $todo)
    {
        $categories = Category::all();
        return view('todos.edit',compact('categories','todo'));
    }
    public function update(Request $request, Todo $todo)
    {

          $request->validate([
            'image' => 'nullable|max:2000|image',
            'title' => 'required|min:5',
            'category_id' => 'required|integer',
            'description' => 'required'
        ]);
        if($request->hasFile('image')){
            Storage::delete('image/'.$todo->image);
              $fileName = time() . "_" . $request->image->getClientOriginalName();
        $request->image->storeAs('/images',$fileName);
        }

        $todo->update([
              'image' => $request->hasFile('image') ? $fileName : $todo->image,
            'title' => $request->title,
            'category_id' => $request->category_id,
            'description' => $request->description
        ]);
        return redirect()->route('todos.index');
    }
    public function destroy(Todo $todo)
    {
        $todo->delete();
        return redirect()->route('todos.index');
    }
}
