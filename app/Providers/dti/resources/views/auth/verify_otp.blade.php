<!DOCTYPE html>
<html>
<head>
 <title>Verify Email</title>
 <!-- Basic -->
 @include('include.header_links')
</head>
<body class="sub_page">
 <div class="hero_area">
  <!-- header section strats -->
  @include('include.header')
  <!-- end header section -->
</div>
<!-- inner page section -->
<section class="inner_page_head">
  <div class="container_fuild">
   <div class="row">
    <div class="col-md-12">
     <div class="full">
      <h3>Email Verification</h3>
    </div>
  </div>
</div>
</div>
</section>
<!-- end inner page section -->
<!-- why section -->
<section class="why_section layout_padding">
  <div class="container">


   <div class="row">
     <div class="col-md-6 mb-2" style="border:2px solid #000000; border-radius: 10px">
      <h2 style="height: 50px; color: #000000 ; margin-top: 40px;" align="center"><strong>Please Enter OTP</strong></h2>
      @include('include.success')
      <div class="full">
       <form name="registerform" action="/verify_email" method="POST" style="margin-top: 60px;">
        @csrf
        <div class="row">

          @php
          $token = request()->segment(2);
          @endphp
          <input type="hidden" name="token" required value="{{$token}}">
         <div class="col-md-12">
          <input type="number" name="otp" placeholder="OTP" class="form_field" required value="{{ old('otp') }}" inputmode="numeric" pattern="[0-9]*">
          @error('otp')
          <p style="color: red;">{{ $message }}</p>
          @enderror
        </div>


        <div class="col-md-12" style="text-align: center; margin-top: 20px;">
          <input type="submit" value="Verify" style="color: white">
        </div>


        <div class="text-center col-md-12" style="padding:5px; margin-top: 40px;">
          <p><a href="/login" style="color:#8518FF;">Have Account? Login</a></p>
        </div>

      </div>

    </form>


  </div>
</div>
<div class="col-md-6">
 <img src="/images/logo.png" style="height: 300px; margin-left: 150px; margin-top: 250px; ">

</div>

</div>

</div>
</section>
<!-- end why section -->
<!-- footer section -->
@include('include.footer')
<!-- footer end -->
@include('include.footer_links')
</body>
</html>
