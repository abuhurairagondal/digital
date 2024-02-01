<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from utouchdesign.com/themes/realfun/change-password.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 30 Nov 2022 10:34:27 GMT -->
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

  
  @include('include.header_change-password')
  
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
              <li><a href="my-profile.html"><i class="sl sl-icon-user"></i> My Profile</a></li>
              <li><a href="my-bookmarks.html"><i class="sl sl-icon-star"></i> Bookmark Listing</a></li>
			  <li><a href="my-properties.html"><i class="sl sl-icon-docs"></i> My Property</a></li>
              <li><a href="add-new-property.html"><i class="sl sl-icon-action-redo"></i> New Property</a></li>
			  <li><a href="change-password.html" class="current"><i class="sl sl-icon-lock"></i> Change Password</a></li>
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
			<h3>Change Password</h3>
			<div class="content with-padding">
				<div class="col-md-4">
					<label>Current Password</label>
					<input type="password" placeholder="*********">
				</div>
				<div class="col-md-4">
					<label>New Password</label>
					<input type="password" placeholder="*********">
				</div>
				<div class="col-md-4">
					<label>Confirm New Password</label>
					<input type="password" placeholder="*********">
				</div>
			</div>			
		  </div>  
		  <div class="row">
			<div class="col-md-12">
				<a href="#" class="utf-centered-button button">Save Changes</a>
			</div>
		  </div>	
        </div>
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

<!-- Mirrored from utouchdesign.com/themes/realfun/change-password.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 30 Nov 2022 10:34:27 GMT -->
</html>