<!DOCTYPE html>
<html lang="en">

<style>
    th,
    td {
        border: 1px solid black;
    }

    .zxc {
        border: 0px;
    }

    input {
        width: 100%;
        height: 100%;
    }

    a.button {
        -webkit-appearance: button;
        -moz-appearance: button;
        appearance: button;

        text-decoration: none;
        color: initial;
    }
</style>

<head>
    <title>Submit Post</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>

<body>

    <a href="/add" class="btn btn-primary btn-sm">create new post</a>
    <br><br>

    <form action="" method="POST">
        Post List:<br>
        <table>

            <tr>
                <th style="width: 250px;">Title</th>
                <th style="width: 500px;">Content</th>
                <th style="width: 150px;">Author</th>
            </tr>

            <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

            <tr>
                <td>
                    <input type="text" id="title_<?php echo e($post->id); ?>" name="title_<?php echo e($post->id); ?>" value="<?php echo e($out = strlen($post->title) > 50 ? substr($post->title,0,50)."..." : $post->title); ?>" required>
                </td>
                <td>
                    <input type="text" id="content_<?php echo e($post->id); ?>" name="content_<?php echo e($post->id); ?>" value="<?php echo e($out = strlen($post->content) > 50 ? substr($post->content,0,50)."..." : $post->content); ?>" required>
                </td>
                <td>
                    <input type="text" id="author_<?php echo e($post->id); ?>" name="author_<?php echo e($post->id); ?>" value="<?php echo e($out = strlen($post->author) > 50 ? substr($post->author,0,50)."..." : $post->author); ?>">
                </td>
                <td class="zxc">
                    <a href="/update?id=<?php echo e($post->id); ?>" class="btn btn-warning btn-sm">Edit</a>
                    <a href="/delete?id=<?php echo e($post->id); ?>" class="btn btn-danger btn-sm">Delete</a>
                </td>
            </tr>

            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        </table>
        <div class="d-flex justify-content-center">
            <?php echo $posts->links(); ?>

        </div>
        <!-- <button type="submit" value="Submit">Save</button> -->
    </form>
</body>

</html><?php /**PATH /Users/z/Documents/GitHub/CS-Laravel/01/resources/views/posts/list.blade.php ENDPATH**/ ?>