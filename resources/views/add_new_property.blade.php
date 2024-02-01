<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from utouchdesign.com/themes/realfun/add-new-property.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 30 Nov 2022 10:34:26 GMT -->
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

@include('include.header_add_new_property')

  <!-- Content -->
  <div class="container">
    <div class="row"> 
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
              <li><a href="add-new-property.html" class="current"><i class="sl sl-icon-action-redo"></i> New Property</a></li>
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
      <!-- Submit Page -->
      <div class="col-md-9">
        <div class="submit-page">
          <!-- Section -->
		  <div class="utf-submit-page-inner-box">
			  <h3>Property Basic Information</h3>
			  <div class="content with-padding">             
				  <div class="col-md-12">
					 <h5>Property Title</h5>
					 <input class="search-field" placeholder="Property Title" type="text" value=""/>				  
				  </div>
				
				  <div class="col-md-6">
					<h5>Status</h5>
					<select class="utf-chosen-select-single-item">
					  <option label="blank"></option>
					  <option>For Sale</option>
					  <option>For Rent</option>
					</select>
				  </div>
				  
				  <div class="col-md-6">
					<h5>Type</h5>
					<select class="utf-chosen-select-single-item">
					  <option label="blank"></option>
					  <option>Apartment</option>
					  <option>House</option>
					  <option>Commercial</option>
					  <option>Garage</option>
					  <option>Lot</option>
					</select>
				  </div>
				  
				  <div class="col-md-4">
					<h5>Price</h5>
					<div class="select-input disabled-first-option">
					  <input type="text" placeholder="00000" data-unit="USD">
					</div>
				  </div>
				  
				  <div class="col-md-4">
					<h5>Area</h5>
					<div class="select-input disabled-first-option">
					  <input type="text" placeholder="00000" data-unit="Sq Ft">
					</div>
				  </div>
				  
				  <div class="col-md-4">
					<h5>Rooms</h5>
					<select class="utf-chosen-select-single-item">
					  <option label="blank"></option>
					  <option>1</option>
					  <option>2</option>
					  <option>3</option>
					  <option>4</option>
					  <option>5</option>
					  <option>More than 5</option>
					</select>
				  </div>
			  </div>
		  </div>
          <!-- Section / End --> 
          
          <!-- Section -->
		  <div class="utf-submit-page-inner-box">
			  <h3>Property Gallery</h3>
			  <div class="content with-padding">   
				  <div class="col-md-12 submit-section">
					<form action="http://utouchdesign.com/themes/realfun/file-upload" class="dropzone"></form>
				  </div>
			  </div>
		  </div>
          <!-- Section / End --> 
          
          <!-- Section -->
		  <div class="utf-submit-page-inner-box">
			  <h3>Property Location</h3>
			  <div class="content with-padding">             
				  <div class="col-md-6">
					<h5>Address</h5>
					<input type="text" placeholder="Address">
				  </div>
				  <div class="col-md-6">
					<h5>City Name</h5>
					<input type="text" placeholder="City Name">
				  </div>
				  <div class="col-md-6">
					<h5>State</h5>
					<input type="text" placeholder="State">
				  </div>
				  <div class="col-md-6">
					<h5>Zip-Code</h5>
					<input type="text" placeholder="000000">
				  </div>
			  </div>
		  </div>
          <!-- Section / End --> 
          
          <!-- Section -->
		  <div class="utf-submit-page-inner-box">
			  <h3>Property Information</h3>
			  <div class="content with-padding">             
				  <div class="col-md-12">
					<h5>Property Description</h5>
					<textarea name="summary" cols="20" rows="2" id="summary"></textarea>
				  </div>
				  <div class="col-md-4">
					<h5>Building Age</h5>
					<select class="utf-chosen-select-single-item">
					  <option label="blank"></option>
					  <option>0 - 1 Years</option>
					  <option>0 - 5 Years</option>
					  <option>0 - 10 Years</option>
					  <option>0 - 20 Years</option>
					  <option>0 - 50 Years</option>
					  <option>50 + Years</option>
					</select>
				  </div>
				  
				  <div class="col-md-4">
					<h5>Bed Rooms</h5>
					<select class="utf-chosen-select-single-item">
					  <option label="blank"></option>
					  <option>1</option>
					  <option>2</option>
					  <option>3</option>
					  <option>4</option>
					  <option>5</option>
					</select>
				  </div>
				  
				  <div class="col-md-4">
					<h5>Bath Rooms</h5>
					<select class="utf-chosen-select-single-item">
					  <option label="blank"></option>
					  <option>1</option>
					  <option>2</option>
					  <option>3</option>
					  <option>4</option>
					  <option>5</option>
					</select>
				  </div>
				<div class="col-md-12">	
				  <h5 class="margin-top-15">Other Features <span>(optional)</span></h5>
				  <div class="checkboxes in-row margin-bottom-20">
					  <input id="check-2" type="checkbox" name="check">
					  <label for="check-2">Air Conditioning</label>
					  <input id="check-3" type="checkbox" name="check">
					  <label for="check-3">Swimming Pool</label>
					  <input id="check-4" type="checkbox" name="check" >
					  <label for="check-4">Central Heating</label>
					  <input id="check-5" type="checkbox" name="check">
					  <label for="check-5">Laundry Room</label>
					  <input id="check-6" type="checkbox" name="check">
					  <label for="check-6">Gym</label>
					  <input id="check-7" type="checkbox" name="check">
					  <label for="check-7">Alarm</label>
					  <input id="check-8" type="checkbox" name="check">
					  <label for="check-8">Window Covering</label>
				  </div>
				</div>  
			  </div>
		  </div>  
          <!-- Section / End --> 
          
          <!-- Section -->
		  <div class="utf-submit-page-inner-box">
			  <h3>Property Contact Details</h3>
			  <div class="content with-padding">             
				  <div class="col-md-4">
					<h5>Full Name</h5>
					<input type="text" placeholder="Name">
				  </div>
				  <div class="col-md-4">
					<h5>Email Address</h5>
					<input type="text" placeholder="Email Address">
				  </div>
				  <div class="col-md-4">
					<h5>Phone Number</h5>
					<input type="text"  placeholder="Phone Number">
				  </div>
			  </div>
		  </div>		
		  <div class="row">
			<div class="col-md-12">
				<a href="add-new-property.html" class="utf-centered-button button">Submit Property</a>
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
 
<script src="scripts/dropzone.js"></script> 
<script>
$(".dropzone").dropzone({
	dictDefaultMessage: "<i class='sl sl-icon-cloud-upload'></i> Drag & Drop Files Here",
});
</script> 
</body>

<!-- Mirrored from utouchdesign.com/themes/realfun/add-new-property.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 30 Nov 2022 10:34:27 GMT -->
</html>