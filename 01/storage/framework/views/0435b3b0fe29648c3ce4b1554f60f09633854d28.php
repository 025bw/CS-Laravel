<!DOCTPE html>
    <html>

    <head>
        <title>View Student Records</title>
    </head>

    <body>
        <table border="1">
            <tr>
                <td>username</td>
                <td>password</td>
                <td>admin</td>
            </tr>
            <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($user->username); ?></td>
                <td><?php echo e($user->password); ?></td>
                <td><?php echo e($user->admin); ?></td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </table>
    </body>

    </html><?php /**PATH C:\Users\z\Documents\GitHub\CS-Laravel\01\resources\views/listuser.blade.php ENDPATH**/ ?>