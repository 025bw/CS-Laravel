<!DOCTYPE html>
<html lang="en">

<style>
  
</style>


<head>
  <title>@yield('title','z')</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/docs.theme.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <link rel="icon" href="https://preview.colorlib.com/theme/sensive/img/Fevicon.png" type="image/png">
<link rel="stylesheet" href="./Sensive Blog - Home_files/bootstrap.min.css">
<link rel="stylesheet" href="./Sensive Blog - Home_files/all.min.css">
<link rel="stylesheet" href="./Sensive Blog - Home_files/themify-icons.css">
<link rel="stylesheet" href="./Sensive Blog - Home_files/style.css">
<link rel="stylesheet" href="./Sensive Blog - Home_files/owl.theme.default.min.css">
<link rel="stylesheet" href="./Sensive Blog - Home_files/owl.carousel.min.css">
<link rel="stylesheet" href="./Sensive Blog - Home_files/style(1).css">
  
</head>

<body>
  <header class="header_area">
    <div class="main_menu">

      @include('layouts.3')
    @section('bar')
    @show
    </div>
    </header>









@section('sidebar')
    This is the master sidebar.
@show
<div class="container">
@yield('content')
</div>
</body>

</html>