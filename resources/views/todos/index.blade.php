
@extends('layout.master')
@section('content')
 <div class="flex justify-between items-center mb-4">
        <h2 class="text-lg font-semibold text-yellow-400">Todos</h2>
        <a href="{{route('todos.create')}}"
           class="bg-yellow-500 text-gray-900 px-4 py-2 rounded-lg font-medium hover:bg-yellow-400 transition">
          Create
        </a>
      </div>

      <table class="w-full text-left border-collapse">
        <thead>
          <tr class="bg-gray-700 text-gray-200">
            <th class="p-3 font-medium">Image</th>
            <th class="p-3 font-medium">Title</th>
            <th class="p-3 font-medium">Category</th>
            <th class="p-3 font-medium">Action</th>
          </tr>
        </thead>
        <tbody>
         @foreach ( $todos as $todo )
              <tr class="border-b border-gray-700 hover:bg-gray-700/50">
            <td class="p-3">
              <img src="{{asset('images/'.$todo->image)}}" alt="Image" class="w-12 h-12 object-cover rounded">
            </td>
            <td class="p-3">{{$todo->title}}</td>
            <td class="p-3">{{$todo->category->title}}</td>
            <td class="p-3 flex space-x-2">
              <a href="{{route('todos.show',['todo' => $todo->id])}}" class="bg-gray-600 text-white px-3 py-1 rounded hover:bg-gray-500">Show</a>
              @if ($todo->status)
                <span class="bg-red-600 text-white px-3 py-1 rounded">Completed</span>
                @else
                <a href="{{route('todos.completed',['todo' => $todo->id])}}" class="bg-yellow-500 text-gray-900 px-3 py-1 rounded">Done.?</a>
              @endif

            </td>
          </tr>
         @endforeach
        </tbody>
      </table>
      {{$todos->links('layout.paginate')}}
@endsection
