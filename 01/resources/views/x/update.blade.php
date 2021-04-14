<!DOCTYPE html>
<html lang="en">
<head>
	<script>
		function load_new_content(){
		 var selected_option_value=$("#select1 option:selected").val(); //get the value of the current selected option.
	
		 $.post("script_that_receives_value.php", {option_value: selected_option_value},
			 function(data){ //this will be executed once the `script_that_receives_value.php` ends its execution, `data` contains everything said script echoed.
				  $("#place_where_you_want_the_new_html").html(data);
				  alert(data); //just to see what it returns
			 }
		 );
	} 
	</script>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="/css/main.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/docs.theme.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
    <h1>Update user</h1>
    
        User ID:<select name="id" id="id" onchange="myFunction()"> >
            <option value="-1"></option>
            @foreach ($accounts as $account)
                <option value="{{ $account->id }}" data-user={{ $account->id }}>{{ $account->id }}</option>
            @endforeach
        </select>
        <br>

	<p id="demo"></p>
</body>
</html>

{{-- <script type="text/javascript">
	$(document).ready(function(e) {
		$("[name='id']").on('change', function() {
			let id = $('#id').val();
			var url = "/";
			$.ajax({
				type: "GET",
				url: url,
				success: function(data) {
					location.reload();
				}
			});
		});
}); --}}
{{-- </script> --}}
