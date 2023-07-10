<!DOCTYPE html>
<!-- Designined by CodingLab | www.youtube.com/codinglabyt -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title>Contact Us</title>
    <link rel="stylesheet" href="./forms/contact/style.css">
    <!-- Fontawesome CDN Link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
  <div class="container">
    <div class="content">
      <div class="left-side">
        <div class="address details">
          <i class="fas fa-map-marker-alt"></i>
          <div class="topic">Address</div>
          <div class="text-one">Minbhawan, Kathmandu</div>
          
        </div>
        <div class="phone details">
          <i class="fas fa-phone-alt"></i>
          <div class="topic">Phone</div>
          <div class="text-one">+91 9122452479</div>
          <div class="text-two">+91 8235802223</div>
        </div>
        <div class="email details">
          <i class="fas fa-envelope"></i>
          <div class="topic">Email</div>
          <div class="text-one">ranjanyadav5405@gmail.com</div>
          <div class="text-two">mukeshkumar18855@gmail.com</div>
        </div>
      </div>
      <div class="right-side">
	    
        <div class="topic-text">Send us a message</div>
        <p>If you have any work from me or any types of quries related to my tutorial, you can send me message from here. It's my pleasure to help you.</p>
    
	<form action="<?php echo e(url('/')); ?>/contact" method="post">
 
  <?php echo csrf_field(); ?>
        <div class="input-box">
       
          <input type="name"  id="name" placeholder="Enter your name" name="name">
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
        </div><br>
        <div class="input-box">
          <input type="email" id="email" placeholder="Enter your email" name="email">
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
        </div><br>
        <div class="input-box message-box">
          <input type="message" id="message" placeholder="Enter your message" name="message"></textarea>
          <span class="text-danger">
           <?php $__errorArgs = ['message'];
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
        <div class="button">
          <button  class="form-btn" type="submit" id="submit" name="submit"  value="Send Now" >send now</button>
        </div>
		
      </form>
    </div>
    </div>
  </div>

</body>
</html>
<?php /**PATH C:\xampp\htdocs\services\resources\views/contact.blade.php ENDPATH**/ ?>