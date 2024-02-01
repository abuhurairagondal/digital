<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from utouchdesign.com/themes/realfun/compare-properties.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 30 Nov 2022 10:32:10 GMT -->
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
 
  
  @include('include.header_compare-properties')
  
  <!-- Content -->
  <div class="container">
    <div class="row">
      <div class="col-md-12"> 
        
        <!-- Compare List -->
        <div class="utf-utf-compare-list-item-area">
          <ul id="utf-compare-list">
            <li class="compare-item-list-properti">
              <div class="blank-div"></div>
              <div> <a href="#">
                <div class="utf-smt-img-item"> <img src="images/listing-01.jpg" alt=""> <span class="utf-remove-compare-item"><i class="icon-line-awesome-close"></i></span> </div>
                <div class="utf-smt-title-item">
                  <h4>Renovated Luxury Apartment</h4>
                  <span>$18,000/mo</span> 
				</div>
                </a>
			  </div>
              <div> <a href="#">
                <div class="utf-smt-img-item"> <img src="images/listing-02.jpg" alt=""> <span class="utf-remove-compare-item"><i class="icon-line-awesome-close"></i></span> </div>
                <div class="utf-smt-title-item">
                  <h4>Renovated Luxury Apartment</h4>
                  <span>$22,000/mo</span> 
				</div>
                </a> 
			  </div>              
            </li>
            <li>
              <div>Area</div>
              <div>Sq Ft 1280</div>
              <div>Sq Ft 1460</div>
            </li>
            <li>
              <div>Bed Rooms</div>
              <div>3</div>
              <div>2</div>
            </li>
            <li>
              <div>Bath Rooms</div>
              <div>2</div>
              <div>1</div>
            </li>
            <li>
              <div>Air Conditioning</div>
              <div><span class="available"></span></div>
              <div><span class="available"></span></div>
            </li>
            <li>
              <div>Swimming Pool</div>
              <div><span class="not-available"></span></div>
              <div><span class="not-available"></span></div>
            </li>
            <li>
              <div>Laundry Room</div>
              <div><span class="available"></span></div>
              <div><span class="available"></span></div>
            </li>
            <li>
              <div>Window Covering</div>
              <div><span class="not-available"></span></div>
              <div><span class="available"></span></div>
            </li>
            <li>
              <div>Gym</div>
              <div><span class="available"></span></div>
              <div><span class="not-available"></span></div>
            </li>
            <li>
              <div>Internet</div>
              <div><span class="available"></span></div>
              <div><span class="available"></span></div>
            </li>            
          </ul>
        </div>
        <!-- Compare List / End -->         
      </div>
    </div>
  </div>
  
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

<!-- Mirrored from utouchdesign.com/themes/realfun/compare-properties.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 30 Nov 2022 10:32:10 GMT -->
</html>