<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from utouchdesign.com/themes/realfun/all-categorie.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 30 Nov 2022 10:40:39 GMT -->

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
 
  
  @include('include.header_all_categorie')

  <!-- Pricing Tables --> 
  <div class="container"> 
    <div class="row">
        <div class="col-md-4 col-sm-6"> 
		  <a href="listings-list-with-sidebar.html" class="img-box">
			  <div class="utf-listing-badges-item"> <span class="featured">Featured</span> </div>
			  <img src="images/popular-location-01.jpg" alt="" />
			  <div class="utf-cat-img-box-content visible">
				<h4>Afghanistan</h4>
				<span>14 Properties</span> 
			  </div>
          </a> 
		</div>
        <div class="col-md-4 col-sm-6"> 
		  <a href="listings-list-with-sidebar.html" class="img-box">
			  <img src="images/popular-location-02.jpg" alt="" />	
			  <div class="utf-cat-img-box-content visible">
				<h4>Australia</h4>
				<span>24 Properties</span> 
			  </div>
          </a> 
		</div>
        <div class="col-md-4 col-sm-6"> 
		  <a href="listings-list-with-sidebar.html" class="img-box">
			  <div class="utf-listing-badges-item"> <span class="featured">Featured</span> </div>
			  <img src="images/popular-location-03.jpg" alt="" />
			  <div class="utf-cat-img-box-content visible">
				<h4>Bangladesh</h4>
				<span>12 Properties</span> 
			  </div>
          </a> 
		</div>
        <div class="col-md-4 col-sm-6"> 
		  <a href="listings-list-with-sidebar.html" class="img-box">
			  <img src="images/popular-location-04.jpg" alt="" />	
			  <div class="utf-cat-img-box-content visible">
				<h4>Miami</h4>
				<span>9 Properties</span> 
			  </div>
          </a> 
		</div>
		<div class="col-md-4 col-sm-6"> 
			<a href="listings-list-with-sidebar.html" class="img-box"> 
				<div class="utf-listing-badges-item"> <span class="featured">Featured</span> </div>
				<img src="images/popular-location-05.jpg" alt="" />
				<div class="utf-cat-img-box-content visible">
				  <h4>Belize</h4>
				  <span>14 Properties</span> 
				</div>
			</a> 
		  </div>
		  <div class="col-md-4 col-sm-6"> 
			<a href="listings-list-with-sidebar.html" class="img-box">
			    <img src="images/popular-location-06.jpg" alt="" />
				<div class="utf-cat-img-box-content visible">
				  <h4>Cambodia</h4>
				  <span>24 Properties</span> 
				</div>
			</a> 
		  </div>
		 <div class="col-md-4 col-sm-6"> 
		  <a href="listings-list-with-sidebar.html" class="img-box">
			  <div class="utf-listing-badges-item"> <span class="featured">Featured</span> </div>
			  <img src="images/popular-location-07.jpg" alt="" />
			  <div class="utf-cat-img-box-content visible">
				<h4>Czech Republic</h4>
				<span>9 Properties</span> 
			  </div>
          </a> 
		</div>
		<div class="col-md-4 col-sm-6"> 
			<a href="listings-list-with-sidebar.html" class="img-box"> 
			    <img src="images/popular-location-08.jpg" alt="" />
				<div class="utf-cat-img-box-content visible">
				  <h4>Equatorial</h4>
				  <span>14 Properties</span> 
				</div>
			</a> 
		  </div>
		  <div class="col-md-4 col-sm-6"> 
			<a href="listings-list-with-sidebar.html" class="img-box">
				<div class="utf-listing-badges-item"> <span class="featured">Featured</span> </div>
				<img src="images/popular-location-09.jpg" alt="" />
				<div class="utf-cat-img-box-content visible">
				  <h4>Indonesia</h4>
				  <span>24 Properties</span> 
				</div>
			</a> 
		  </div>
      </div>
    <!-- Row / End -->     
  </div>
  <!-- Container / End --> 
  
  <!-- Footer -->
  
  @include('include.footer')

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

<!-- Mirrored from utouchdesign.com/themes/realfun/all-categorie.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 30 Nov 2022 10:41:09 GMT -->
</html>