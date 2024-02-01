<header id="header-container" class="fullwidth"> 
  <!-- Header -->
  <div id="header">
    <div class="container"> 
      <div class="left-side"> 
        <div id="logo"><a href="index"><img src="images/logo.png" alt=""></a></div>
        <div class="mmenu-trigger">
          <button class="hamburger hamburger--collapse" type="button"> <span class="hamburger-box"> <span class="hamburger-inner"></span> </span> </button>
        </div>
    <!-- Main Navigation -->
        <nav id="navigation" class="style-1">
          <ul id="responsive">
            <li><a class="current" href="/">Home</a>
              <ul>
                <li class="active"><a href="/">Home Version One</a></li>
                <li><a href="/index2">Home Version Two</a></li>
                <li><a href="/index3">Home Version Three</a></li>
                <li><a href="/index4">Home Version Four</a></li>
              </ul>
            </li>
            <li><a href="#">Listings</a>
              <ul>
                <li><a href="#">Listing Layout</a>
                  <ul>
                    <li><a href="/listings_list_with_sidebar">Listing List With Sidebar</a></li>
                    <li><a href="/listings_list_with_map">Listing List With Map</a></li>
          <li><a href="/listings_grid_compact_with_sidebar">Listing Compact Sidebar</a></li>
                  </ul>
                </li>
                <li><a href="#">Listing Half Map</a>
                  <ul>
                    <li><a href="/listings_half_map_list">Listing List Map</a></li>
                    <li><a href="/listings_half_map_grid_compact">Listing Compact Grid Map</a></li>
                  </ul>
                </li>
        <li><a href="#">Single Property</a>
                  <ul>
                    <li><a href="/singleproperty1">Property Detail One</a></li>
                    <li><a href="/singleproperty2">Property Detail Two</a></li>                      
                  </ul>
                </li>                  
              </ul>
            </li>
            <li><a href="#">User Panel</a>
      <ul>
        <li><a href="/my_profile">User Profile</a></li>
        <li><a href="/my_bookmarks">Bookmark Listing</a></li>
        <li><a href="/my_properties">My Property</a></li>
        <li><a href="/add_new_property">Add New Property</a></li>
        <li><a href="/change_password">Change Password</a></li>
      </ul>
      </li>
            <li><a href="#">Pages</a>
              <ul>
        <li><a href="#">Agents</a>
                  <ul>
                    <li><a href="/agents_list">Agents List</a></li>
                    <li><a href="/agents_profile">Agents Profile</a></li>
                  </ul>
                </li>
        <li><a href="#">About</a>
                  <ul>
                    <li><a href="/agency_list">Agency List</a></li>
                    <li><a href="/agency_profile">Agency Profile</a></li>                      
                  </ul>
                </li>
        <li><a href="/about">About</a></li>
        <li><a href="/login">Login</a></li>
        <li><a href="/register">Register</a></li>
                <li><a href="/pricing_tables">Pricing Plan</a></li>
                <li><a href="/typography">Typography</a></li>
        <li><a href="/compare_properties">Compare Properties</a></li>
        <li><a href="/user_elements">User Elements</a></li>
                <li><a href="/icon_cheatsheet">Icons Cheatsheet</a></li>
              </ul>
            </li>
      <li><a href="#">Blog</a>
              <ul>
        <li><a href="/blog_list_right_sidebar">Blog List Right Sidebar</a></li>
        <li><a href="/blog_list_left_sidebar">Blog List Left Sidebar</a></li>
        <li><a href="/blog_detail_right_sidebar">Blog Detail Right Sidebar</a></li>
        <li><a href="/blog_detail_left_sidebar">Blog Detail Left Sidebar</a></li>
      </ul>
            </li>
      <li><a href="/contact">Contact</a></li>
          </ul>
        </nav>
        <div class="clearfix"></div>
      </div>
      <div class="right-side"> 
        <div class="header-widget"> 
    <a href="#utf-signin-dialog-block" class="popup-with-zoom-anim log-in-button sign-in"><i class="icon-line-awesome-user"></i> <span>Sign In</span></a> 
    <a href="/add-new-property" class="button border"><i class="icon-feather-plus-circle"></i> <span>Create Property</span></a> 
    </div>
      </div>
    </div>
  </div>
</header>
<div class="clearfix"></div>
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
