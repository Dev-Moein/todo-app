@extends('layout.master')
@section('content')
<div class="max-w-3xl mx-auto mt-10">
    <div class="bg-gray-800 shadow-lg rounded-lg p-6">
        <div class="flex justify-between items-center mb-4">
            <h2 class="text-lg font-semibold text-yellow-400">Edit Todo</h2>
            <a href="{{route('todos.index')}}"
               class="bg-gray-700 text-white px-3 py-1 rounded hover:bg-gray-600">
               Back
            </a>
        </div>
        <form action="{{route('todos.update',['todo' => $todo->id])}}" method="POST" enctype="multipart/form-data" class="space-y-4">
            @csrf
            @method('PUT')
            <div>
                <label for="image" class="block text-sm font-medium mb-1">Image</label>
                <input type="file" id="image" name="image"
                       class="w-full rounded bg-gray-900 border border-gray-700 px-3 py-2 text-gray-200 focus:outline-none focus:ring-2 focus:ring-yellow-500">
                <p class="text-red-500 text-sm mt-1">@error('image') {{$message}} @enderror</p>
            </div>
            <div>
                <label for="title" class="block text-sm font-medium mb-1">Title</label>
                <input type="text" id="title" value="{{$todo->title}}" name="title"
                       class="w-full h-12 rounded bg-gray-900 border border-gray-700 px-3 py-2 text-gray-200 text-lg focus:outline-none focus:ring-2 focus:ring-yellow-500 focus:border-yellow-500">
               <p class="text-red-500 text-sm mt-1">@error('title') {{$message}} @enderror</p>
            </div>
            <div>
                <label for="category" class="block text-sm font-medium mb-1">Category</label>
                <select id="category" name="category_id"
                        class="w-full h-12 rounded bg-gray-900 border border-gray-700 px-3 py-2 text-gray-200 text-lg focus:outline-none focus:ring-2 focus:ring-yellow-500 focus:border-yellow-500">
                        @foreach ($categories as $category )
                    <option {{$todo->category_id == $category->id ? 'selected' : ''}} value="{{$category->id}}">{{$category->title}}</option>
                        @endforeach

                </select>
              <p class="text-red-500 text-sm mt-1">@error('category_id') {{$message}} @enderror</p>
            </div>
            <div>
                <label for="description" class="block text-sm font-medium mb-1">Description</label>
                <textarea id="description" name="description" rows="4"
                          class="w-full rounded bg-gray-900 border border-gray-700 px-3 py-2 text-gray-200 focus:outline-none focus:ring-2 focus:ring-yellow-500 focus:border-yellow-500">{{$todo->description}}</textarea>
                <p class="text-red-500 text-sm mt-1">@error('description') {{$message}} @enderror</p>
            </div>
            <div>

                <button type="submit"
                        class="bg-yellow-500 text-gray-900 px-6 py-2 rounded-lg font-medium hover:bg-yellow-400 transition">
                    Submit
                </button>
            </div>
        </form>
    </div>
</div>
@endsection
