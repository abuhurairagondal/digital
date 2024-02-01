<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from utouchdesign.com/themes/realfun/pricing-tables.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 30 Nov 2022 10:34:55 GMT -->
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
<div id="wrapper">   
  <!-- Header Container-->
  
  @include('include.navbar')


  <!-- Header Container / End --> 
  
  <!-- Titlebar -->
   @include('include.header_pricing-tables')

  
  <!-- Pricing Tables --> 
  <div class="container"> 
    <div class="row">
		<div class="utf-pricing-container-area margin-top-5"> 
		  <div class="col-md-4 col-sm-4 col-xs-12">
			  <div class="plan">
				<div class="utf-plan-price">
				  <h3>Basic</h3>
				  <span class="value">$49<sub> /Par Month</sub></span> <span class="period">Basic User Membership for 30 days</span> 
				</div>
				<div class="utf-plan-features">
				  <ul>
					<li>One Time Fee</li>
					<li>One Listing</li>
					<li>30 Days Availability</li>
					<li>Featured In Search Results</li>
					<li>Limited Support</li>
					<li>24/7 Support</li>
				  </ul>
				  <a class="button border" href="add-new-property.html">Purchase Now</a> 
				</div>
			  </div>
		  </div>
		  <div class="col-md-4 col-sm-4 col-xs-12">
			  <div class="plan featured">
				<div class="utf-listing-badges-item"> <span class="featured">Featured</span> </div>
				<div class="utf-plan-price">
				  <h3>Premium</h3>
				  <span class="value">$79<sub> /Par Month</sub></span> <span class="period">Premium User Membership for 180 days</span> 
				</div>
				<div class="utf-plan-features">
				  <ul>
					<li>One Time Fee</li>
					<li>One Listing</li>
					<li>180 Days Availability</li>
					<li>Featured In Search Results</li>
					<li>Limited Support</li>
					<li>24/7 Support</li>
				  </ul>
				  <a class="button border" href="add-new-property.html">Purchase Now</a> 
				</div>
			  </div>
		  </div>	  
		  <div class="col-md-4 col-sm-4 col-xs-12">
			  <div class="plan">
				<div class="utf-plan-price">
				  <h3>Platinum</h3>
				  <span class="value">$99<sub> /Par Month</sub></span> <span class="period">Platinum User Membership for 365 days</span> 
				</div>
				<div class="utf-plan-features">
				  <ul>
					<li>One Time Fee</li>
					<li>One Listing</li>
					<li>365 Days Availability</li>
					<li>Featured In Search Results</li>
					<li>Limited Support</li>
					<li>24/7 Support</li>
				  </ul>
				  <a class="button border" href="add-new-property.html">Purchase Now</a> 
				</div>
			  </div>
		   </div>  
		</div>
    </div>
    <!-- Row / End -->     
  </div>
  <!-- Container / End --> 
  
  <!-- Footer -->

  @include('include.Footer')


  <!-- Footer / End --> 
  
  <!-- Back To Top Button -->
  <div id="backtotop"><a href="#"></a></div>

</div>
<!-- Wrapper / End -->

<!-- Sign In Popup -->
<div id="utf-signin-dialog-block" class="zoom-anim-dialog mfp-hide dialog-with-tabs"> 
  <div class="utf-signin-form-part">
    <ul class="utf-popup-tabs-nav-item">
      <li><a href="#login">Log In</a></li>
      <li><a href="#register">Register</a></li>
    </ul>
    <div class="utf-popup-container-part-tabs"> 
      <!-- Login -->
      <div class="utf-popup-tab-content-item" id="login"> 
        <div class="utf-welcome-text-item">
          <h3>Welcome Back Sign in to Continue</h3>
          <span>Don't Have an Account? <a href="#" class="register-tab">Sign Up!</a></span> 
		</div>
        <form method="post" id="login-form">
          <div class="utf-no-border">
            <input type="text" name="emailaddress" id="emailaddress" placeholder="Email Address" required/>
          </div>
          <div class="utf-no-border">
            <input type="password" name="password" id="password" placeholder="Password" required/>
          </div>
		  <div class="checkbox margin-top-0">
			<input type="checkbox" id="two-step">
			<label for="two-step"><span class="checkbox-icon"></span> Remember Me</label>
		  </div>
          <a href="forgot_password.html" class="forgot-password">Forgot Password?</a>
        </form>
        <button class="button full-width utf-button-sliding-icon ripple-effect" type="submit" form="login-form">Log In <i class="icon-feather-chevrons-right"></i></button>
        <div class="utf-social-login-separator-item"><span>Or Login in With</span></div>
        <div class="utf-social-login-buttons-block">
          <button class="facebook-login ripple-effect"><i class="icon-brand-facebook-f"></i> Facebook</button>
		  <button class="google-login ripple-effect"><i class="icon-brand-google"></i> Google</button>
		  <button class="twitter-login ripple-effect"><i class="icon-brand-twitter"></i> Twitter</button>
        </div>
      </div>
      
      <!-- Register -->
      <div class="utf-popup-tab-content-item" id="register"> 
        <div class="utf-welcome-text-item">
          <h3>Create your Account!</h3>
		  <span>Don't Have an Account? <a href="#" class="register-tab">Sign Up!</a></span> 
        </div>        
        <form method="post" id="utf-register-account-form">
          <div class="utf-no-border margin-bottom-20">
			<select class="utf-chosen-select-single-item utf-with-border" title="Single User">
				<option>Single User</option>
				<option>Agent</option>
				<option>Multi User</option>				
			</select>
		  </div>
		  <div class="utf-no-border">
            <input type="text" name="name" id="name" placeholder="User Name" required/>
          </div>
		  <div class="utf-no-border">
            <input type="text" name="emailaddress-register" id="emailaddress-register" placeholder="Email Address" required/>
          </div>
		  <div class="utf-no-border">
            <input type="password" name="password-register" id="password-register" placeholder="Password" required/>
          </div>
          <div class="utf-no-border">
            <input type="password" name="password-repeat-register" id="password-repeat-register" placeholder="Repeat Password" required/>
          </div>
		  <div class="checkbox margin-top-0">
			<input type="checkbox" id="two-step0">
			<label for="two-step0"><span class="checkbox-icon"></span> By Registering You Confirm That You Accept <a href="#">Terms & Conditions</a> and <a href="#">Privacy Policy</a></label>
		  </div>
        </form>
        <button class="margin-top-10 button full-width utf-button-sliding-icon ripple-effect" type="submit" form="utf-register-account-form">Register <i class="icon-feather-chevrons-right"></i></button>
        <div class="utf-social-login-separator-item"><span>Or Login in With</span></div>
        <div class="utf-social-login-buttons-block">
          <button class="facebook-login ripple-effect"><i class="icon-brand-facebook-f"></i> Facebook</button>
		  <button class="google-login ripple-effect"><i class="icon-brand-google"></i> Google</button>
		  <button class="twitter-login ripple-effect"><i class="icon-brand-twitter"></i> Twitter</button>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Sign In Popup / End -->

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

<!-- Mirrored from utouchdesign.com/themes/realfun/pricing-tables.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 30 Nov 2022 10:34:55 GMT -->
</html>