<!DOCTYPE html>
<html lang="en">


@include('include.haeder_links')

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

  @include('include.header_agency_profile')
  
  <!-- Content -->
  <div class="container">
    <div class="row">
      <div class="col-md-12"> 
        <!-- Agency -->
        <div class="agent agents-profile agency"> <a href="agency-profile.html" class="utf-agent-avatar"> <img src="images/agency-01.jpg" alt=""> </a>
          <div class="utf-agent-content">
            <div class="utf-agent-name">
			  <p class="text-alt">Agent</p>
			  <div class="fp_pdate">2 Hour Ago</div>	
              <h4><a href="agency-profile.html">House Real Estate</a></h4>
              <ul class="utf-agent-contact-details">
			      <li><i class="icon-material-outline-business"></i>Afghanistan</li>
				  <li><i class="icon-feather-smartphone"></i>(+21) 124 123 4546</li>
				  <li><i class="icon-material-outline-email"></i><a href="#">demo@example.com</a></li>
			  </ul> 
			  <ul class="utf-social-icons">
				  <li><a class="facebook" href="#"><i class="icon-facebook"></i></a></li>
				  <li><a class="twitter" href="#"><i class="icon-twitter"></i></a></li>
				  <li><a class="linkedin" href="#"><i class="icon-linkedin"></i></a></li>
				  <li><a class="instagram" href="#"><i class="icon-instagram"></i></a></li>
				  <li><a class="gplus" href="#"><i class="icon-gplus"></i></a></li>
			  </ul>
			</div>
			<div class="clearfix"></div>
            <p>Lorem Ipsum is simply dummy text of the printing and type setting industry. Lorem Ipsum has been the industry's standard dummy text. Lorem Ipsum is simply dummy text of the printing and type setting industry. Lorem Ipsum has been the industry's standard dummy text.</p>                      
          </div>
        </div>
	  </div>
    </div>
  </div>
  
  <!-- Content -->
  <div class="container">
    <div class="row sticky-wrapper">
      <div class="col-lg-8 col-md-8">
        <div class="style-1 agency-tabs"> 
          <!-- Tabs Navigation -->
          <ul class="tabs-nav">
            <li class="active"><a href="#tab1">Our Properties</a></li>
            <li><a href="#tab2">Our Agents</a></li>
          </ul>
          
          <!-- Tabs Content -->
          <div class="tabs-container">
            <div class="tab-content" id="tab1"> 
              <!-- Sorting -->
			  <div class="utf-sort-box-aera">
				<div class="sort-by">
				  <label>Sort By:</label>
				  <div class="sort-by-select">
					<select data-placeholder="Default Properties" class="utf-chosen-select-single-item" >
					  <option>Default Properties</option>
					  <option>Low to High Price</option>
					  <option>High to Low Price</option>
					  <option>Newest Properties</option>
					  <option>Oldest Properties</option>
					</select>
				  </div>
				</div>
				<div class="utf-layout-switcher"> 
					<a href="#" class="list"><i class="sl sl-icon-list"></i></a> 
					<a href="#" class="grid"><i class="sl sl-icon-grid"></i></a> 
				</div>
 			  </div>
              
              <!-- Listings -->
              <div class="utf-listings-container-area list-layout">                 
                <!-- Listing Item -->
                <div class="utf-listing-item"> <a href="#" class="utf-smt-listing-img-container">
                  <div class="utf-listing-badges-item"> <span class="featured">Featured</span> <span class="for-sale">For Sale</span> </div>
                  <div class="utf-listing-img-content-item">
					<img class="utf-user-picture" src="images/user_1.jpg" alt="user_1" />
					<span class="like-icon with-tip" data-tip-content="Bookmark"></span> 
					<span class="compare-button with-tip" data-tip-content="Add to Compare"></span>
					<span class="video-button with-tip" data-tip-content="Video"></span>
				  </div>
                  <div class="utf-listing-carousel-item">
                    <div><img src="images/listing-01.jpg" alt=""></div>
                    <div><img src="images/listing-01.jpg" alt=""></div>
                    <div><img src="images/listing-01.jpg" alt=""></div>
                  </div>
                  </a>
                  <div class="utf-listing-content">
                    <div class="utf-listing-title">
					  <span class="utf-listing-price">$22,000/mo</span>
                      <h4><a href="#">Renovated Luxury Apartment</a></h4>
                      <span class="utf-listing-address"><i class="icon-material-outline-location-on"></i> 2021 San Pedro, Los Angeles 90015</span>
					</div>
                    <ul class="listing-details">
                        <li><i class="fa fa-bed"></i> Beds<span>3</span></li>
						<li><i class="icon-feather-codepen"></i> Baths<span>2</span></li>
						<li><i class="fa fa-car"></i> Garages<span>2</span></li>					  					 
						<li><i class="icon-line-awesome-arrows"></i> Sq Ft<span>1530</span></li>
                    </ul>
                    <div class="utf-listing-user-info"><a href="agents-profile.html"><i class="icon-line-awesome-user"></i> John Williams</a> <span>1 Days Ago</span></div>
                  </div>
                </div>
                <!-- Listing Item / End --> 
                
                <!-- Listing Item -->
                <div class="utf-listing-item"> <a href="#" class="utf-smt-listing-img-container">
                  <div class="utf-listing-badges-item"> <span class="for-rent">For Rent</span> </div>
                  <div class="utf-listing-img-content-item">
					<img class="utf-user-picture" src="images/user_1.jpg" alt="user_1" />
					<span class="like-icon with-tip" data-tip-content="Bookmark"></span> 
					<span class="compare-button with-tip" data-tip-content="Add to Compare"></span>
					<span class="video-button with-tip" data-tip-content="Video"></span>
				  </div>
                  <img src="images/listing-02.jpg" alt=""> </a>
                  <div class="utf-listing-content">
                    <div class="utf-listing-title">
					  <span class="utf-listing-price">$25,000/mo</span>
                      <h4><a href="#">Renovated Luxury Apartment</a></h4>
                      <span class="utf-listing-address"><i class="icon-material-outline-location-on"></i> 2021 San Pedro, Los Angeles 90015</span>
					</div>
                    <ul class="listing-details">
                        <li><i class="fa fa-bed"></i> Beds<span>3</span></li>
						<li><i class="icon-feather-codepen"></i> Baths<span>2</span></li>
						<li><i class="fa fa-car"></i> Garages<span>2</span></li>					  					 
						<li><i class="icon-line-awesome-arrows"></i> Sq Ft<span>1530</span></li>
                    </ul>
                    <div class="utf-listing-user-info"><a href="agents-profile.html"><i class="icon-line-awesome-user"></i> John Williams</a> <span>1 Days Ago</span></div>
                  </div>
                </div>
                <!-- Listing Item / End --> 
                
                <!-- Listing Item -->
                <div class="utf-listing-item"> <a href="#" class="utf-smt-listing-img-container">
                  <div class="utf-listing-badges-item"> <span class="featured">Featured</span> <span class="for-rent">For Rent</span> </div>
                  <div class="utf-listing-img-content-item">
					<img class="utf-user-picture" src="images/user_1.jpg" alt="user_1" />
					<span class="like-icon with-tip" data-tip-content="Bookmark"></span> 
					<span class="compare-button with-tip" data-tip-content="Add to Compare"></span>
					<span class="video-button with-tip" data-tip-content="Video"></span>
				  </div>
                  <img src="images/listing-03.jpg" alt=""> </a>
                  <div class="utf-listing-content">
                    <div class="utf-listing-title">
					  <span class="utf-listing-price">$18,000/mo</span>
                      <h4><a href="#">Renovated Luxury Apartment</a></h4>
                      <span class="utf-listing-address"><i class="icon-material-outline-location-on"></i> 2021 San Pedro, Los Angeles 90015</span>
					</div>
                    <ul class="listing-details">
                        <li><i class="fa fa-bed"></i> Beds<span>3</span></li>
						<li><i class="icon-feather-codepen"></i> Baths<span>2</span></li>
						<li><i class="fa fa-car"></i> Garages<span>2</span></li>					  					 
						<li><i class="icon-line-awesome-arrows"></i> Sq Ft<span>1530</span></li>
                    </ul>
                    <div class="utf-listing-user-info"><a href="agents-profile.html"><i class="icon-line-awesome-user"></i> John Williams</a> <span>1 Days Ago</span></div>
                  </div>                  
                </div>
                <!-- Listing Item / End --> 
                
                <!-- Listing Item -->
                <div class="utf-listing-item"> <a href="#" class="utf-smt-listing-img-container">
                  <div class="utf-listing-badges-item"> <span class="for-sale">For Sale</span> </div>
                  <div class="utf-listing-img-content-item">
					<img class="utf-user-picture" src="images/user_1.jpg" alt="user_1" />
					<span class="like-icon with-tip" data-tip-content="Bookmark"></span> 
					<span class="compare-button with-tip" data-tip-content="Add to Compare"></span>
					<span class="video-button with-tip" data-tip-content="Video"></span>
				  </div>
                  <div class="utf-listing-carousel-item">
                    <div><img src="images/listing-04.jpg" alt=""></div>
                    <div><img src="images/listing-04.jpg" alt=""></div>
                  </div>
                  </a>
                  <div class="utf-listing-content">
                    <div class="utf-listing-title">
					  <span class="utf-listing-price">$15,000/mo</span>
                      <h4><a href="#">Renovated Luxury Apartment</a></h4>
                      <span class="utf-listing-address"><i class="icon-material-outline-location-on"></i> 2021 San Pedro, Los Angeles 90015</span>
					</div>
                    <ul class="listing-details">
                        <li><i class="fa fa-bed"></i> Beds<span>3</span></li>
						<li><i class="icon-feather-codepen"></i> Baths<span>2</span></li>
						<li><i class="fa fa-car"></i> Garages<span>2</span></li>					  					 
						<li><i class="icon-line-awesome-arrows"></i> Sq Ft<span>1530</span></li>
                    </ul>
                    <div class="utf-listing-user-info"><a href="agents-profile.html"><i class="icon-line-awesome-user"></i> John Williams</a> <span>1 Days Ago</span></div>
                  </div>                  
                </div>                
              </div>
              <!-- Listings Container / End --> 
              
              <!-- Pagination -->
              <div class="utf-pagination-container margin-top-20">
                <nav class="pagination">
                  <ul>
                      <li><a href="#"><i class="fa fa-angle-left"></i></a></li>
					  <li><a href="#" class="current-page">1</a></li>
					  <li><a href="#">2</a></li>
					  <li><a href="#">3</a></li>
					  <li class="blank">...</li>
					  <li><a href="#">10</a></li>
					  <li><a href="#"><i class="fa fa-angle-right"></i></a></li>
                  </ul>
                </nav>                
              </div>
              <!-- Pagination / End --> 
            </div>
            <div class="tab-content" id="tab2"> 
              <!-- Agents Container -->
              <div class="row"> 
                <div class="col-lg-4 col-md-6 col-xs-12">
                  <div class="agent">
                    <div class="utf-agent-avatar"> <a href="agents-profile.html"> <img src="images/agent-01.jpg" alt=""> <span class="view-profile-btn">View Profile</span> </a> </div>
                    <div class="utf-agent-content">
                      <div class="utf-agent-name">
                        <h4><a href="agents-profile.html">John Williams</a></h4>
                        <span>Agent In Afghanistan</span> 
					  </div>                      
                    </div>
                  </div>
                </div>
                <!-- Agent / End --> 
                
                <!-- Agent -->
                <div class="col-lg-4 col-md-6 col-xs-12">
                  <div class="agent">
                    <div class="utf-agent-avatar"> <a href="agents-profile.html"> <img src="images/agent-02.jpg" alt=""> <span class="view-profile-btn">View Profile</span> </a> </div>
                    <div class="utf-agent-content">
                      <div class="utf-agent-name">
                        <h4><a href="agents-profile.html">John Williams</a></h4>
                        <span>Agent In Afghanistan</span> 
					  </div>                      
                    </div>
                  </div>
                </div>
                <!-- Agent / End --> 
                
                <!-- Agent -->
                <div class="col-lg-4 col-md-6 col-xs-12">
                  <div class="agent">
                    <div class="utf-agent-avatar"> <a href="agents-profile.html"> <img src="images/agent-03.jpg" alt=""> <span class="view-profile-btn">View Profile</span> </a> </div>
                    <div class="utf-agent-content">
                      <div class="utf-agent-name">
                        <h4><a href="agents-profile.html">John Williams</a></h4>
                        <span>Agent In Afghanistan</span> 
					  </div>                      
                    </div>
                  </div>
                </div>
                <!-- Agent / End --> 
                
                <!-- Agent -->
                <div class="col-lg-4 col-md-6 col-xs-12">
                  <div class="agent">
                    <div class="utf-agent-avatar"> <a href="agents-profile.html"> <img src="images/agent-04.jpg" alt=""> <span class="view-profile-btn">View Profile</span> </a> </div>
                    <div class="utf-agent-content">
                      <div class="utf-agent-name">
                        <h4><a href="agents-profile.html">John Williams</a></h4>
                        <span>Agent In Afghanistan</span> 
					  </div>                      
                    </div>
                  </div>
                </div>
                <!-- Agent / End -->

				<!-- Agent -->
                <div class="col-lg-4 col-md-6 col-xs-12">
                  <div class="agent">
                    <div class="utf-agent-avatar"> <a href="agents-profile.html"> <img src="images/agent-05.jpg" alt=""> <span class="view-profile-btn">View Profile</span> </a> </div>
                    <div class="utf-agent-content">
                      <div class="utf-agent-name">
                        <h4><a href="agents-profile.html">John Williams</a></h4>
                        <span>Agent In Afghanistan</span> 
					  </div>                      
                    </div>
                  </div>
                </div>
                <!-- Agent / End -->

				<!-- Agent -->
                <div class="col-lg-4 col-md-6 col-xs-12">
                  <div class="agent">
                    <div class="utf-agent-avatar"> <a href="agents-profile.html"> <img src="images/agent-06.jpg" alt=""> <span class="view-profile-btn">View Profile</span> </a> </div>
                    <div class="utf-agent-content">
                      <div class="utf-agent-name">
                        <h4><a href="agents-profile.html">John Williams</a></h4>
                        <span>Agent In Afghanistan</span> 
					  </div>                      
                    </div>
                  </div>
                </div>
                <!-- Agent / End -->

				<!-- Agent -->
                <div class="col-lg-4 col-md-6 col-xs-12">
                  <div class="agent">
                    <div class="utf-agent-avatar"> <a href="agents-profile.html"> <img src="images/agent-07.jpg" alt=""> <span class="view-profile-btn">View Profile</span> </a> </div>
                    <div class="utf-agent-content">
                      <div class="utf-agent-name">
                        <h4><a href="agents-profile.html">John Williams</a></h4>
                        <span>Agent In Afghanistan</span> 
					  </div>                      
                    </div>
                  </div>
                </div>
                <!-- Agent / End --> 
                
                <!-- Agent -->
                <div class="col-lg-4 col-md-6 col-xs-12">
                  <div class="agent">
                    <div class="utf-agent-avatar"> <a href="agents-profile.html"> <img src="images/agent-08.jpg" alt=""> <span class="view-profile-btn">View Profile</span> </a> </div>
                    <div class="utf-agent-content">
                      <div class="utf-agent-name">
                        <h4><a href="agents-profile.html">John Williams</a></h4>
                        <span>Agent In Afghanistan</span> 
					  </div>                      
                    </div>
                  </div>
                </div>
                <!-- Agent / End -->

				<!-- Agent -->
                <div class="col-lg-4 col-md-6 col-xs-12">
                  <div class="agent">
                    <div class="utf-agent-avatar"> <a href="agents-profile.html"> <img src="images/agent-09.jpg" alt=""> <span class="view-profile-btn">View Profile</span> </a> </div>
                    <div class="utf-agent-content">
                      <div class="utf-agent-name">
                        <h4><a href="agents-profile.html">John Williams</a></h4>
                        <span>Agent In Afghanistan</span> 
					  </div>                      
                    </div>
                  </div>
                </div>
                <!-- Agent / End -->

				<!-- Agent -->
                <div class="col-lg-4 col-md-6 col-xs-12">
                  <div class="agent">
                    <div class="utf-agent-avatar"> <a href="agents-profile.html"> <img src="images/agent-10.jpg" alt=""> <span class="view-profile-btn">View Profile</span> </a> </div>
                    <div class="utf-agent-content">
                      <div class="utf-agent-name">
                        <h4><a href="agents-profile.html">John Williams</a></h4>
                        <span>Agent In Afghanistan</span> 
					  </div>                      
                    </div>
                  </div>
                </div>
                <!-- Agent / End -->
				
				<!-- Agent -->
                <div class="col-lg-4 col-md-6 col-xs-12">
                  <div class="agent">
                    <div class="utf-agent-avatar"> <a href="agents-profile.html"> <img src="images/agent-01.jpg" alt=""> <span class="view-profile-btn">View Profile</span> </a> </div>
                    <div class="utf-agent-content">
                      <div class="utf-agent-name">
                        <h4><a href="agents-profile.html">John Williams</a></h4>
                        <span>Agent In Afghanistan</span> 
					  </div>                      
                    </div>
                  </div>
                </div>
                <!-- Agent / End -->

				<!-- Agent -->
                <div class="col-lg-4 col-md-6 col-xs-12">
                  <div class="agent">
                    <div class="utf-agent-avatar"> <a href="agents-profile.html"> <img src="images/agent-02.jpg" alt=""> <span class="view-profile-btn">View Profile</span> </a> </div>
                    <div class="utf-agent-content">
                      <div class="utf-agent-name">
                        <h4><a href="agents-profile.html">John Williams</a></h4>
                        <span>Agent In Afghanistan</span> 
					  </div>                      
                    </div>
                  </div>
                </div>
                <!-- Agent / End -->	
              </div>
              <!-- Agents Container / End -->               
            </div>
          </div>
        </div>
      </div>
      
      <!-- Sidebar -->
      <div class="col-lg-4 col-md-4">
        <div class="sidebar"> 
		  <div class="widget utf-sidebar-widget-item">
			  <div class="utf-detail-banner-add-section">
				 <a href="#"><img src="images/banner-add-2.jpg" alt="banner-add-2"></a>
			  </div>             
		  </div>
		
		  <div class="utf-sidebar-widget-item">
			  <div class="utf-boxed-list-headline-item">
				<h3>Contact Us</h3>
			  </div>
			  <div class="widget">
				<div class="agefnt-widget">
				  <input type="text" placeholder="Name">
				  <input type="text" placeholder="Email">
				  <input type="text" placeholder="Phone">
				  <textarea>Message...</textarea>
				  <button class="button fullwidth margin-top-5">Send Message</button>
				</div>            
			  </div>
		  </div>
          <!-- Widget / End --> 
          
          <!-- Widget -->
		  <div class="utf-sidebar-widget-item">
			  <div class="utf-boxed-list-headline-item">
				<h3>Our Location</h3>
			  </div>	
			  <div class="widget">
				<div id="propertyMap-container" class="agency-map">
				  <div id="propertyMap" data-latitude="48.8566" data-longitude="2.3522" data-map-icon="im im-icon-Hamburger"></div>
				</div>
			  </div>
		  </div>
          <!-- Widget / End --> 
          
        </div>
      </div>
      <!-- Sidebar / End --> 
      
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

<!-- Maps --> 
<script src="https://maps.googleapis.com/maps/api/js?key=&amp;libraries=places"></script> 
<script src="scripts/infobox.min.js"></script> 
<script src="scripts/markerclusterer.js"></script> 
<script src="scripts/maps.js"></script> 
</body>

<!-- Mirrored from utouchdesign.com/themes/realfun/agency-profile.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 30 Nov 2022 10:34:54 GMT -->
</html>