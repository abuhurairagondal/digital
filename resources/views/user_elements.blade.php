<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from utouchdesign.com/themes/realfun/user_elements.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 30 Nov 2022 10:34:55 GMT -->
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
  <!-- Header Container -->
 
  @include('include.navbar')

  
  <!-- Header Container / End --> 
  
  <!-- Titlebar -->

  @include('include.header_user_elements')

  <!-- Content --> 
  <div class="container">
	<div class="row">
      <div class="col-md-12 margin-bottom-30">
        <div class="utf-inner-list-headline-item">
			<h3>Notifications</h3>
		</div>
        <div class="notification error closeable">
          <p>Oh snap! Change a few things up and try submitting again.</p>
          <a class="close" href="#"></a> </div>
        <div class="notification success closeable">
          <p>Well done! You successfully read this important alert message.</p>
          <a class="close" href="#"></a> </div>
        <div class="notification warning closeable">
          <p>Warning! Better check yourself, you're not looking too good.</p>
          <a class="close" href="#"></a> </div>
        <div class="notification notice closeable">
          <p>Notice! Please edit the information below.</p>
          <a class="close" href="#"></a> </div>
      </div>
    </div>
	
    <div class="row margin-bottom-40">
      <div class="col-md-6">
		<div class="utf-inner-list-headline-item">
			<h3>Buttons Style</h3>
		</div>
        <p> 
			<a href="#" class="button border">Button Style One</a> 
			<a href="#" class="button medium border"><i class="fa fa-folder-open"></i> Button Style Two</a> 
			<a href="#" class="button">Button Style Three</a> 
			<a href="#" class="button medium"><i class="fa fa-folder-open"></i> Button Style Four</a> 
		</p>
      </div>
      <div class="col-md-6">
		<div class="utf-inner-list-headline-item">
			<h3>FAQ Accordions Style</h3>
		</div>
		<div class="style-2">
			<div class="accordion">
				<h3><span class="ui-accordion-header-icon ui-icon ui-accordion-icon"></span><i class="sl sl-icon-plus"></i> (1) Lorem Ipsum is simply dummy text</h3>
				<div>
					<p>Mauris mauris ante, blandit et, ultrices a, susceros. Nam mi. Proin viverra leo ut odio. Curabitur malesuada. Vestibulum a velit eu ante scelerisque vulputate aliquam egestas litora torquent conubia.</p>
				</div>
				<h3><span class="ui-accordion-header-icon ui-icon ui-accordion-icon"></span><i class="sl sl-icon-plus"></i> (2) Lorem Ipsum is simply dummy text</h3>
				<div>
					<p>Sed non urna. Donec et ante. Phasellus eu ligula. Vestibulum sit amet purus vivamus hendrerit, dolor at aliquet laoreet, mauris turpis porttitor velit, faucibus interdum tellus libero ac justo. Vivamus non quam. Nullam laoreet, velit ut taciti sociosqu condimentum feugiat.</p>
				</div>
				<h3><span class="ui-accordion-header-icon ui-icon ui-accordion-icon"></span><i class="sl sl-icon-plus"></i> (3) Lorem Ipsum is simply dummy text</h3>
				<div>
					<p>Nam enim risus, molestie et, porta ac, aliquam ac, risus. Quisque lobortis. Phasellus pellentesque purus in massa. Aenean in pede. Phasellus ac libero ac tellus pellentesque semper.</p>
				</div>
				<h3><span class="ui-accordion-header-icon ui-icon ui-accordion-icon"></span><i class="sl sl-icon-plus"></i> (4) Lorem Ipsum is simply dummy text</h3>
				<div>
					<p>Nam enim risus, molestie et, porta ac, aliquam ac, risus. Quisque lobortis. Phasellus pellentesque purus in massa. Aenean in pede. Phasellus ac libero ac tellus pellentesque semper.</p>
				</div>
			</div>
		</div>
      </div>      
    </div>
	
    <div class="row">
      <div class="col-md-6">
		<div class="utf-inner-list-headline-item">
			<h3>Tabs Style One</h3>
		</div>
        <div class="style-1"> 
          <ul class="tabs-nav">
            <li class="active"><a href="#tab1">(1) Tabs One</a></li>
            <li><a href="#tab2">(2) Tabs Two</a></li>
            <li><a href="#tab3">(3) Tabs Three</a></li>
			<li><a href="#tab4">(4) Tabs Four</a></li>
          </ul>
          
          <!-- Tabs Content -->
          <div class="tabs-container">
            <div class="tab-content" id="tab1">Lorem Ipsum is simply dummy text of the printing and type setting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic type setting, remaining essentially unchanged It was popularise.</div>
            <div class="tab-content" id="tab2">Lorem Ipsum is simply dummy text of the printing and type setting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic type setting, remaining essentially unchanged It was popularise.</div>
            <div class="tab-content" id="tab3">Lorem Ipsum is simply dummy text of the printing and type setting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic type setting, remaining essentially unchanged It was popularise.</div>
			<div class="tab-content" id="tab4">Lorem Ipsum is simply dummy text of the printing and type setting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic type setting, remaining essentially unchanged It was popularise.</div>
          </div>
        </div>
      </div>
      <div class="col-md-6">
		<div class="utf-inner-list-headline-item">
			<h3>Tabs Style Two</h3>
		</div>
        <div class="style-2"> 
          <!-- Tabs Navigation -->
          <ul class="tabs-nav">
            <li class="active"><a href="#tab1a"><i class="sl sl-icon-present"></i> Tabs One</a></li>
            <li><a href="#tab2a"><i class="sl sl-icon-trophy"></i> Tabs Two</a></li>
            <li><a href="#tab3a"><i class="sl sl-icon-notebook"></i> Tabs Three</a></li>
			<li><a href="#tab4a"><i class="sl sl-icon-graduation"></i> Tabs Four</a></li>
          </ul>
          
          <!-- Tabs Content -->
          <div class="tabs-container">
            <div class="tab-content" id="tab1a">Lorem Ipsum is simply dummy text of the printing and type setting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic type setting, remaining essentially unchanged It was popularise.</div>
            <div class="tab-content" id="tab2a">Lorem Ipsum is simply dummy text of the printing and type setting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic type setting, remaining essentially unchanged It was popularise.</div>
            <div class="tab-content" id="tab3a">Lorem Ipsum is simply dummy text of the printing and type setting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic type setting, remaining essentially unchanged It was popularise.</div>
			<div class="tab-content" id="tab4a">Lorem Ipsum is simply dummy text of the printing and type setting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic type setting, remaining essentially unchanged It was popularise.</div>
          </div>
        </div>
      </div>
    </div>
	<div class="row">
		<div class="col-md-12">
			<div class="row margin-bottom-30 margin-top-60">
			  <div class="col-md-8 col-md-offset-2 margin-bottom-20">
				  <h3 class="headline_part centered">One Column Layout</h3>
			  </div>
			  <div class="col-md-12"> 
				<h4 class="headline_part margin-top-0 margin-bottom-15">First Column</h4>
				<p>Lorem Ipsum is simply dummy text of the printing and type setting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic type setting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing.</p>
			  </div>
			</div>
			
			<div class="row margin-bottom-30">
			  <div class="col-md-8 col-md-offset-2 margin-top-30 margin-bottom-20">
				  <h3 class="headline_part centered">Two Columns Layout</h3>
			  </div> 	
			  <div class="col-md-6"> 
				<h4 class="headline_part margin-top-0 margin-bottom-15">First Column</h4>
				<p>Lorem Ipsum is simply dummy text of the printing and type setting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic type setting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing.</p>
			  </div>
			  <div class="col-md-6"> 
				<h4 class="headline_part margin-top-0 margin-bottom-15">Second Column</h4>
				<p>Lorem Ipsum is simply dummy text of the printing and type setting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic type setting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing.</p>
			  </div>
			</div>
			
			<div class="row margin-bottom-30">
			  <div class="col-md-8 col-md-offset-2 margin-top-30 margin-bottom-20">
				  <h3 class="headline_part centered">Three Columns Layout</h3>
			  </div> 
			  <div class="col-md-4"> 
				<h4 class="headline_part margin-top-0 margin-bottom-15">First Column</h4>
				<p>Lorem Ipsum is simply dummy text of the printing and type setting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
			  </div>
			  <div class="col-md-4"> 
				<h4 class="headline_part margin-top-0 margin-bottom-15">Second Column</h4>
				<p>Lorem Ipsum is simply dummy text of the printing and type setting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
			  </div>
			  <div class="col-md-4"> 
				<h4 class="headline_part margin-top-0 margin-bottom-15">Third Column</h4>
				<p>Lorem Ipsum is simply dummy text of the printing and type setting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
			  </div>
			</div>
			
			<div class="row margin-bottom-30">
			  <div class="col-md-8 col-md-offset-2 margin-top-30 margin-bottom-20">
				  <h3 class="headline_part centered">Four Columns Layout</h3>
			  </div> 
			  <div class="col-md-3"> 
				<h4 class="headline_part margin-top-0 margin-bottom-15">First Column</h4>
				<p>Lorem Ipsum is simply dummy text of the printing and type setting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
			  </div>
			  <div class="col-md-3"> 
				<h4 class="headline_part margin-top-0 margin-bottom-15">Second Column</h4>
				<p>Lorem Ipsum is simply dummy text of the printing and type setting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
			  </div>
			  <div class="col-md-3"> 
				<h4 class="headline_part margin-top-0 margin-bottom-15">Third Column</h4>
				<p>Lorem Ipsum is simply dummy text of the printing and type setting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
			  </div>
			  <div class="col-md-3"> 
				<h4 class="headline_part margin-top-0 margin-bottom-15">Fourth Column</h4>
				<p>Lorem Ipsum is simply dummy text of the printing and type setting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
			  </div>
			</div>
			
			<div class="row">
			  <div class="col-md-8 col-md-offset-2 margin-top-30 margin-bottom-20">
				  <h3 class="headline_part centered"><b>One Third Column Layout</b></h3>
			  </div> 	
			  <div class="col-md-4"> 
				<h4 class="headline_part margin-top-0 margin-bottom-15">One Third Column</h4>
				<p>Lorem Ipsum is simply dummy text of the printing and type setting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
			  </div>
			  <div class="col-md-8"> 
				<h4 class="headline_part margin-top-0 margin-bottom-15">Two Third Column</h4>
				<p>Lorem Ipsum is simply dummy text of the printing and type setting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic type setting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing.</p>
			  </div>	  
			</div>					
		 </div>
	  </div>	
  </div>
  <!-- Container / End --> 
  
  <!-- Footer -->
 

  @include('include.navbar')

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

<!-- Mirrored from utouchdesign.com/themes/realfun/user_elements.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 30 Nov 2022 10:34:55 GMT -->
</html>