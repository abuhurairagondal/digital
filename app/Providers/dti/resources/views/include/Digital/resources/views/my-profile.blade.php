<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from utouchdesign.com/themes/realfun/my-profile.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 30 Nov 2022 10:34:26 GMT -->
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

  @include('include.header_my_profile')

  <!-- Content -->
  <div class="container">
    <div class="row"> 
      <!-- Widget -->
      <div class="col-md-3">
	    <div class="margin-bottom-20"> 
			<div class="utf-edit-profile-photo-area"> <img src="images/agent-02.jpg" alt="">
			  <div class="utf-change-photo-btn-item">
				<div class="utf-user-photo-upload"> <span><i class="fa fa-upload"></i> Upload Photo</span>
				  <input type="file" class="upload tooltip top" title="Upload Photo" />
				</div>
			  </div>
			</div>
	    </div>
		<div class="clearfix"></div>
        <div class="sidebar margin-top-20">
          <div class="user-smt-account-menu-container">
            <ul class="user-account-nav-menu">
              <li><a href="my-profile.html" class="current"><i class="sl sl-icon-user"></i> My Profile</a></li>
              <li><a href="my-bookmarks.html"><i class="sl sl-icon-star"></i> Bookmark Listing</a></li>
			  <li><a href="my-properties.html"><i class="sl sl-icon-docs"></i> My Property</a></li>
              <li><a href="add-new-property.html"><i class="sl sl-icon-action-redo"></i> New Property</a></li>
			  <li><a href="change-password.html"><i class="sl sl-icon-lock"></i> Change Password</a></li>
              <li><a href="#"><i class="sl sl-icon-power"></i> Log Out</a></li>
            </ul>            
          </div>
        </div>
		<div class="widget utf-sidebar-widget-item">
		  <div class="utf-detail-banner-add-section">
			 <a href="#"><img src="images/banner-add-2.jpg" alt="banner-add-2"></a>
		  </div>             
		</div>
      </div>
      <div class="col-md-9">
          <div class="utf-user-profile-item">
            <div class="utf-submit-page-inner-box">
				<h3>My Account</h3>
				<div class="content with-padding">
					<div class="col-md-6">
						<label>Your Name</label>
						<input value="John Williams" type="text">
					</div>
					<div class="col-md-6">
						<label>Your Title</label>
						<input value="Agent In Afghanistan" type="text">
					</div>	
					<div class="col-md-6">
						<label>Phone Number</label>
						<input value="(+21) 124 123 4546" type="text">
					</div>
					<div class="col-md-6">	
						<label>Email Address</label>
						<input value="info@example.com" type="text">
					</div>
					<div class="col-md-12 margin-bottom-0">
						<label>Message</label>
						<textarea name="about" id="about" cols="20" rows="5">Lorem Ipsum is simply dummy text of printing and type setting industry Lorem Ipsum been industry standard dummy text ever since. Lorem Ipsum is simply dummy text of printing and type setting industry Lorem Ipsum been industry standard dummy text ever since.</textarea>
					</div>
				</div>				
			</div>
			<div class="utf-submit-page-inner-box">
				<h3>Social Accounts</h3>
				<div class="content with-padding">
					<div class="col-md-6">
						<label><i class="icon-brand-facebook"></i> Facebook</label>
						<input value="https://www.facebook.com" type="text">
					</div>
					<div class="col-md-6">
						<label><i class="icon-brand-twitter"></i> Twitter</label>
						<input value="https://www.twitter.com" type="text">
					</div>
					<div class="col-md-6">
						<label><i class="icon-brand-linkedin"></i> Linkedin</label>
						<input value="https://www.linkedin.com" type="text">
					</div>
					<div class="col-md-6">
						<label><i class="icon-brand-google"></i> Google</label>
						<input value="https://www.google.com" type="text">	
					</div>
					<div class="col-md-6">
						<label><i class="icon-brand-pinterest"></i> Pinterest</label>
						<input value="https://www.pinterest.com" type="text">	
					</div>
					<div class="col-md-6">
						<label><i class="icon-feather-instagram"></i> Instagram</label>
						<input value="https://www.instagram.com" type="text">	
					</div>
				</div>					
			</div>	
			<div class="row">
				<div class="col-md-12">
					<button class="utf-centered-button button margin-top-0 margin-bottom-20">Save Changes</button>
				</div>
			</div>
          </div>          
      </div>
    </div>
  </div>
  
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

<!-- Mirrored from utouchdesign.com/themes/realfun/my-profile.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 30 Nov 2022 10:34:26 GMT -->
</html>