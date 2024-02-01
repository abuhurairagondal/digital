<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from utouchdesign.com/themes/realfun/register.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 30 Nov 2022 10:34:55 GMT -->
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
  @include('include.header_register')

  
  <!-- Contact --> 
  <div class="container">
    <div class="row">
      <div class="col-md-6 col-md-offset-3">
        <div class="my-account">
          <div class="tabs-container"> 
            <!-- Register -->
			  <div class="utf-welcome-text-item">
				<h3>Create Your New Account!</h3>
				<span>Don't Have an Account? <a href="login.html">Log In!</a></span> 
			  </div>
              <form method="post" class="login">
			    <div class="form-row form-row-wide margin-bottom-15">
					<select class="utf-chosen-select-single-item utf-with-border" title="Single User">
						<option>Single User</option>
						<option>Agent</option>
						<option>Multi User</option>				
					</select>
				</div>
                <div class="form-row form-row-wide">
                    <input type="text" class="input-text" name="username" id="username" placeholder="User Name" value="" />
                </div>
				<div class="form-row form-row-wide">
                    <input type="text" class="input-text" name="email" id="email" placeholder="Email Address" value="" />
                </div>
                <div class="form-row form-row-wide">
                    <input class="input-text" type="password" name="password" placeholder="Password" id="password"/>
                </div>
				<div class="form-row form-row-wide">
                    <input class="input-text" type="password" name="password" placeholder="Repeat Password" id="repeat_password"/>
                </div>
                <div class="form-row checkbox margin-top-10 margin-bottom-10">
					<input type="checkbox" id="two-step0">
					<label for="two-step0"><span class="checkbox-icon"></span> By Registering You Confirm That You Accept <a href="#">Terms & Conditions</a> and <a href="#">Privacy Policy</a></label>
				</div>
				<input type="submit" class="button full-width border margin-top-10" name="Create An Account" value="Create An Account" />				
              </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Container / End --> 
  
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

<!-- Mirrored from utouchdesign.com/themes/realfun/register.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 30 Nov 2022 10:34:55 GMT -->
</html>