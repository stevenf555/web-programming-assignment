<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('Title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  </head>
  <body>
    @include('navbar')
    <div class="mt-6">
        <center>
                <p style="font-size:50px">Welcome to OnePiece Bounty</p>
                <p class="text-center">A Place to getting the latest bounty for One Piece</p>
                <img src="https://www.freepnglogos.com/uploads/one-piece-logo-17.gif" height="200px" width="500px">
        </center>
    </div>
    <div>
        @yield('content')
    </div>
  </body>
</html>