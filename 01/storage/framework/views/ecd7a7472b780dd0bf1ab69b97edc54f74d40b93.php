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
            <?php $__currentLoopData = $accounts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $account): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <option value="<?php echo e($account->id); ?>" data-user=<?php echo e($account->id); ?>><?php echo e($account->id); ?></option>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </select>
        <br>

	<p id="demo"></p>
</body>
</html>



<?php /**PATH C:\Users\z\Documents\GitHub\CS-Laravel\01\resources\views/update.blade.php ENDPATH**/ ?>