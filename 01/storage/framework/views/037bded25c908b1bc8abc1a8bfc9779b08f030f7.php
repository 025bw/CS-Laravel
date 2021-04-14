<!DOCTYPE html>
<html lang="en">

<style>

</style>

<head>
    <title>Submit Post</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <!-- <link rel="stylesheet" href="<?php echo e(URL::asset('dumb.css')); ?>"> -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>

<body>
<div class="container">
	<div class="row">
	    
	    <div class="col-md-8 col-md-offset-2">
	        
    		<h1>Update post</h1>
    		
    		<form action="" method="POST">

            <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
				
            <input id="id" name="id" type="hidden" value="<?php echo e($post->id); ?>">

    		    
    		    <div class="form-group">
    		        <label for="title">Title <span class="require">*</span></label>
    		        <input type="text" class="form-control" name="title" value="<?php echo e($post->title); ?>" required>
    		    </div>
    		    
    		    <div class="form-group">
    		        <label for="content">Content*</label>
    		        <textarea rows="5" class="form-control" name="content"  required><?php echo e($post->content); ?></textarea>
    		    </div>
    		    
    		    <div class="form-group">
    		        <label for="title">Author <span class="require"></span></label>
    		        <input type="text" class="form-control" name="author" value="<?php echo e($post->author); ?>">
    		    </div>
    		    
    		    <div class="form-group">
    		        <button type="submit" class="btn btn-primary">
    		            Update
    		        </button>
    		        <!-- <button class="btn btn-secondary">
    		            Cancel
    		        </button> -->
    		    </div>
    		    
    		</form>
		</div>
		
	</div>
</div>
</body>

</html><?php /**PATH C:\Users\z\Documents\GitHub\CS-Laravel\01\resources\views/posts/update.blade.php ENDPATH**/ ?>