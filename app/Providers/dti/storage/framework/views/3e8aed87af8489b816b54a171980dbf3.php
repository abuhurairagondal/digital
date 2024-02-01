<!DOCTYPE html>
<html>
<head>
 <!-- Basic -->
 <?php echo $__env->make('include.header_links', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
 <title>Login</title>
</head>
<body class="sub_page">
 <div class="hero_area">
  <!-- header section strats -->
  <?php echo $__env->make('include.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  <!-- end header section -->
</div>
<!-- inner page section -->
<section class="inner_page_head">
  <div class="container_fuild">
   <div class="row">
    <div class="col-md-12">
     <div class="full">
      <h3>Login</h3>
    </div>
  </div>
</div>
</div>
</section>
<!-- end inner page section -->
<!-- why section -->
<section class="why_section layout_padding">
  <div class="container">

   <div class="row">

    <div class="col-md-6 mb-2" style="border:2px solid #000000; border-radius: 10px">
        <h2 style="height: 50px; color: #000000 ; margin-top: 40px;" align="center"><strong>Login</strong></h2>
     <?php echo $__env->make('include.success', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

       <form action="/postlogin" method="POST" style="margin-top: 60px;" enctype="multipart/form-data">
        <?php echo csrf_field(); ?>

        <div class="col-md-12 col-sm-12 mb-3">
            <label class="mb-1"><b>Email</b> <code>*</code></label>
         <input type="email" placeholder="Email" name="email" required />
       </div>
         <div class="col-md-12 col-sm-12 mb-3">

          <label class="mb-1"><b>Password</b> <code>*</code></label> <span id="togglePassword" class="eye-icon" onclick="togglePasswordVisibility()">&#128065;</span>


          <div class="input-group" style="width:100%;">
            <!-- Add an input field for password and an eye icon -->
            <input type="password" id="passwordField" name="password" placeholder="Password">

          </div>
          <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
          <span class="text-danger"><?php echo e($message); ?></span>
          <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>
        <div class="col-md-12 col-sm-12 mb-3">
          <div class="form-group">
            <a href="/forgot_password"><span style="color: #1f2839;">Forgot password?</span></a>


          </div>

        </div>

        <div class="col-md-12 col-sm-12 mb-3" style="text-align: center;">
            <div class="form-group">
                <input type="submit" value="Login" class="btn btn-primary">
            </div>
        </div>

        <div class="text-center col-md-12" style="padding:5px; margin-top: 40px;">
         <p>Not a member?&nbsp;<a href="/register" style="color:rgba(148,187,239);">Register Here</a></p>
       </div>


   </form>

</div>
<div class="col-md-6">
 <img src="/images/logo.png" style="height: 300px; margin-left: 200px; margin-top: 100px; ">

</div>
</div>
</div>
</section>
<!-- end why section -->

<!-- footer section -->
<?php echo $__env->make('include.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<!-- footer end -->
<?php echo $__env->make('include.footer_links', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


<script>
  function togglePasswordVisibility() {
    var passwordField = document.getElementById("passwordField");
    var toggleIcon = document.getElementById("togglePassword");

    if (passwordField.type === "password") {
      passwordField.type = "text";
        toggleIcon.innerHTML = "&#128064;"; // Change eye icon to open eye
      } else {
        passwordField.type = "password";
        toggleIcon.innerHTML = "&#128065;"; // Change eye icon to closed eye
      }
    }
  </script>

</body>
</html>
<?php /**PATH D:\xampp\htdocs\dti\resources\views/auth/login.blade.php ENDPATH**/ ?>