@extends('layout.master')
@section('content')
<div class="max-w-3xl mx-auto mt-10">
    <div class="bg-gray-800 shadow-lg rounded-lg p-6">
        <div class="flex justify-between items-center mb-4">
            <h2 class="text-lg font-semibold text-yellow-400">Todo</h2>
            <a href="{{route('todos.index')}}"
               class="bg-gray-700 text-white px-3 py-1 rounded hover:bg-gray-600">
               Back
            </a>
        </div>
        <div class="mb-6">
            <img src="{{asset('images/'.$todo->image)}}"
                 class="w-full max-h-64 object-cover rounded-lg border border-gray-700">
        </div>
        <div class="space-y-4">
            <div>
                <label class="block text-sm font-medium mb-1">Title</label>
                <input type="text" value="{{$todo->title}}" disabled
                       class="w-full h-12 rounded bg-gray-900 border border-gray-700 px-3 py-2 text-gray-400 text-lg">
            </div>
            <div class="grid grid-cols-2 md:grid-cols-2 gap-4">
                <div>
                    <label class="block text-sm font-medium mb-1">Category</label>
                    <input type="text" value="{{$todo->category->title}}" disabled
                           class="w-full h-12 rounded bg-gray-900 border border-gray-700 px-3 py-2 text-gray-400 text-lg">
                </div>
                <div>
                    <label class="block text-sm font-medium mb-1">Status</label>
                    <input type="text" value="{{$todo->status ? 'Completed' : 'Doing...'}}" disabled
                           class="w-full h-12 rounded bg-gray-900 border border-gray-700 px-3 py-2 text-gray-400 text-lg">
                </div>
            </div>
            <div>
                <label class="block text-sm font-medium mb-1">Description</label>
                <textarea rows="3" disabled
                          class="w-full rounded bg-gray-900 border border-gray-700 px-3 py-2 text-gray-400">{{$todo->description}}</textarea>
            </div>
        </div>
        <div class="flex space-x-3 mt-6">
            <a href="{{route('todos.edit',['todo' => $todo->id])}}"
               class="bg-yellow-500 text-gray-900 px-6 py-2 rounded-lg font-medium hover:bg-yellow-400 transition">
               Edit
            </a>
            <form action="{{route('todos.destroy',['todo' => $todo->id])}}" method="POST" ">
            @csrf
            @method('DELETE')
                <button type="submit"
                        class="bg-red-600 text-white px-6 py-2 rounded-lg font-medium hover:bg-red-500 transition">
                    Delete
                </button>
            </form>
        </div>
    </div>
</div>

@endsection
