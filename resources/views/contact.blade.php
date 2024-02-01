<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from utouchdesign.com/themes/realfun/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 30 Nov 2022 10:34:59 GMT -->
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
  <!-- Compare Property Widget -->
  <div class="utf-compare-slidebar-area">
    <div class="utf-smt-trigger-item"></div>
    <div class="utf-smt-content">
      <h4>Compare Property
        <span class="utf-smt-mobile-trigger-item"></span>
      </h4>
      <div class="utf-smt-property-item"> 
        <!-- Property -->
        <div class="utf-listing-item compact"> <a href="single-property-page-2.html" class="utf-smt-listing-img-container">
          <div class="utf-remove-compare-item"><i class="icon-line-awesome-close"></i></div>
          <div class="utf-listing-badges-item"><span class="for-sale">For Sale</span></div>
          <div class="utf-listing-img-content-item"> <span class="utf-listing-compact-title-item">Renovated Luxury Apartment <i>$420,000</i></span> </div>
          <img src="images/listing-01.jpg" alt=""> </a> 
		</div>
        <!-- Property -->
        <div class="utf-listing-item compact"> <a href="single-property-page-2.html" class="utf-smt-listing-img-container">
          <div class="utf-remove-compare-item"><i class="icon-line-awesome-close"></i></div>
          <div class="utf-listing-badges-item"><span class="for-sale">For Sale</span></div>
          <div class="utf-listing-img-content-item"> <span class="utf-listing-compact-title-item">Renovated Luxury Apartment <i>$420,000</i></span> </div>
          <img src="images/listing-02.jpg" alt=""> </a> 
		</div>        
      </div>
      <div class="utf-smt-buttons"><a href="compare-properties.html" class="button">Compare Property</a></div>
    </div>
  </div>
  <!-- Compare Property Widget / End --> 
  
  <!-- Header Container -->
  

  @include('include.navbar')

  <!-- Header Container / End --> 
  
  <!-- Titlebar -->
  <div class="parallax titlebar" data-background="images/listings-parallax.jpg" data-color="rgba(48, 48, 48, 1)" data-color-opacity="0.8" data-img-width="800" data-img-height="505">
    <div id="titlebar">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h2>Contact Us</h2>
            <!-- Breadcrumbs -->
            <nav id="breadcrumbs">
              <ul>
                <li><a href="index.html">Home</a></li>
                <li>Contact Us</li>
              </ul>
            </nav>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Container / Start -->
  <div class="container">
    <div class="row">  
	  <div class="col-md-12">
        <div class="utf-contact-map margin-bottom-50">
          <div class="utf-google-map-container">
			  <div id="propertyMap" data-latitude="48.8566" data-longitude="2.3522" data-map-icon="im im-icon-Hamburger"></div>
			  <a href="#" id="streetView">Street View</a> 
		  </div>
        </div>
      </div>	
      <!-- Contact Details -->
      <div class="col-md-4">
        <div class="utf-boxed-list-headline-item">
            <h3><i class="icon-feather-map"></i> Office Address</h3>
        </div>
        <!-- Contact Details -->
        <div class="utf-contact-location-info-aera sidebar-textbox margin-bottom-40">
          <ul class="contact-details">
            <li><i class="icon-feather-smartphone"></i> <strong>Phone Number:</strong> <span>(+21) 124 123 4546</span></li>
            <li><i class="icon-material-outline-email"></i> <strong>Email Address:</strong> <span><a href="#">info@example.com</a></span></li>
			<li><i class="icon-feather-globe"></i> <strong>Website:</strong> <span>www.example.com</span></li>
			<li><i class="icon-feather-map-pin"></i> <strong>Address:</strong> <span>3241, Lorem ipsum dolor sit amet, consectetur adipiscing elit Proin fermentum condimentum mauris.</span></li>            
          </ul>
        </div>
      </div>
      
      <!-- Contact Form -->
      <div class="col-md-8">
        <section id="contact">
		  <div class="utf-boxed-list-headline-item">
            <h3><i class="icon-feather-layers"></i> Contact Form</h3>
          </div>
		  <div class="utf-contact-form-item">
			  <form>
				<div class="row">
				  <div class="col-md-6">
					  <input name="name" type="text" placeholder="Frist Name" required />                
				  </div>
				  <div class="col-md-6">
					  <input name="name" type="text" placeholder="Last Name" required />                
				  </div>
				  <div class="col-md-6">
					  <input name="email" type="email" placeholder="Email Address" required />                
				  </div>
				  <div class="col-md-6">
					  <input name="name" type="text" placeholder="Subject" required />                
				  </div>
				  <div class="col-md-12">
					  <textarea name="comments" cols="40" rows="3" placeholder="Message..." spellcheck="true" required></textarea>
				  </div>
				</div>
				<div class="utf-centered-button margin-bottom-10">	
					<input type="submit" class="submit button" id="submit" value="Submit Message" />
				</div>
			  </form>
		    </div>	  
        </section>
      </div>
      <!-- Contact Form / End -->       
    </div>
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

<!-- Maps --> 
<script src="https://maps.googleapis.com/maps/api/js?key=&amp;libraries=places"></script>
<script src="scripts/infobox.min.js"></script> 
<script src="scripts/markerclusterer.js"></script> 
<script src="scripts/maps.js"></script> 
</body>

<!-- Mirrored from utouchdesign.com/themes/realfun/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 30 Nov 2022 10:34:59 GMT -->
</html>