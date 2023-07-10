
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Penalties Paid form</title>
    <link href="paymentform.css" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
        integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" href="./forms/style2.css">
</head>

<body>
<form action="<?php echo e(url('/')); ?>/penlaties" method="post">
<?php echo csrf_field(); ?>
    <div class="wrapper">
        <h2>Payment Form</h2>
        <form method="POST">
            <h4>Account</h4>
			
            <div class="input-group">
                <div class="input-box">
				    <i class="fa fa-user icon"></i>
                    <input type="text"  id="name"  placeholder="Full Name"  class="name" name="name" value="<?php echo e(old('name')); ?>">
                     
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
unset($__errorArgs, $__bag); ?></span>
                </div>
                <div class="input-box">
                    <i class="fa fa-user icon"></i>
                    <input type="text" id="lname"  placeholder="Last Name"  class="name" name="lastname" value="<?php echo e(old('lastname')); ?>">
                    
                    <span class="text-danger">
           <?php $__errorArgs = ['lastname'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
           <?php echo e($message); ?>

           <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></span>
                </div>
            </div>
            <div class="input-group">
                <div class="input-box">
                    <i class="fa fa-envelope icon"></i>
                    <input type="email" id="email"  placeholder="Email Adress"  class="name" name="email"value="<?php echo e(old('email')); ?>">
                    
                    <span class="text-danger">
           <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
           <?php echo e($message); ?>

           <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></span>
                </div>
            </div>
            <div class="input-group">
                <div class="input-box">
                    <h4> Date</h4>
                    <input type="number" id="DD" placeholder="DD" class="dob" name="DD" value="<?php echo e(old('DD')); ?>">
                    <span class="text-danger">
           <?php $__errorArgs = ['DD'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
           <?php echo e($message); ?>

           <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></span>
                    <input type="number" id="MM" placeholder="MM" class="dob" name="MM" value="<?php echo e(old('MM')); ?>">
                    <span class="text-danger">
           <?php $__errorArgs = ['MM'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
           <?php echo e($message); ?>

           <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></span>
                    <input type="number" id="YY" placeholder="YYYY" class="dob" name="YY" value="<?php echo e(old('YY')); ?>">
                    <span class="text-danger">
           <?php $__errorArgs = ['YY'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
           <?php echo e($message); ?>

           <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></span>
                </div>
                <div class="input-box">
                    <h4>Vehicle Number</h4>
                    <input type="number" id="ve" placeholder="00-xy-0000"  class="name" name="ve" value="<?php echo e(old('VehicleNo')); ?>">
                    <span class="text-danger">
           <?php $__errorArgs = ['VehicleNo'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
           <?php echo e($message); ?>

           <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></span>
                </div>
            </div>
            <div class="input-group">
                <div class="input-box">
                    <h4>Payment Details</h4>
                    <input type="radio" name="pay" id="bc1" checked class="radio">
                    <label for="bc1"><span><i class="fa fa-cc-visa"></i> Credit Card</span></label>
                    <input type="radio" name="pay" id="bc2" class="radio">
                    <label for="bc2"><span><i class="fa fa-cc-paypal"></i> Paypal</span></label>
                    <span class="text-danger">
           <?php $__errorArgs = ['pay'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
           <?php echo e($message); ?>

           <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></span>
                </div>
            </div>
            <div class="input-group">
                <div class="input-box">
                    <i class="fa fa-credit-card icon"></i>
                    <input type="number" id="number" placeholder="Card Number"  class="name" name="Cardnumber" value="<?php echo e(old('Cardnumber')); ?>">
                   
                    <span class="text-danger">
           <?php $__errorArgs = ['Cardnumber'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
           <?php echo e($message); ?>

           <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></span>
                </div>
            </div>
            <div class="input-group">
                <div class="input-box">
                    <i class="fa fa-user icon"></i>
                    <input type="number" id="cvc" placeholder="Card CVC"  class="name" name="cvc" value="<?php echo e(old('cvc')); ?>">
                   
                    <span class="text-danger">
           <?php $__errorArgs = ['cvc'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
           <?php echo e($message); ?>

           <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></span>
                </div>
                
            </div>
			
            <div class="input-group">
                <div class="input-box">
                    <button input class="form-btn"  id="submit" name="submit" type="submit">PAY NOW</button>
                </div>
            </div>
			 
        </form>
    </div>
</body>

</html><?php /**PATH C:\xampp\htdocs\services\resources\views/penlaties.blade.php ENDPATH**/ ?>