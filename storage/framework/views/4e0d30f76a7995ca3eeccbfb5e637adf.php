<!DOCTYPE html>
<html lang="en">

<head>
    <title>Vehicle Registration Form</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.3/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
    <style>
        .field .tooltip .content {
            display: none;
            opacity: 1;
        }

        .field .tooltip:hover .content {
            display: block;
        }
    </style>
    <![endif]-->
 <style>
 body{
    background: url('./img/nature1.jpg') no-repeat center center fixed;
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover;
}
</style>
   

</head>
<body>
 
<div class="container" >
<center>
<br>

  <div class="card img-fluid" style="width:1000px">
    <img class="card-img-top" src="./img/nature2.jpg" alt="Card image" style="width:100%">
    <div class="card-img-overlay">

    <h1 class="text-white">Vehicle Registration Form</h1>
 <div class="text-white">
 <form action="<?php echo e(url('/')); ?>/vehicle" method="post" >
    <?php echo csrf_field(); ?>
        <div class="conatiner">
            <label for="name">Name:</label>
            <input type="text" name="name" id="name" value="<?php echo e(old('name')); ?>" >
            <span class="text-danger">
           <?php $__errorArgs = ['name'];
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
        <br>
        <div class="conatiner">
            <label for="address">Address:</label>
            <input type="text" name="address" id="address" value="<?php echo e(old('address')); ?>">
            <span class="text-danger">
           <?php $__errorArgs = ['address'];
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
</div>  <br>
        <div class="conatiner">
            
    <label for="make"> Date of Make:</label>
            <input type="text" name="make" id="make" value="<?php echo e(old('make')); ?>">
            <span class="text-danger">
           <?php $__errorArgs = ['make'];
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
</div>  <br>
        <div class="conatiner">
             <label for="model">Model:</label>
            <input type="text" name="model" id="model" value="<?php echo e(old('nmodel')); ?>" >
            <span class="text-danger">
           <?php $__errorArgs = ['model'];
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
</div>  <br>
        <div class="conatiner">
            <label for="year">Year:</label>
            <input type="text" name="year" id="year" value="<?php echo e(old('year')); ?>" >
            <span class="text-danger">
           <?php $__errorArgs = ['year'];
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
</div>  <br>
        <div class="conatiner">
               <label for="license_plate">License Plate:</label>
            <input type="text" name="license_plate" id="license_plate" value="<?php echo e(old('license_plate')); ?>">
            <span class="text-danger">
           <?php $__errorArgs = ['license_plate'];
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
        </div>  <br>
        
  </div>
            <input type="submit"  id="submit" name="submit" value="Submit" />
       </div>
    </form>
    <div id="vehicle_registration_response"></div>

    </div>
  </div>
</div>

</body>
</html>
<?php /**PATH C:\xampp\htdocs\services\resources\views/Vehicle_Registration.blade.php ENDPATH**/ ?>