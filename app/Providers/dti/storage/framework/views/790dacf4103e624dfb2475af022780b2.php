<!DOCTYPE html>
<html>
<head>
 <title>Register</title>
 <!-- Basic -->
 <?php echo $__env->make('include.header_links', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</head>
<body class="sub_page">
 <div class="hero_area">
  <!-- header section strats -->
  <?php echo $__env->make('include.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  <!-- end header section -->
</div>
<!-- inner page section -->
<section class="inner_page_head">
  <div class="container_fuild">
   <div class="row">
    <div class="col-md-12">
     <div class="full">
      <h3>Registration</h3>
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
      <h2 style="height: 50px; color: #000000 ; margin-top: 40px;" align="center"><strong>Please Registered Before Singup</strong></h2>
      <?php echo $__env->make('include.success', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
      <div class="full">
       <form name="registerform" action="/save_users" method="POST" style="margin-top: 60px;">
        <?php echo csrf_field(); ?>
        <div class="row">

         <div class="col-md-6">
          <label>Name <code>*</code></label>
          <input type="text" name="name" placeholder="Name" class="form_field" required value="<?php echo e(old('name')); ?>">
          <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <p style="color: red;"><?php echo e($message); ?></p>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>

        <div class="col-md-6">
    <label>Gender <code>*</code></label>
    <select name="gender" id="gender" class="form_field" required>
        <option value="" <?php echo e(old('gender') == '' ? 'selected' : ''); ?>>Select Gender</option>
        <option value="male" <?php echo e(old('gender') == 'male' ? 'selected' : ''); ?>>Male</option>
        <option value="female" <?php echo e(old('gender') == 'female' ? 'selected' : ''); ?>>Female</option>
        <option value="other" <?php echo e(old('gender') == 'other' ? 'selected' : ''); ?>>Other</option>
    </select>
    <?php $__errorArgs = ['gender'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
        <p style="color: red;"><?php echo e($message); ?></p>
    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
</div>



         <div class="col-md-6">
          <label>City <code>*</code></label>
          <select name="city" id="city" class="form_field" required value="<?php echo e(old('city')); ?>">
            <option value="" disabled selected>Select The City</option>
            <option value="Islamabad">Islamabad</option>
            <option value="" disabled>Punjab Cities</option>
            <option value="Ahmed Nager Chatha">Ahmed Nager Chatha</option>
            <option value="Ahmadpur East">Ahmadpur East</option>
            <option value="Ali Khan Abad">Ali Khan Abad</option>
            <option value="Alipur">Alipur</option>
            <option value="Arifwala">Arifwala</option>
            <option value="Attock">Attock</option>
            <option value="Bhera">Bhera</option>
            <option value="Bhalwal">Bhalwal</option>
            <option value="Bahawalnagar">Bahawalnagar</option>
            <option value="Bahawalpur">Bahawalpur</option>
            <option value="Bhakkar">Bhakkar</option>
            <option value="Burewala">Burewala</option>
            <option value="Chillianwala">Chillianwala</option>
            <option value="Chakwal">Chakwal</option>
            <option value="Chichawatni">Chichawatni</option>
            <option value="Chiniot">Chiniot</option>
            <option value="Chishtian">Chishtian</option>
            <option value="Daska">Daska</option>
            <option value="Darya Khan">Darya Khan</option>
            <option value="Dera Ghazi Khan">Dera Ghazi Khan</option>
            <option value="Dhaular">Dhaular</option>
            <option value="Dina">Dina</option>
            <option value="Dinga">Dinga</option>
            <option value="Dipalpur">Dipalpur</option>
            <option value="Faisalabad">Faisalabad</option>
            <option value="Ferozewala">Ferozewala</option>
            <option value="Fateh Jhang">Fateh Jang</option>
            <option value="Ghakhar Mandi">Ghakhar Mandi</option>
            <option value="Gojra">Gojra</option>
            <option value="Gujranwala">Gujranwala</option>
            <option value="Gujrat">Gujrat</option>
            <option value="Gujar Khan">Gujar Khan</option>
            <option value="Hafizabad">Hafizabad</option>
            <option value="Haroonabad">Haroonabad</option>
            <option value="Hasilpur">Hasilpur</option>
            <option value="Haveli Lakha">Haveli Lakha</option>
            <option value="Jatoi">Jatoi</option>
            <option value="Jalalpur">Jalalpur</option>
            <option value="Jattan">Jattan</option>
            <option value="Jampur">Jampur</option>
            <option value="Jaranwala">Jaranwala</option>
            <option value="Jhang">Jhang</option>
            <option value="Jhelum">Jhelum</option>
            <option value="Kalabagh">Kalabagh</option>
            <option value="Karor Lal Esan">Karor Lal Esan</option>
            <option value="Kasur">Kasur</option>
            <option value="Kamalia">Kamalia</option>
            <option value="Kamoke">Kamoke</option>
            <option value="Khanewal">Khanewal</option>
            <option value="Khanpur">Khanpur</option>
            <option value="Kharian">Kharian</option>
            <option value="Khushab">Khushab</option>
            <option value="Kot Addu">Kot Addu</option>
            <option value="Jauharabad">Jauharabad</option>
            <option value="Lahore">Lahore</option>
            <option value="Lalamusa">Lalamusa</option>
            <option value="Layyah">Layyah</option>
            <option value="Liaquat Pur">Liaquat Pur</option>
            <option value="Lodhran">Lodhran</option>
            <option value="Malakwal">Malakwal</option>
            <option value="Mamoori">Mamoori</option>
            <option value="Mailsi">Mailsi</option>
            <option value="Mandi Bahauddin">Mandi Bahauddin</option>
            <option value="Mian Channu">Mian Channu</option>
            <option value="Mianwali">Mianwali</option>
            <option value="Multan">Multan</option>
            <option value="Murree">Murree</option>
            <option value="Muridke">Muridke</option>
            <option value="Mianwali Bangla">Mianwali Bangla</option>
            <option value="Muzaffargarh">Muzaffargarh</option>
            <option value="Narowal">Narowal</option>
            <option value="Nankana Sahib">Nankana Sahib</option>
            <option value="Okara">Okara</option>
            <option value="Renala Khurd">Renala Khurd</option>
            <option value="Pakpattan">Pakpattan</option>
            <option value="Pattoki">Pattoki</option>
            <option value="Pir Mahal">Pir Mahal</option>
            <option value="Qaimpur">Qaimpur</option>
            <option value="Qila Didar Singh">Qila Didar Singh</option>
            <option value="Rabwah">Rabwah</option>
            <option value="Raiwind">Raiwind</option>
            <option value="Rajanpur">Rajanpur</option>
            <option value="Rahim Yar Khan">Rahim Yar Khan</option>
            <option value="Rawalpindi">Rawalpindi</option>
            <option value="Sadiqabad">Sadiqabad</option>
            <option value="Safdarabad">Safdarabad</option>
            <option value="Sahiwal">Sahiwal</option>
            <option value="Sangla Hill">Sangla Hill</option>
            <option value="Sarai Alamgir">Sarai Alamgir</option>
            <option value="Sargodha">Sargodha</option>
            <option value="Shakargarh">Shakargarh</option>
            <option value="Sheikhupura">Sheikhupura</option>
            <option value="Sialkot">Sialkot</option>
            <option value="Sohawa">Sohawa</option>
            <option value="Soianwala">Soianwala</option>
            <option value="Siranwali">Siranwali</option>
            <option value="Talagang">Talagang</option>
            <option value="Taxila">Taxila</option>
            <option value="Toba Tek Singh">Toba Tek Singh</option>
            <option value="Vehari">Vehari</option>
            <option value="Wah Cantonment">Wah Cantonment</option>
            <option value="Wazirabad">Wazirabad</option>
            <option value="" disabled>Sindh Cities</option>
            <option value="Badin">Badin</option>
            <option value="Bhirkan">Bhirkan</option>
            <option value="Rajo Khanani">Rajo Khanani</option>
            <option value="Chak">Chak</option>
            <option value="Dadu">Dadu</option>
            <option value="Digri">Digri</option>
            <option value="Diplo">Diplo</option>
            <option value="Dokri">Dokri</option>
            <option value="Ghotki">Ghotki</option>
            <option value="Haala">Haala</option>
            <option value="Hyderabad">Hyderabad</option>
            <option value="Islamkot">Islamkot</option>
            <option value="Jacobabad">Jacobabad</option>
            <option value="Jamshoro">Jamshoro</option>
            <option value="Jungshahi">Jungshahi</option>
            <option value="Kandhkot">Kandhkot</option>
            <option value="Kandiaro">Kandiaro</option>
            <option value="Karachi">Karachi</option>
            <option value="Kashmore">Kashmore</option>
            <option value="Keti Bandar">Keti Bandar</option>
            <option value="Khairpur">Khairpur</option>
            <option value="Kotri">Kotri</option>
            <option value="Larkana">Larkana</option>
            <option value="Matiari">Matiari</option>
            <option value="Mehar">Mehar</option>
            <option value="Mirpur Khas">Mirpur Khas</option>
            <option value="Mithani">Mithani</option>
            <option value="Mithi">Mithi</option>
            <option value="Mehrabpur">Mehrabpur</option>
            <option value="Moro">Moro</option>
            <option value="Nagarparkar">Nagarparkar</option>
            <option value="Naudero">Naudero</option>
            <option value="Naushahro Feroze">Naushahro Feroze</option>
            <option value="Naushara">Naushara</option>
            <option value="Nawabshah">Nawabshah</option>
            <option value="Nazimabad">Nazimabad</option>
            <option value="Qambar">Qambar</option>
            <option value="Qasimabad">Qasimabad</option>
            <option value="Ranipur">Ranipur</option>
            <option value="Ratodero">Ratodero</option>
            <option value="Rohri">Rohri</option>
            <option value="Sakrand">Sakrand</option>
            <option value="Sanghar">Sanghar</option>
            <option value="Shahbandar">Shahbandar</option>
            <option value="Shahdadkot">Shahdadkot</option>
            <option value="Shahdadpur">Shahdadpur</option>
            <option value="Shahpur Chakar">Shahpur Chakar</option>
            <option value="Shikarpaur">Shikarpaur</option>
            <option value="Sukkur">Sukkur</option>
            <option value="Tangwani">Tangwani</option>
            <option value="Tando Adam Khan">Tando Adam Khan</option>
            <option value="Tando Allahyar">Tando Allahyar</option>
            <option value="Tando Muhammad Khan">Tando Muhammad Khan</option>
            <option value="Thatta">Thatta</option>
            <option value="Umerkot">Umerkot</option>
            <option value="Warah">Warah</option>
            <option value="" disabled>Khyber Cities</option>
            <option value="Abbottabad">Abbottabad</option>
            <option value="Adezai">Adezai</option>
            <option value="Alpuri">Alpuri</option>
            <option value="Akora Khattak">Akora Khattak</option>
            <option value="Ayubia">Ayubia</option>
            <option value="Banda Daud Shah">Banda Daud Shah</option>
            <option value="Bannu">Bannu</option>
            <option value="Batkhela">Batkhela</option>
            <option value="Battagram">Battagram</option>
            <option value="Birote">Birote</option>
            <option value="Chakdara">Chakdara</option>
            <option value="Charsadda">Charsadda</option>
            <option value="Chitral">Chitral</option>
            <option value="Daggar">Daggar</option>
            <option value="Dargai">Dargai</option>
            <option value="Darya Khan">Darya Khan</option>
            <option value="Dera Ismail Khan">Dera Ismail Khan</option>
            <option value="Doaba">Doaba</option>
            <option value="Dir">Dir</option>
            <option value="Drosh">Drosh</option>
            <option value="Hangu">Hangu</option>
            <option value="Haripur">Haripur</option>
            <option value="Karak">Karak</option>
            <option value="Kohat">Kohat</option>
            <option value="Kulachi">Kulachi</option>
            <option value="Lakki Marwat">Lakki Marwat</option>
            <option value="Latamber">Latamber</option>
            <option value="Madyan">Madyan</option>
            <option value="Mansehra">Mansehra</option>
            <option value="Mardan">Mardan</option>
            <option value="Mastuj">Mastuj</option>
            <option value="Mingora">Mingora</option>
            <option value="Nowshera">Nowshera</option>
            <option value="Paharpur">Paharpur</option>
            <option value="Pabbi">Pabbi</option>
            <option value="Peshawar">Peshawar</option>
            <option value="Saidu Sharif">Saidu Sharif</option>
            <option value="Shorkot">Shorkot</option>
            <option value="Shewa Adda">Shewa Adda</option>
            <option value="Swabi">Swabi</option>
            <option value="Swat">Swat</option>
            <option value="Tangi">Tangi</option>
            <option value="Tank">Tank</option>
            <option value="Thall">Thall</option>
            <option value="Timergara">Timergara</option>
            <option value="Tordher">Tordher</option>
            <option value="" disabled>Balochistan Cities</option>
            <option value="Awaran">Awaran</option>
            <option value="Barkhan">Barkhan</option>
            <option value="Chagai">Chagai</option>
            <option value="Dera Bugti">Dera Bugti</option>
            <option value="Gwadar">Gwadar</option>
            <option value="Harnai">Harnai</option>
            <option value="Jafarabad">Jafarabad</option>
            <option value="Jhal Magsi">Jhal Magsi</option>
            <option value="Kacchi">Kacchi</option>
            <option value="Kalat">Kalat</option>
            <option value="Kech">Kech</option>
            <option value="Kharan">Kharan</option>
            <option value="Khuzdar">Khuzdar</option>
            <option value="Killa Abdullah">Killa Abdullah</option>
            <option value="Killa Saifullah">Killa Saifullah</option>
            <option value="Kohlu">Kohlu</option>
            <option value="Lasbela">Lasbela</option>
            <option value="Lehri">Lehri</option>
            <option value="Loralai">Loralai</option>
            <option value="Mastung">Mastung</option>
            <option value="Musakhel">Musakhel</option>
            <option value="Nasirabad">Nasirabad</option>
            <option value="Nushki">Nushki</option>
            <option value="Panjgur">Panjgur</option>
            <option value="Pishin Valley">Pishin Valley</option>
            <option value="Quetta">Quetta</option>
            <option value="Sherani">Sherani</option>
            <option value="Sibi">Sibi</option>
            <option value="Sohbatpur">Sohbatpur</option>
            <option value="Washuk">Washuk</option>
            <option value="Zhob">Zhob</option>
            <option value="Ziarat">Ziarat</option>
          </select>
          <?php $__errorArgs = ['city'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <p style="color: red;"><?php echo e($message); ?></p>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>

        <div class="col-md-6">
          <label>Phone <code>*</code></label>
          <input type="number" name="phone" placeholder="Phone" class="form_field" required value="<?php echo e(old('phone')); ?>">
          <?php $__errorArgs = ['phone'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <p style="color: red;"><?php echo e($message); ?></p>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>

         <div class="col-md-6">
          <label>E-Mail <code>*</code></label>
          <input type="email" placeholder="Email" name="email" class="form_field" required value="<?php echo e(old('email')); ?>">
          <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <p style="color: red;"><?php echo e($message); ?></p>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>

        <div class="col-md-6">
            <label class="mb-1"><b>Password</b> <code>*</code></label>
            <span id="togglePassword" class="eye-icon" onclick="togglePasswordVisibility()">&#128065;</span>

            <input type="password" name="password" id="passwordField" placeholder="Password" class="form_field" required value="<?php echo e(old('password')); ?>" min="8">

            <small>Minimum 8 characters</small>

            <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <p style="color: red;"><?php echo e($message); ?></p>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>

        <script>
            function togglePasswordVisibility() {
                var passwordField = document.getElementById("passwordField");
                var togglePassword = document.getElementById("togglePassword");

                if (passwordField.type === "password") {
                    passwordField.type = "text";
                    togglePassword.innerHTML = "&#128064;"; // Show icon
                } else {
                    passwordField.type = "password";
                    togglePassword.innerHTML = "&#128065;"; // Hide icon
                }
            }
        </script>




        <div class="col-md-12" style="text-align: center; margin-top: 20px;">
            <input type="submit" value="Register" style="color: white">
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
<?php echo $__env->make('include.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<!-- footer end -->
<?php echo $__env->make('include.footer_links', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</body>
</html>
<?php /**PATH C:\xampp\htdocs\OneDrive\learning_web\resources\views//auth/register.blade.php ENDPATH**/ ?>