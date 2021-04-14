<!DOCTYPE html>
<html lang="en">

<style>
  
</style>


<head>
  <title>z</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/docs.theme.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
 
</head>

<body>

  <h1>Hôm</h1>

  @if(Session::has('username'))
  <a href="{{ url('/logout') }}" class="text-sm text-gray-700 underline">Log out</a><br>
  <a href="{{ url('/post') }}" class="text-sm text-gray-700 underline">Post</a>
  @else
  <a href="{{ url('/login') }}" class="text-sm text-gray-700 underline">Log in</a><br>
  @endif

</body>


</html>