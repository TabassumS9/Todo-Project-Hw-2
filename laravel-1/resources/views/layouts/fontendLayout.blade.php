<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('titel')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    
</head>
<body>
    <!-- Navbar start Here -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
     <div class="container">
     <a class="navbar-brand" href="{{ route('homepage') }}">TodoProject</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
      </button>
     <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav m-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{ route('homepage') }}">Add Todo </a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{ route('all-todos') }}">All Todo</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{ route('store') }}">Store</a>
        </li>

     </div>
     </div>
    </nav>
    <!-- Navbar Ends Here -->
    <!-- Main content  start Here -->
    @yield('missing')
    <!-- Main content Ends Here -->


    </body>
</html>