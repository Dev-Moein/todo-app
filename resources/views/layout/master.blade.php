@include('layout.header')

  <div class="container mx-auto mt-10 px-4">
    <div class="bg-gray-800 shadow-lg rounded-lg p-6">
     @yield('content')
    </div>
  </div>

@include('layout.footer') 
