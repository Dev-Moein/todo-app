 @extends('layout.master')
 @section('content')
<div class="max-w-4xl mx-auto mt-10">
    <div class="flex justify-between items-center mb-4">
        <h2 class="text-lg font-semibold text-yellow-400">Categories</h2>
       <a href="{{route('categories.create')}}"
               class="bg-gray-700 text-white px-3 py-1 rounded hover:bg-gray-600">
               Create
            </a>
    </div>
    <div class="overflow-x-auto bg-gray-800 rounded-lg shadow-lg">
        <table class="w-full text-left border-collapse">
            <thead>
                <tr class="bg-gray-700 text-gray-200">
                    <th class="px-4 py-3">Title</th>
                    <th class="px-4 py-3 text-right">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($categories as $category )
                <tr class="border-t border-gray-700">
                    <td class="px-4 py-3 text-gray-300">{{$category->title}}</td>
                    <td class="px-4 py-3 text-right space-x-2 flex justify-end">
                        <a href="{{route('categories.edit',['category' => $category->id])}}"
                           class="bg-yellow-500 text-gray-900 px-3 py-1 rounded hover:bg-yellow-400">
                           Edit
                        </a>
                        <form action="{{route('categories.destroy',['category' => $category->id])}}" method="POST">
                            @csrf
                            @method('delete')
                        <button type="submit"
                           class="bg-red-500 text-white px-3 py-1 rounded hover:bg-red-400">
                           Delete
                        </button>
                        </form>
                    </td>
                </tr>
                 @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
