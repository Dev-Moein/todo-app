 @extends('layout.master')
 @section('content')
<div class="max-w-3xl mx-auto mt-10">
    <div class="bg-gray-800 shadow-lg rounded-lg p-6">
        <div class="flex justify-between items-center mb-4">
            <h2 class="text-lg font-semibold text-yellow-400">Edit Category</h2>
            <a href="{{route('categories.index')}}"
               class="bg-gray-700 text-white px-3 py-1 rounded hover:bg-gray-600">
               Back
            </a>
        </div>
        <form action="{{route('categories.update',['category' => $category->id])}}" method="POST" class="space-y-4">
            @csrf
            @method('PUT')
            <div>
                <label for="title" class="block text-sm font-medium mb-1">Title</label>
                <input type="text" id="title" value="{{$category->title}}" name="title"
                       class="w-full h-12 rounded bg-gray-900 border border-gray-700 px-3 py-2 focus:outline-none focus:ring-2 focus:ring-yellow-500 focus:border-yellow-500 text-gray-200 text-lg">
                <p class="text-red-500 text-sm mt-1">@error('title') {{$message}} @enderror</p>
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
