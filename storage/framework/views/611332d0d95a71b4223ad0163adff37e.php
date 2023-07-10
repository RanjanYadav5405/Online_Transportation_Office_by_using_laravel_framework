<!DOCTYPE html>
<html lang="en">
<head>
  <title>Register_Information</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    
    <h2> <center> Register_Information</h2>
<div <center> 
    <table class="table table-hover">
        <thead>
            <tr>
            <th scope="col">id</th>
            <th scope="col">name</th>
            <th scope="col">city</th>
            <th scope="col">country</th>
            <th scope="col">email</th>
            <th scope="col">password</th>
            <th scope="col">Actions</th>
        </tr>
    </thead>
    <?php $__currentLoopData = $registers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $register): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <tr>
        <th><?php echo e($register->id); ?></th>
        <th><?php echo e($register->name); ?></th>
        <th><?php echo e($register->city); ?></th>
        <th><?php echo e($register->country); ?></th>
        <th><?php echo e($register->email); ?></th>
        <th><?php echo e($register->password); ?></th>
        <td>
            <a href="<?php echo e(url('index4/edit/')); ?>/<?php echo e($register->id); ?> " class="btn btn-info btn-sm">Edit</a>
            <a href="<?php echo e(route('index4.delete' ,['id' => $register->id])); ?>" class="btn btn-danger btn-sm">Delete</a>
        </td>
    </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</tbody>
</table>
</div>
</html><?php /**PATH C:\xampp\htdocs\services\resources\views/register_view.blade.php ENDPATH**/ ?>