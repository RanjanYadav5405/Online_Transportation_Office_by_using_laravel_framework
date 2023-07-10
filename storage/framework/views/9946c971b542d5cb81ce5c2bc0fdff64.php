
<center>
<body>

    <div id="container" style="border:1px solid black ; width:700px">

        <div id="wrapper">
            <div id="headwrap">
                <div id="header">R E G I S T E R</div>
            </div>
            <form id="valForm" method="POST" action="<?php echo e($url); ?>">
                <?php echo csrf_field(); ?>
                
                <div class="field">
                    <label>Name:</label>
                    <input  style="width:200px;margin:10px" type="text" id="name" name="name" class="input" value="<?php echo e($register->name); ?>">
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
                    <input  style="width:200px;margin:10px" type="text" id="ci" name="city" class="input" value="<?php echo e($register->city); ?>">
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
                    <select  style="width:200px;margin:10px" id="co" name="country" class="input" type="text" >
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
                    <input  style="width:200px;margin:10px" type="text" id="em" name="email" class="input" value="<?php echo e($register->email); ?>">
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
                    <input style="width:200px;margin:10px" type="password" id="pswd" name="password" class="input pswd pass" ><i
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
                    <button  style="margin:10px;background-color:green;color:white" type="submit" id="submit" value="submit" class="btn" name="submit"><span
                            id="submit">&#9472; update &#9472;</span></button>
                </div>
            </form>
            <p class="text">Thank you, for filling in the form.</p>
        </div>
    </div>
    <!-- The Modal (no interaction with the rest of the page is possible until the user closes it!)-->
    

    
</body>
</center>

</html>
<?php /**PATH C:\xampp\htdocs\services\resources\views/editform.blade.php ENDPATH**/ ?>