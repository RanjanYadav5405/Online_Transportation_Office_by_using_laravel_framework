<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        Signin form
    </title>
    <!-- GOOGLE FONT -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:ital,wght@0,200;0,300;0,400;0,600;0,700;0,900;1,200;1,300;1,400;1,600;1,700;1,900&display=swap" rel="stylesheet">
    <!-- BOXICONS -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <!-- APP CSS -->
    <link rel="stylesheet" href="./css/app.css">
</head>

<body style="background-image: url(./img/mky.jpeg);">

    <div class="form" id="signin-form">
        <a href="#" class="form-logo">
            <img src="./img/mky1.png" alt="company logo">
        </a>
        <div class="form-group">
		<form action="<?php echo e(url('/')); ?>/index1" method="post" >
            <?php echo csrf_field(); ?>
            <p>Driving Licence No</p><br>
			
            <input type="number" class="form-input" id="number" placeholder="Driving Licence No"  name="number" value="<?php echo e(old('number')); ?>" >
            <span class="text-danger">
           <?php $__errorArgs = ['number'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
           <?php echo e($message); ?>

           <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
</span>
           
        </div>

        
        <div class="form-group">
             <p>Date Of Birth </p><br>
            <input type="date" class="form-input" id="date" placeholder=""  name="date" value="<?php echo e(old('date')); ?>" >
            <span class="text-danger">
           <?php $__errorArgs = ['date'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
           <?php echo e($message); ?>

           <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
</span>
        </div>
 
        <button input class="form-btn" type="submit" id="submit" name="submit">Check Status</button>
     
    <!-- APP JS -->
    <script src="./app.js"></script>

</body>

</html><?php /**PATH C:\xampp\htdocs\services\resources\views/index1.blade.php ENDPATH**/ ?>