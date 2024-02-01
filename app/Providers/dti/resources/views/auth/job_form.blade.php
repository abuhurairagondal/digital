<!DOCTYPE html>
<html>

    <head>
        <title>Apply for Job</title>
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
                            <h3>Apply for Job</h3>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end inner page section -->
        <!-- job application section -->
        <section class="why_section layout_padding">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 mb-2"
                        style="border:2px solid #000000; border-radius: 10px">
                        <h2
                            style="height: 50px; color: #000000 ; margin-top: 40px;"
                            align="center"><strong>Apply for
                                Job</strong></h2>
                        @include('include.success')
                        <div class="full">
                            <form name="jobApplicationForm"
                                action="/save_jobsform" method="POST"
                                style="margin-top: 60px;">
                                @csrf
                                <div class="row">

                                    <div class="col-md-6">
                                        <label>Name <code>*</code></label>
                                        <input type="text" name="name"
                                            placeholder="Name"
                                            class="form_field" required
                                            value="{{ old('name') }}">
                                        @error('name')
                                        <p style="color: red;">{{ $message }}</p>
                                        @enderror
                                    </div>
                                    <div class="col-md-6">
                                        <label>City <code>*</code></label>
                                        <select name="city" id="city"
                                            class="form_field" required
                                            value="{{ old('city') }}">
                                            <option value disabled selected>Select
                                                The City</option>
                                            <option value="Islamabad">Islamabad</option>
                                            <option value disabled>Punjab Cities</option>
                                            <option value="Ahmed Nager Chatha">Ahmed
                                                Nager Chatha</option>
                                            <option value="Ahmadpur East">Ahmadpur
                                                East</option>
                                            <option value="Ali Khan Abad">Ali
                                                Khan Abad</option>
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
                                            <option value="Darya Khan">Darya
                                                Khan</option>
                                            <option value="Dera Ghazi Khan">Dera
                                                Ghazi Khan</option>
                                            <option value="Dhaular">Dhaular</option>
                                            <option value="Dina">Dina</option>
                                            <option value="Dinga">Dinga</option>
                                            <option value="Dipalpur">Dipalpur</option>
                                            <option value="Faisalabad">Faisalabad</option>
                                            <option value="Ferozewala">Ferozewala</option>
                                            <option value="Fateh Jhang">Fateh
                                                Jang</option>
                                            <option value="Ghakhar Mandi">Ghakhar
                                                Mandi</option>
                                            <option value="Gojra">Gojra</option>
                                            <option value="Gujranwala">Gujranwala</option>
                                            <option value="Gujrat">Gujrat</option>
                                            <option value="Gujar Khan">Gujar
                                                Khan</option>
                                            <option value="Hafizabad">Hafizabad</option>
                                            <option value="Haroonabad">Haroonabad</option>
                                            <option value="Hasilpur">Hasilpur</option>
                                            <option value="Haveli Lakha">Haveli
                                                Lakha</option>
                                            <option value="Jatoi">Jatoi</option>
                                            <option value="Jalalpur">Jalalpur</option>
                                            <option value="Jattan">Jattan</option>
                                            <option value="Jampur">Jampur</option>
                                            <option value="Jaranwala">Jaranwala</option>
                                            <option value="Jhang">Jhang</option>
                                            <option value="Jhelum">Jhelum</option>
                                            <option value="Kalabagh">Kalabagh</option>
                                            <option value="Karor Lal Esan">Karor
                                                Lal Esan</option>
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
                                            <option value="Liaquat Pur">Liaquat
                                                Pur</option>
                                            <option value="Lodhran">Lodhran</option>
                                            <option value="Malakwal">Malakwal</option>
                                            <option value="Mamoori">Mamoori</option>
                                            <option value="Mailsi">Mailsi</option>
                                            <option value="Mandi Bahauddin">Mandi
                                                Bahauddin</option>
                                            <option value="Mian Channu">Mian
                                                Channu</option>
                                            <option value="Mianwali">Mianwali</option>
                                            <option value="Multan">Multan</option>
                                            <option value="Murree">Murree</option>
                                            <option value="Muridke">Muridke</option>
                                            <option value="Mianwali Bangla">Mianwali
                                                Bangla</option>
                                            <option value="Muzaffargarh">Muzaffargarh</option>
                                            <option value="Narowal">Narowal</option>
                                            <option value="Nankana Sahib">Nankana
                                                Sahib</option>
                                            <option value="Okara">Okara</option>
                                            <option value="Renala Khurd">Renala
                                                Khurd</option>
                                            <option value="Pakpattan">Pakpattan</option>
                                            <option value="Pattoki">Pattoki</option>
                                            <option value="Pir Mahal">Pir Mahal</option>
                                            <option value="Qaimpur">Qaimpur</option>
                                            <option value="Qila Didar Singh">Qila
                                                Didar Singh</option>
                                            <option value="Rabwah">Rabwah</option>
                                            <option value="Raiwind">Raiwind</option>
                                            <option value="Rajanpur">Rajanpur</option>
                                            <option value="Rahim Yar Khan">Rahim
                                                Yar Khan</option>
                                            <option value="Rawalpindi">Rawalpindi</option>
                                            <option value="Sadiqabad">Sadiqabad</option>
                                            <option value="Safdarabad">Safdarabad</option>
                                            <option value="Sahiwal">Sahiwal</option>
                                            <option value="Sangla Hill">Sangla
                                                Hill</option>
                                            <option value="Sarai Alamgir">Sarai
                                                Alamgir</option>
                                            <option value="Sargodha">Sargodha</option>
                                            <option value="Shakargarh">Shakargarh</option>
                                            <option value="Sheikhupura">Sheikhupura</option>
                                            <option value="Sialkot">Sialkot</option>
                                            <option value="Sohawa">Sohawa</option>
                                            <option value="Soianwala">Soianwala</option>
                                            <option value="Siranwali">Siranwali</option>
                                            <option value="Talagang">Talagang</option>
                                            <option value="Taxila">Taxila</option>
                                            <option value="Toba Tek Singh">Toba
                                                Tek Singh</option>
                                            <option value="Vehari">Vehari</option>
                                            <option value="Wah Cantonment">Wah
                                                Cantonment</option>
                                            <option value="Wazirabad">Wazirabad</option>
                                            <option value disabled>Sindh Cities</option>
                                            <option value="Badin">Badin</option>
                                            <option value="Bhirkan">Bhirkan</option>
                                            <option value="Rajo Khanani">Rajo
                                                Khanani</option>
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
                                            <option value="Keti Bandar">Keti
                                                Bandar</option>
                                            <option value="Khairpur">Khairpur</option>
                                            <option value="Kotri">Kotri</option>
                                            <option value="Larkana">Larkana</option>
                                            <option value="Matiari">Matiari</option>
                                            <option value="Mehar">Mehar</option>
                                            <option value="Mirpur Khas">Mirpur
                                                Khas</option>
                                            <option value="Mithani">Mithani</option>
                                            <option value="Mithi">Mithi</option>
                                            <option value="Mehrabpur">Mehrabpur</option>
                                            <option value="Moro">Moro</option>
                                            <option value="Nagarparkar">Nagarparkar</option>
                                            <option value="Naudero">Naudero</option>
                                            <option value="Naushahro Feroze">Naushahro
                                                Feroze</option>
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
                                            <option value="Shahpur Chakar">Shahpur
                                                Chakar</option>
                                            <option value="Shikarpaur">Shikarpaur</option>
                                            <option value="Sukkur">Sukkur</option>
                                            <option value="Tangwani">Tangwani</option>
                                            <option value="Tando Adam Khan">Tando
                                                Adam Khan</option>
                                            <option value="Tando Allahyar">Tando
                                                Allahyar</option>
                                            <option value="Tando Muhammad Khan">Tando
                                                Muhammad Khan</option>
                                            <option value="Thatta">Thatta</option>
                                            <option value="Umerkot">Umerkot</option>
                                            <option value="Warah">Warah</option>
                                            <option value disabled>Khyber Cities</option>
                                            <option value="Abbottabad">Abbottabad</option>
                                            <option value="Adezai">Adezai</option>
                                            <option value="Alpuri">Alpuri</option>
                                            <option value="Akora Khattak">Akora
                                                Khattak</option>
                                            <option value="Ayubia">Ayubia</option>
                                            <option value="Banda Daud Shah">Banda
                                                Daud Shah</option>
                                            <option value="Bannu">Bannu</option>
                                            <option value="Batkhela">Batkhela</option>
                                            <option value="Battagram">Battagram</option>
                                            <option value="Birote">Birote</option>
                                            <option value="Chakdara">Chakdara</option>
                                            <option value="Charsadda">Charsadda</option>
                                            <option value="Chitral">Chitral</option>
                                            <option value="Daggar">Daggar</option>
                                            <option value="Dargai">Dargai</option>
                                            <option value="Darya Khan">Darya
                                                Khan</option>
                                            <option value="Dera Ismail Khan">Dera
                                                Ismail Khan</option>
                                            <option value="Doaba">Doaba</option>
                                            <option value="Dir">Dir</option>
                                            <option value="Drosh">Drosh</option>
                                            <option value="Hangu">Hangu</option>
                                            <option value="Haripur">Haripur</option>
                                            <option value="Karak">Karak</option>
                                            <option value="Kohat">Kohat</option>
                                            <option value="Kulachi">Kulachi</option>
                                            <option value="Lakki Marwat">Lakki
                                                Marwat</option>
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
                                            <option value="Saidu Sharif">Saidu
                                                Sharif</option>
                                            <option value="Shorkot">Shorkot</option>
                                            <option value="Shewa Adda">Shewa
                                                Adda</option>
                                            <option value="Swabi">Swabi</option>
                                            <option value="Swat">Swat</option>
                                            <option value="Tangi">Tangi</option>
                                            <option value="Tank">Tank</option>
                                            <option value="Thall">Thall</option>
                                            <option value="Timergara">Timergara</option>
                                            <option value="Tordher">Tordher</option>
                                            <option value disabled>Balochistan
                                                Cities</option>
                                            <option value="Awaran">Awaran</option>
                                            <option value="Barkhan">Barkhan</option>
                                            <option value="Chagai">Chagai</option>
                                            <option value="Dera Bugti">Dera
                                                Bugti</option>
                                            <option value="Gwadar">Gwadar</option>
                                            <option value="Harnai">Harnai</option>
                                            <option value="Jafarabad">Jafarabad</option>
                                            <option value="Jhal Magsi">Jhal
                                                Magsi</option>
                                            <option value="Kacchi">Kacchi</option>
                                            <option value="Kalat">Kalat</option>
                                            <option value="Kech">Kech</option>
                                            <option value="Kharan">Kharan</option>
                                            <option value="Khuzdar">Khuzdar</option>
                                            <option value="Killa Abdullah">Killa
                                                Abdullah</option>
                                            <option value="Killa Saifullah">Killa
                                                Saifullah</option>
                                            <option value="Kohlu">Kohlu</option>
                                            <option value="Lasbela">Lasbela</option>
                                            <option value="Lehri">Lehri</option>
                                            <option value="Loralai">Loralai</option>
                                            <option value="Mastung">Mastung</option>
                                            <option value="Musakhel">Musakhel</option>
                                            <option value="Nasirabad">Nasirabad</option>
                                            <option value="Nushki">Nushki</option>
                                            <option value="Panjgur">Panjgur</option>
                                            <option value="Pishin Valley">Pishin
                                                Valley</option>
                                            <option value="Quetta">Quetta</option>
                                            <option value="Sherani">Sherani</option>
                                            <option value="Sibi">Sibi</option>
                                            <option value="Sohbatpur">Sohbatpur</option>
                                            <option value="Washuk">Washuk</option>
                                            <option value="Zhob">Zhob</option>
                                            <option value="Ziarat">Ziarat</option>
                                        </select>
                                        @error('city')
                                        <p style="color: red;">{{ $message }}</p>
                                        @enderror
                                    </div>

                                    <div class="col-md-6">
                                        <label>Country <code>*</code></label>
                                        <select name="country" id="country"
                                            class="form_field" required
                                            value="{{ old('country') }}">
                                            <option value disabled selected>Select
                                                The Country</option>
                                            <option value="Afghanistan">Pakistan</option>
                                            <option value="Albania">Albania</option>
                                            <option value="Algeria">Algeria</option>
                                            <option value="Argentina">Argentina</option>
                                            <option value="Australia">Australia</option>
                                            <option value="Brazil">Brazil</option>
                                            <option value="Canada">Canada</option>
                                            <option value="China">China</option>
                                            <option value="France">France</option>
                                            <option value="Germany">Germany</option>
                                            <option value="India">India</option>
                                            <option value="Italy">Italy</option>
                                            <option value="Japan">Japan</option>
                                            <option value="Mexico">Mexico</option>
                                            <option value="Netherlands">Netherlands</option>
                                            <option value="New Zealand">New
                                                Zealand</option>
                                            <option value="Nigeria">Nigeria</option>
                                            <option value="Russia">Russia</option>
                                            <option value="South Africa">South
                                                Africa</option>
                                            <option value="Spain">Spain</option>
                                            <option value="Switzerland">Switzerland</option>
                                            <option value="United Kingdom">United
                                                Kingdom</option>
                                            <option value="United States">United
                                                States</option>
                                            <option value="Vietnam">Vietnam</option>
                                            <option value="Bangladesh">Bangladesh</option>
                                            <option value="Belgium">Belgium</option>
                                            <option value="Chile">Chile</option>
                                            <option value="Colombia">Colombia</option>
                                            <option value="Denmark">Denmark</option>
                                            <option value="Egypt">Egypt</option>
                                            <option value="Greece">Greece</option>
                                            <option value="Hungary">Hungary</option>
                                            <option value="Indonesia">Indonesia</option>
                                            <option value="Ireland">Ireland</option>
                                            <option value="Kenya">Kenya</option>
                                            <option value="Malaysia">Malaysia</option>
                                            <option value="Norway">Norway</option>
                                            <option value="Pakistan">Pakistan</option>
                                            <option value="Peru">Peru</option>
                                            <option value="Portugal">Portugal</option>
                                            <option value="Saudi Arabia">Saudi
                                                Arabia</option>
                                            <option value="Singapore">Singapore</option>
                                            <option value="Sweden">Sweden</option>
                                            <option value="Thailand">Thailand</option>
                                            <option value="Turkey">Turkey</option>
                                            <option value="Ukraine">Ukraine</option>
                                            <option value="Venezuela">Venezuela</option>
                                            <option value="Zambia">Zambia</option>
                                            <option value="Austria">Austria</option>
                                            <option value="Bulgaria">Bulgaria</option>
                                            <option value="Czech Republic">Czech
                                                Republic</option>
                                            <option value="Finland">Finland</option>
                                            <option value="Iceland">Iceland</option>
                                            <option value="Jamaica">Jamaica</option>
                                            <option value="Kuwait">Kuwait</option>
                                            <option value="Lebanon">Lebanon</option>
                                            <option value="Luxembourg">Luxembourg</option>
                                            <option value="Morocco">Morocco</option>
                                            <option value="Nepal">Nepal</option>
                                            <option value="Panama">Panama</option>
                                            <option value="Paraguay">Paraguay</option>
                                            <option value="Philippines">Philippines</option>
                                            <option value="Romania">Romania</option>
                                            <option value="Serbia">Serbia</option>
                                            <option value="Slovakia">Slovakia</option>
                                            <option value="Slovenia">Slovenia</option>
                                            <option value="South Korea">South
                                                Korea</option>
                                            <option value="Taiwan">Taiwan</option>
                                            <option value="Tanzania">Tanzania</option>
                                            <option value="Trinidad and Tobago">Trinidad
                                                and Tobago</option>
                                            <option value="United Arab Emirates">United
                                                Arab Emirates</option>
                                            <option value="Uruguay">Uruguay</option>
                                            <option value="Uzbekistan">Uzbekistan</option>
                                            <option value="Yemen">Yemen</option>
                                            <option value="Zimbabwe">Zimbabwe</option>
                                            <option value="Andorra">Andorra</option>
                                            <option value="Angola">Angola</option>
                                            <option value="Antigua and Barbuda">Antigua
                                                and Barbuda</option>
                                            <option value="Armenia">Armenia</option>
                                            <option value="Bahamas">Bahamas</option>
                                            <option value="Barbados">Barbados</option>
                                            <option value="Belize">Belize</option>
                                            <option value="Benin">Benin</option>
                                            <option value="Bhutan">Bhutan</option>
                                            <option value="Burundi">Burundi</option>
                                            <option value="Comoros">Comoros</option>
                                            <option value="Cape Verde">Cape
                                                Verde</option>
                                            <option
                                                value="Central African Republic">Central
                                                African Republic</option>
                                            <option value="Chad">Chad</option>
                                            <option value="Cyprus">Cyprus</option>
                                            <option value="Djibouti">Djibouti</option>
                                            <option value="Dominica">Dominica</option>
                                            <option value="Equatorial Guinea">Equatorial
                                                Guinea</option>
                                            <option value="Eritrea">Eritrea</option>
                                            <option value="Eswatini">Eswatini</option>
                                            <option value="Ethiopia">Ethiopia</option>
                                            <option value="Fiji">Fiji</option>
                                            <option value="Gabon">Gabon</option>
                                            <option value="Gambia">Gambia</option>
                                            <option value="Grenada">Grenada</option>
                                            <option value="Guyana">Guyana</option>
                                            <option value="Kiribati">Kiribati</option>
                                            <option value="Lesotho">Lesotho</option>
                                            <option value="Liberia">Liberia</option>
                                            <option value="Liechtenstein">Liechtenstein</option>
                                            <option value="Madagascar">Madagascar</option>
                                            <option value="Malawi">Malawi</option>
                                            <option value="Maldives">Maldives</option>
                                            <option value="Mali">Mali</option>
                                            <option value="Marshall Islands">Marshall
                                                Islands</option>
                                            <option value="Micronesia">Micronesia</option>
                                            <option value="Monaco">Monaco</option>
                                            <option value="Mozambique">Mozambique</option>
                                            <option value="Namibia">Namibia</option>
                                            <option value="Niger">Niger</option>
                                            <option value="Palau">Palau</option>
                                            <option value="Papua New Guinea">Papua
                                                New Guinea</option>
                                            <option value="Rwanda">Rwanda</option>
                                            <option
                                                value="Saint Kitts and Nevis">Saint
                                                Kitts and Nevis</option>
                                            <option value="Saint Lucia">Saint
                                                Lucia</option>
                                            <option
                                                value="Saint Vincent and the Grenadines">Saint
                                                Vincent and the
                                                Grenadines</option>
                                            <option value="Samoa">Samoa</option>
                                            <option value="San Marino">San
                                                Marino</option>
                                            <option value="Seychelles">Seychelles</option>
                                            <option value="Solomon Islands">Solomon
                                                Islands</option>
                                            <option value="Suriname">Suriname</option>
                                            <option value="Tajikistan">Tajikistan</option>
                                            <option value="Timor-Leste">Timor-Leste</option>
                                            <option value="Tonga">Tonga</option>
                                            <option value="Tuvalu">Tuvalu</option>
                                            <option value="Vanuatu">Vanuatu</option>

                                        </select>
                                        @error('country')
                                        <p style="color: red;">{{ $message }}</p>
                                        @enderror
                                    </div>

                                    <div class="col-md-6">
                                        <label>Qualification <code>*</code></label>
                                        <input type="text" name="edu"
                                            placeholder="Qualification"
                                            class="form_field" required
                                            value="{{ old('edu') }}">
                                        @error('qualification')
                                        <p style="color: red;">{{ $message }}</p>
                                        @enderror
                                    </div>

                                    <div class="col-md-6">
                                        <label>Phone <code>*</code></label>
                                        <input type="number" name="phone"
                                            placeholder="Phone"
                                            class="form_field"
                                            required value="{{ old('phone') }}">
                                        @error('phone')
                                        <p style="color: red;">{{ $message }}</p>
                                        @enderror
                                    </div>

                                    <div class="col-md-6">
                                        <label>E-Mail <code>*</code></label>
                                        <input type="email" placeholder="Email"
                                            name="email" class="form_field"
                                            required value="{{ old('email') }}">
                                        @error('email')
                                        <p style="color: red;">{{ $message }}</p>
                                        @enderror
                                    </div>

                                    <div class="col-md-6">
                                        <label>CV <code></code></label>
                                        <input type="file" name="cv"
                                            class="form_field ">

                                        @error('cv')
                                        <p style="color: red;">{{ $message }}</p>
                                        @enderror
                                    </div>
                                    <div class="col-md-6">
                                        <label>Gender <code>*</code></label>
                                        <select name="gender" id="gender"
                                            class="form_field" required>
                                            <option value {{ old('gender') == ''
                                                ? 'selected' : '' }}>Select
                                                Gender</option>
                                            <option value="male" {{
                                                old('gender') == 'male' ?
                                                'selected' : '' }}>Male
                                            </option>
                                            <option value="female" {{
                                                old('gender') == 'female' ?
                                                'selected' : '' }}>
                                                Female</option>
                                            <option value="other" {{
                                                old('gender') == 'other' ?
                                                'selected' : '' }}>Other
                                            </option>
                                        </select>
                                        @error('gender')
                                        <p style="color: red;">{{ $message }}</p>
                                        @enderror
                                    </div>

                                    <div class="col-md-12">
                                        <label>Description <code>*</code></label>
                                        <textarea name="dec"
                                            placeholder="Description"
                                            class="form_field" required>{{ old('dec')
                                            }}</textarea>
                                        @error('description')
                                        <p style="color: red;">{{ $message }}</p>
                                        @enderror
                                    </div>

                                    <div class="col-md-12 mx-2"
                                        style="text-align: center; margin-top: 20px;">
                                        <input type="submit"
                                            style="color: white">
                                    </div>
                                    <br>

                                </div>

                            </form>

                        </div>
                    </div>
                    <div class="col-md-6">
                        <img src="/images/logo.png"
                            style="height: 300px; margin-left: 150px; margin-top: 250px; ">

                    </div>

                </div>

            </div>
        </section>
        <!-- end job application section -->
        <!-- footer section -->
        @include('include.footer')
        <!-- footer end -->
        @include('include.footer_links')
    </body>

</html>
