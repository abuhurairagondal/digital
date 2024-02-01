<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from utouchdesign.com/themes/realfun/forgot_password.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 30 Nov 2022 10:34:59 GMT -->
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

  @include('include.hadere_forgot_password')
  
  <!-- Contact --> 
  <div class="container">
    <div class="row">
      <div class="col-md-6 col-md-offset-3">
        <div class="my-account">
          <div class="tabs-container"> 
            <!-- Login -->
			  <div class="utf-welcome-text-item">
				<h3>Forgot Your Password?</h3>
				<span>Enter your email address below and we'll send you email with password</span> 
			  </div>
              <form method="post" class="login">
                <div class="form-row form-row-wide">
                    <input type="text" class="input-text" name="email" id="email" placeholder="Email Address" value="" />
                </div>
                <input type="submit" class="button full-width border margin-top-10" name="Send Recovery Email" value="Send Recovery Email" />				
				<div class="forget-text margin-top-15">
					<span>Forget It, <a href="javascript:void(0);">Send me Back</a> to The Sign In.</span> 
				</div>
              </form>
          </div>
        </div>
      </div>
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

<!-- Mirrored from utouchdesign.com/themes/realfun/forgot_password.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 30 Nov 2022 10:34:59 GMT -->
</html>