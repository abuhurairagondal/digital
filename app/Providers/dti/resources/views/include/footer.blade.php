<div id="whatsapp-button">
  <a href="https://wa.me/923217008316" target="_blank" rel="noopener noreferrer nofollow">
    <i class="fa fa-whatsapp" style="font-size:35px; color: #fff;"></i>
  </a>
</div>

<style type="text/css">
  #whatsapp-button {
    position: fixed;
    bottom: 90px;
    right: 25px;
    z-index: 1000;
    text-align: center;
  }

  #whatsapp-button a {
    display: block;
    background-color: #25D366;
    padding-top: 14px;
    padding-bottom: 10px;
    width: 63px;
    height: 63px;
    border-radius: 50%;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
  }
</style>


<footer>
 <div class="container">
  <div class="row">
    <div class="col-md-4 text-center">
     <div class="full">
      <div class="logo_footer">
        <a href="/"><img width="210" src="/images/logo.png" alt="#" /></a>
      </div>

    </div>
  </div>
  <div class="col-md-8">
    <div class="row">
      <div class="col-md-7">
       <div class="row">
        <div class="col-md-6">
         <div class="widget_menu">
          <h3>Menu</h3>
          <ul>
           <li><a href="/">Home</a></li>
           <li><a href="/about">About</a></li>
           <li><a href="/blogs">Blog</a></li>
           <li><a href="/contact">Contact</a></li>
         </ul>
       </div>
     </div>
     <div class="col-md-6">
       <div class="widget_menu">
        <h3>Account</h3>
        <ul>

         <li><a href="/login">Login</a></li>
         <li><a href="/register">Register</a></li>


       </ul>
     </div>
   </div>
 </div>
</div>
<div class="col-md-5">
 <div class="widget_menu">
  <h3>Newsletter</h3>
  @include('include.success')
  <div class="information_f">
    <p>Subscribe by our newsletter and get updates</p>
  </div>
  <div class="form_sub">
   <form action="/save_newsletter" method="POST">
    @csrf
    <fieldset>
     <div class="field">
      <input type="email" placeholder="Enter Your Mail" name="email" />
      <input type="submit" value="Subscribe" />
    </div>
  </fieldset>
</form>

</div>
</div>
</div>
</div>
</div>
</div>
</div>
</footer>

<!--Start of Tawk.to Script-->
<script type="text/javascript">
  var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
  (function(){
    var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
    s1.async=true;
    s1.src='https://embed.tawk.to/656838e668f6b67c37db6fdd/1hgfhshul';
    s1.charset='UTF-8';
    s1.setAttribute('crossorigin','*');
    s0.parentNode.insertBefore(s1,s0);
  })();
</script>
<!--End of Tawk.to Script-->
