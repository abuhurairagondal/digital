<div id="map-container" class="homepage-map margin-bottom-0">
    <div id="map"> 
      <!-- map goes here --> 
    </div>
    
    <!-- Map Navigation --> 
    <a href="#" id="scrollEnabling" title="Enable or disable scrolling on map">Enable Scrolling</a>
    <ul id="mapnav-buttons">
      <li><a href="#" id="prevpoint" title="Previous point on map">Prev</a></li>
      <li><a href="#" id="nextpoint" title="Next point on mp">Next</a></li>
    </ul>        
  </div>
  <!-- Main Search Container -->
    <div class="utf-main-search-container-area inner-map-search-block">
      <div class="container">
        <div class="row">
          <div class="col-md-12">             
            <form class="utf-main-search-form-item">              
              <!-- Type -->
              <div class="search-type" style="display: none;">
                <label class="active"><input class="first-tab" name="tab" checked="checked" type="radio">Any Status</label>
                <label><input name="tab" type="radio">For Sale</label>
                <label><input name="tab" type="radio">For Rent</label>
                <div class="utf-search-type-arrow"></div>
              </div>
              
              <!-- Box -->
              <div class="utf-main-search-box-area"> 
                <!-- Row With Forms -->
                <div class="row with-forms"> 
                  <!-- Status -->
                  <div class="col-md-2 col-sm-4">
                      <select data-placeholder="Select City" title="Select City" class="utf-chosen-select-single-item">
						<option>Select City</option>
						<option>Afghanistan</option>
						<option>Albania</option>
						<option>Algeria</option>
						<option>Brazil</option>
						<option>Burundi</option>
						<option>Bulgaria</option>
						<option>California</option>
						<option>Germany</option>
						<option>Grenada</option>
						<option>Guatemala</option>
						<option>Iceland</option>                        
					  </select>
                  </div>
                  
                  <!-- Property Type -->
                  <div class="col-md-2 col-sm-4">
                    <select data-placeholder="Property Type" class="utf-chosen-select-single-item">
					  <option>Property Type</option>
					  <option>Residential</option>
					  <option>Apartments</option>
					  <option>Houses</option>
					  <option>Commercial</option>
					  <option>Land</option>
					</select>
                  </div>
				  
				  <!-- Status -->
                  <div class="col-md-2 col-sm-4">
                    <select data-placeholder="Any Status" class="utf-chosen-select-single-item">
					  <option>Any Status</option>
					  <option>For Sale</option>
					  <option>For Rent</option>
					</select>
                  </div>
                  
                  <!-- Main Search Input -->
                  <div class="col-md-6">
                    <div class="utf-main-search-input-item">
                      <input type="text" placeholder="Enter Keywords..." value=""/>
                      <button class="button"><i class="fa fa-search"></i> Search</button>
                    </div>
                  </div>
                </div>
                <!-- Row With Forms / End -->                                
              </div>              
            </form>            
          </div>
        </div>
      </div>
    </div>