<!DOCTYPE html>
<html lang="en">

<head>
    <title>Register Form</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href='https://fonts.googleapis.com/css?family=Stardos Stencil' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="./Sign in/Sign up/register2.css" type="text/css">
</head>

<body>

    <div id="container">

        <div id="wrapper">
            <div id="headwrap">
                <div id="header">R E G I S T E R</div>
            </div>
            <form id="valForm" method="POST" action=" <?php echo e(url('/')); ?>/index4">
                <?php echo csrf_field(); ?>
                <div class="field">
                    <label>Name:</label>
                    <input type="text" id="name" name="name" class="input" >
                    <div id="check" class="check"></div>
                    <span style="color:red">
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


                <div class="field">
                    <label>City:</label>
                    <input type="text" id="ci" name="city" class="input" >
                    <div id="check3" class="check"></div>

                    <span class="text-danger">
                        <?php $__errorArgs = ['city'];
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

                <div class="field">
                    <label>country:</label>
                    <select id="co" name="country" class="input" type="text" >
                        <option value="0"> -- Select country -- </option>
                        <option value="Nepal">Nepal</option>
                        <option value="India">India</option>
                        <option value="Bhutan">Bhutan</option>
                        <option value="Bangaldesh">Bangaldesh</option>
                      
                    </select>
                    <div id="check4" class="check"></div>
                    <span class="text-danger">
                        <?php $__errorArgs = ['co'];
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

                <div class="field">
                    <label>E-mail:</label>
                    <input type="text" id="em" name="email" class="input">
                    <div id="check5" class="check"></div>

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
unset($__errorArgs, $__bag); ?>
                    </span>
                </div>

                <div class="field">
                    <label>Password:</label>
                    <input type="password" id="pswd" name="password" class="input pswd pass" ><i
                        class="fa fa-eye-slash" id="eye"></i>

                    <span class="text-danger">
                        <?php $__errorArgs = ['password'];
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


                <div id="bottomdiv">
                    <button type="submit" id="submit" value="submit" class="btn" name="submit"><span
                            id="submit">&#9472; submit &#9472;</span></button>
                </div>&#26;
            </form>
        </div>
    </div>
    <!-- The Modal (no interaction with the rest of the page is possible until the user closes it!)-->
    <div id="myModal" class="modal">

        <!-- Modal content -->
        <div class="modal-content">
            <div class="close">&times;</div>
            <p class="text">Thank you, for filling in the form.</p>
        </div>

    </div>

    <script src="register2.js"></script>
</body>

</html>
<?php /**PATH C:\xampp\htdocs\services\resources\views/index4.blade.php ENDPATH**/ ?>