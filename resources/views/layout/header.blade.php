<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Todo App</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-900 text-gray-200 min-h-screen flex flex-col">
  <nav class="bg-gray-800 shadow px-6 py-4 flex justify-between items-center relative">
    <h1 class="text-xl font-bold text-yellow-400">Todo App</h1>
    <div class="hidden md:flex space-x-6">
      <a href="{{route('todos.index')}}" class="text-gray-300 hover:text-yellow-400">Todo</a>
      <a href="{{route('categories.index')}}" class="text-gray-300 hover:text-yellow-400">Category</a>
    </div>
    <button id="menu-btn" class="md:hidden text-yellow-400 focus:outline-none">
      <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
              d="M4 6h16M4 12h16M4 18h16" />
      </svg>
    </button>
    <div id="mobile-menu" class="hidden absolute top-16 left-0 w-full bg-gray-800 flex-col space-y-4 py-4 px-6 md:hidden shadow-lg">
      <a href="#" class="block text-gray-300 hover:text-yellow-400">Todo</a>
      <a href="#" class="block text-gray-300 hover:text-yellow-400">Category</a>
    </div>
  </nav>

