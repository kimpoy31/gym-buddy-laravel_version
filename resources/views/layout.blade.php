<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> 
        @yield("title", "Custom Auth Laravel") 
    </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  </head>
  <body>
    @include('navbar.navbar')
    @yield("content") 


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"></script>
  </body>
</html>

{{-- My Own summary and understanding --}}

{{-- @yield("content") is where child components will be rendered depending on the invoked name --}}

{{-- @include('navbar.navbar') calls and renders navbar component created --}}

{{-- I used bootstrap can be seen on script tags and link href --}}