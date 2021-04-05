<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link href="/css/main.css" rel="stylesheet" />
	
</head>

<body>

	<h1>Sign in</h1>

	<form action="" method="POST">

<input type="hidden" name="_token" value="{{ csrf_token() }}">
		<div class="div1" >username: </div><input type="text" id="username0123" name="username0123"><br>
		<div class="div1" >password: </div><input type="password" id="password0123" name="password0123">
		<br>
		<button style="margin-left:100px">
		Sign in
		</button>
	</form>

</body>

</html>