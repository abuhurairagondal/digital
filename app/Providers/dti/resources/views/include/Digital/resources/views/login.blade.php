<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from utouchdesign.com/themes/realfun/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 30 Nov 2022 10:34:55 GMT -->
<head>

  @include('include.haeder_links')

</head>

<body>
<!-- Preloader Start -->
<div class="preloader">
    <div class="utf-preloader">
        <span></span>
        <span></span>
        <span></span>
    </div>
</div>
<!-- Preloader End -->

<!-- Wrapper -->

@include('include.navbar')

  <!-- Header Container / End --> 
  
  <!-- Titlebar -->
 
  @include('include.header_login')

  <!-- Contact --> 
  <div class="container">
    <div class="row">
      <div class="col-md-6 col-md-offset-3">
        <div class="my-account">
          <div class="tabs-container"> 
            <!-- Login -->
			  <div class="utf-welcome-text-item">
				<h3>Welcome Back Sign in to Continue</h3>
				<span>Don't Have an Account? <a href="register.html">Sign Up!</a></span> 
			  </div>
              <form method="post" class="login">
                <div class="form-row form-row-wide">
                    <input type="text" class="input-text" name="email" id="email" placeholder="Email Address" value="" />
                </div>
                <div class="form-row form-row-wide">
                    <input class="input-text" type="password" name="password" placeholder="Password" id="password"/>
                </div>
                <div class="form-row">
                  <div class="checkbox margin-top-10 margin-bottom-10">
					<input type="checkbox" id="two-step">
					<label for="two-step"><span class="checkbox-icon"></span> Remember Me</label>
				  </div>
				  <a class="lost_password" href="forgot_password.html">Forgot Password?</a>	
                </div>
				<input type="submit" class="button full-width border margin-top-10" name="login" value="Login" />
				<div class="utf-social-login-separator-item"><span>Or Login in With</span></div>
				<div class="utf-social-login-buttons-block">
					<button class="button social-login via-twitter"><i class="icon-brand-facebook-f"></i> Facebook</button>
					<button class="button social-login via-gplus"><i class="icon-brand-google"></i> Google</button>
					<button class="button social-login via-facebook"><i class="icon-brand-twitter"></i> Twitter</button>
				</div>	
              </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Container / End --> 
  
  <!-- Footer -->
  @include('include.Footer')

  <!-- Footer / End --> 
  
<!-- Back To Top Button -->
<div id="backtotop"><a href="#"></a></div>

</div>
<!-- Wrapper / End --> 

<!-- Scripts --> 
<script src="scripts/jquery-3.3.1.min.js"></script> 
<script src="scripts/bootstrap.min.js"></script>
<script src="scripts/chosen.min.js"></script> 
<script src="scripts/magnific-popup.min.js"></script> 
<script src="scripts/owl.carousel.min.js"></script> 
<script src="scripts/rangeSlider.js"></script> 
<script src="scripts/sticky-kit.min.js"></script> 
<script src="scripts/slick.min.js"></script> 
<script src="scripts/masonry.min.js"></script> 
<script src="scripts/mmenu.min.js"></script> 
<script src="scripts/tooltips.min.js"></script> 
<script src="scripts/custom_jquery.js"></script> 
</body>

<!-- Mirrored from utouchdesign.com/themes/realfun/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 30 Nov 2022 10:34:55 GMT -->
</html>