<!-- resources/views/layouts/app.blade.php -->
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>@yield('title')</title>
  <link rel="stylesheet" href="{{ asset('css/styleboard.css') }}">
  <link rel="icon" href="{{ asset('images/bit.png') }}" type="image/png">
  <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
</head>
<body>
   <nav>
       <a href="https://bitsathy.ac.in"><img src="{{ asset('images/bitnav.png') }}" alt="Logo"></a>
       <ul>
           <li><a href="{{ url('/') }}">Home</a></li>
           <li><a href="{{ url('/MoUs') }}">MoUs</a></li>
           <li><a href="{{ url('/types') }}">Types</a></li>
           <li><a href="{{ url('/outcomes') }}">OutComes</a></li>
           <li><a href="{{ url('/mous/manage') }}">Add/Delete MoU</a></li> <!-- New option -->
           <li><a href="#">Logout</a></li>
       </ul>
   </nav>
  
   <div class="content">
       @yield('content')
   </div>

   <footer>
       <!-- Footer content here -->
   </footer>
</body>
</html>


