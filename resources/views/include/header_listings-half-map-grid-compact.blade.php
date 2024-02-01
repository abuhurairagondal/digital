
<div class="fs-container">
    <div class="fs-inner-container"> 
      <!-- Map -->
      <div id="map-container">
        <div id="map" data-map-zoom="4" data-map-scroll="true"> </div>        
        <!-- Map Navigation --> 
        <a href="#" id="geoLocation" title="Your location"></a>
        <ul id="mapnav-buttons" class="top">
          <li><a href="#" id="prevpoint" title="Previous point on map">Prev</a></li>
          <li><a href="#" id="nextpoint" title="Next point on mp">Next</a></li>
        </ul>
      </div>
    </div>
    <div class="fs-inner-container">
      <div class="fs-content"> 
        <!-- Search -->
        <section class="search margin-bottom-30">
          <div class="row">
            <div class="col-md-12"> 
              <!-- Title -->
              <div class="utf-inner-search-section-title">
				 <h4><i class="fa fa-search"></i> Find Your Dream Home</h4>
			  </div>
              <!-- Form -->
              <div class="utf-main-search-box-area no-shadow"> 
                <!-- Row With Forms -->
                <div class="row with-forms"> 
                  <!-- Main Search Input -->
                  <div class="col-md-12 col-sm-12 col-xs-12">
                    <input type="text" placeholder="Enter Keywords..." value=""/>
                  </div>
                  <!-- Status -->
                  <div class="col-md-4 col-sm-4 col-xs-12">
                    <select data-placeholder="Any Status" class="utf-chosen-select-single-item" >
                      <option>Any Status</option>
                      <option>For Sale</option>
                      <option>For Rent</option>
                    </select>
                  </div>
                  
                  <!-- Property Type -->
                  <div class="col-md-4 col-sm-4 col-xs-12">
                    <select data-placeholder="Any Type" class="utf-chosen-select-single-item">
                      <option>Any Type</option>
                      <option>Apartments</option>
                      <option>Houses</option>
                      <option>Commercial</option>
                      <option>Garages</option>
                      <option>Lots</option>
                    </select>
                  </div>
				  
				  <!-- Age of Home -->
				  <div class="col-md-4 col-sm-4 col-xs-12">
					<select data-placeholder="Age of Home" class="utf-chosen-select-single-item">
					  <option label="blank"></option>
					  <option>Age of Home (Any)</option>
					  <option>0 - 1 Years</option>
					  <option>1 - 5 Years</option>
					  <option>5 - 15 Years</option>
					  <option>15 - 25 Years</option>
					  <option>25 + Years</option>
					</select>
				  </div>
                </div>
                <!-- Row With Forms / End --> 
                
                <!-- Search Button -->
                <button class="button fs-map-btn">Update</button>
                
                <!-- More Search Options --> 
                <a href="#" class="utf-utf-more-search-options-area-button margin-top-20" data-open-title="More Options" data-close-title="Less Options"></a>
                <div class="utf-more-search-options-area relative">
                  <div class="utf-more-search-options-area-container margin-top-30">
					<!-- Row With Forms -->
					<div class="row with-forms"> 
					  <!-- Min Price -->
					  <div class="col-md-3 col-sm-6 col-xs-12"> 
						<!-- Select Input -->
						<div class="select-input disabled-first-option">
						  <input type="text" placeholder="Min Area" data-unit="Sq Ft">
						  <select>
							<option>Min Area</option>
							<option>300</option>
							<option>400</option>
							<option>500</option>
							<option>700</option>
							<option>800</option>
							<option>1000</option>
							<option>1500</option>
						  </select>
						</div>
						<!-- Select Input / End -->                     
					  </div>
					  
					  <!-- Max Price -->
					  <div class="col-md-3 col-sm-6 col-xs-12">                     
						<!-- Select Input -->
						<div class="select-input disabled-first-option">
						  <input type="text" placeholder="Max Area" data-unit="Sq Ft">
						  <select>
							<option>Max Area</option>
							<option>300</option>
							<option>400</option>
							<option>500</option>
							<option>700</option>
							<option>800</option>
							<option>1000</option>
							<option>1500</option>
						  </select>
						</div>
						<!-- Select Input / End -->                     
					  </div>
					  
					  <!-- Min Price -->
					  <div class="col-md-3 col-sm-6 col-xs-12">                     
						<!-- Select Input -->
						<div class="select-input disabled-first-option">
						  <input type="text" placeholder="Min Price" data-unit="USD">
						  <select>
							<option>Min Price</option>
							<option>1000</option>
							<option>2000</option>
							<option>3000</option>
							<option>4000</option>
							<option>5000</option>
							<option>10000</option>
							<option>15000</option>
							<option>20000</option>
						  </select>
						</div>
						<!-- Select Input / End -->                     
					  </div>
					  
					  <!-- Max Price -->
					  <div class="col-md-3 col-sm-6 col-xs-12">                     
						<!-- Select Input -->
						<div class="select-input disabled-first-option">
						  <input type="text" placeholder="Max Price" data-unit="USD">
						  <select>
							<option>Max Price</option>
							<option>1000</option>
							<option>2000</option>
							<option>3000</option>
							<option>4000</option>
							<option>5000</option>
							<option>10000</option>
							<option>15000</option>
							<option>20000</option>
						  </select>
						</div>
						<!-- Select Input / End -->                     
					  </div>
					</div>
					<!-- Row With Forms / End -->
					
                    <!-- Row With Forms -->
                    <div class="row with-forms"> 
                      <!-- Rooms Area -->
                      <div class="col-md-4 col-sm-4 col-xs-12">
                        <select data-placeholder="Rooms" class="utf-chosen-select-single-item">
                          <option label="blank"></option>
                          <option>Rooms (Any)</option>
                          <option>1</option>
                          <option>2</option>
                          <option>3</option>
                          <option>4</option>
                          <option>5</option>
                        </select>
                      </div>
                      
                      <!-- Min Area -->
                      <div class="col-md-4 col-sm-4 col-xs-12">
                        <select data-placeholder="Beds" class="utf-chosen-select-single-item">
                          <option label="blank"></option>
                          <option>Beds (Any)</option>
                          <option>1</option>
                          <option>2</option>
                          <option>3</option>
                          <option>4</option>
                          <option>5</option>
                        </select>
                      </div>
                      
                      <!-- Max Area -->
                      <div class="col-md-4 col-sm-4 col-xs-12">
                        <select data-placeholder="Baths" class="utf-chosen-select-single-item">
                          <option label="blank"></option>
                          <option>Baths (Any)</option>
                          <option>1</option>
                          <option>2</option>
                          <option>3</option>
                          <option>4</option>
                          <option>5</option>
                        </select>
                      </div>
                    </div>
                    <!-- Row With Forms / End --> 
                    
                    <!-- Checkboxes -->
                    <div class="checkboxes in-row">
                        <input id="check-2" type="checkbox" name="check">
                        <label for="check-2">Air Condition</label>
                        <input id="check-3" type="checkbox" name="check">
                        <label for="check-3">Laundry Room</label>
                        <input id="check-4" type="checkbox" name="check">
                        <label for="check-4">Window Covering</label>
                        <input id="check-5" type="checkbox" name="check">
                        <label for="check-5">Swimming Pool</label>
                        <input id="check-6" type="checkbox" name="check">
                        <label for="check-6">Central Heating</label>
                        <input id="check-7" type="checkbox" name="check">
                        <label for="check-7">Window Covering</label>
                        <input id="check-8" type="checkbox" name="check">
                        <label for="check-8">24 Hour Security</label>
						<input id="check-9" type="checkbox" name="check">
                        <label for="check-9">Gym</label>						
                    </div>
                    <!-- Checkboxes / End -->                     
                  </div>
                </div>
                <!-- More Search Options / End -->                 
              </div>
              <!-- Box / End --> 
            </div>
          </div>
        </section>
        <!-- Search / End --> 
        
        <!-- Listings Container -->
		<div class="row fs-switcher">
			  <div class="utf-sort-box-aera">
				<div class="col-md-12"> 
					<p class="showing-results-two">Showing 1–10 of 50 Results Found :</p>
				</div>				
			  </div>
		  </div>
        <div class="row fs-listings fs-listings-two"> 
          <!-- Listing Item -->
          <div class="col-lg-6 col-md-12">
            <div class="utf-listing-item compact"> 
			  <a href="single-property-page-2.html" class="utf-smt-listing-img-container">
				  <div class="utf-listing-badges-item"> <span class="featured">Featured</span> <span class="for-sale">For Sale</span> </div>
				  <div class="utf-listing-img-content-item"> 
					 <span class="utf-listing-compact-title-item">Renovated Luxury Apartment <i>$18,000/mo</i></span>
				  </div>
				  <img src="images/listing-01.jpg" alt=""> 
				  <ul class="listing-hidden-content">
					  <li><i class="fa fa-bed"></i> Beds <span>3</span></li>
					  <li><i class="icon-feather-codepen"></i> Baths <span>2</span></li>
					  <li><i class="fa fa-car"></i> Garages <span>2</span></li>
					  <li><i class="fa fa-arrows-alt"></i> Sq Ft <span>780</span></li>
				  </ul>
			  </a> 
			</div>
          </div>
		  <!-- Listing Item / End --> 
          
          <!-- Listing Item -->
          <div class="col-lg-6 col-md-12">
            <div class="utf-listing-item compact"> 
			  <a href="single-property-page-2.html" class="utf-smt-listing-img-container">
				  <div class="utf-listing-badges-item"> <span class="featured">Featured</span> <span class="for-sale">For Sale</span> </div>
				  <div class="utf-listing-img-content-item"> 
					 <span class="utf-listing-compact-title-item">Renovated Luxury Apartment <i>$18,000/mo</i></span>
				  </div>
				  <img src="images/listing-02.jpg" alt=""> 
				  <ul class="listing-hidden-content">
					  <li><i class="fa fa-bed"></i> Beds <span>3</span></li>
					  <li><i class="icon-feather-codepen"></i> Baths <span>2</span></li>
					  <li><i class="fa fa-car"></i> Garages <span>2</span></li>
					  <li><i class="fa fa-arrows-alt"></i> Sq Ft <span>780</span></li>
				  </ul>
			  </a> 
			</div>
          </div>
          <!-- Listing Item / End --> 
          
          <!-- Listing Item -->
          <div class="col-lg-6 col-md-12">
            <div class="utf-listing-item compact"> 
			  <a href="single-property-page-2.html" class="utf-smt-listing-img-container">
				  <div class="utf-listing-badges-item"> <span class="featured">Featured</span> <span class="for-sale">For Sale</span> </div>
				  <div class="utf-listing-img-content-item"> 
					 <span class="utf-listing-compact-title-item">Renovated Luxury Apartment <i>$18,000/mo</i></span>
				  </div>
				  <img src="images/listing-03.jpg" alt=""> 
				  <ul class="listing-hidden-content">
					  <li><i class="fa fa-bed"></i> Beds <span>3</span></li>
					  <li><i class="icon-feather-codepen"></i> Baths <span>2</span></li>
					  <li><i class="fa fa-car"></i> Garages <span>2</span></li>
					  <li><i class="fa fa-arrows-alt"></i> Sq Ft <span>780</span></li>
				  </ul>
			  </a> 
			</div>
          </div>
          <!-- Listing Item / End --> 
          
          <!-- Listing Item -->
          <div class="col-lg-6 col-md-12">
            <div class="utf-listing-item compact"> 
			  <a href="single-property-page-2.html" class="utf-smt-listing-img-container">
				  <div class="utf-listing-badges-item"> <span class="featured">Featured</span> <span class="for-sale">For Sale</span> </div>
				  <div class="utf-listing-img-content-item"> 
					 <span class="utf-listing-compact-title-item">Renovated Luxury Apartment <i>$18,000/mo</i></span>
				  </div>
				  <img src="images/listing-04.jpg" alt=""> 
				  <ul class="listing-hidden-content">
					  <li><i class="fa fa-bed"></i> Beds <span>3</span></li>
					  <li><i class="icon-feather-codepen"></i> Baths <span>2</span></li>
					  <li><i class="fa fa-car"></i> Garages <span>2</span></li>
					  <li><i class="fa fa-arrows-alt"></i> Sq Ft <span>780</span></li>
				  </ul>
			  </a> 
			</div>
          </div>
          <!-- Listing Item / End --> 
          
          <!-- Listing Item -->
          <div class="col-lg-6 col-md-12">
            <div class="utf-listing-item compact"> 
			  <a href="single-property-page-2.html" class="utf-smt-listing-img-container">
				  <div class="utf-listing-badges-item"> <span class="featured">Featured</span> <span class="for-sale">For Sale</span> </div>
				  <div class="utf-listing-img-content-item"> 
					 <span class="utf-listing-compact-title-item">Renovated Luxury Apartment <i>$18,000/mo</i></span>
				  </div>
				  <img src="images/listing-05.jpg" alt=""> 
				  <ul class="listing-hidden-content">
					  <li><i class="fa fa-bed"></i> Beds <span>3</span></li>
					  <li><i class="icon-feather-codepen"></i> Baths <span>2</span></li>
					  <li><i class="fa fa-car"></i> Garages <span>2</span></li>
					  <li><i class="fa fa-arrows-alt"></i> Sq Ft <span>780</span></li>
				  </ul>
			  </a> 
			</div>
          </div>
          <!-- Listing Item / End --> 
          
          <!-- Listing Item -->
          <div class="col-lg-6 col-md-12">
            <div class="utf-listing-item compact"> 
			  <a href="single-property-page-2.html" class="utf-smt-listing-img-container">
				  <div class="utf-listing-badges-item"> <span class="featured">Featured</span> <span class="for-sale">For Sale</span> </div>
				  <div class="utf-listing-img-content-item"> 
					 <span class="utf-listing-compact-title-item">Renovated Luxury Apartment <i>$18,000/mo</i></span>
				  </div>
				  <img src="images/listing-06.jpg" alt=""> 
				  <ul class="listing-hidden-content">
					  <li><i class="fa fa-bed"></i> Beds <span>3</span></li>
					  <li><i class="icon-feather-codepen"></i> Baths <span>2</span></li>
					  <li><i class="fa fa-car"></i> Garages <span>2</span></li>
					  <li><i class="fa fa-arrows-alt"></i> Sq Ft <span>780</span></li>
				  </ul>
			  </a> 
			</div>
          </div>
          <!-- Listing Item / End -->           
        </div>
        <!-- Listings Container / End --> 
        
        <!-- Pagination Container -->
        <div class="row fs-listings">
          <div class="col-md-12">             
            <!-- Pagination -->
            <div class="clearfix"></div>
            <div class="utf-pagination-container margin-top-10 margin-bottom-45">
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
          </div>
        </div>
        <!-- Pagination Container / End -->         
      </div>
    </div>
  </div>
</div>