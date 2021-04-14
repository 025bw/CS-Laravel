<!DOCTYPE html>
<html lang="en">
<style>

</style>

<head>
    <title>Submit Post</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/docs.theme.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>

<body>
    <form method="POST">
    Submit Post<br>
        <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
        Title:<input type="text" name="title7882" required><br>
        Content:<input type="text" name="content7882" required><br>
        Author:<input type="text" name="author7882"><br>
        <input type="submit" value="Submit">
    </form>
</body>

</html><?php /**PATH C:\Users\z\Documents\GitHub\CS-Laravel\01\resources\views/add.blade.php ENDPATH**/ ?>