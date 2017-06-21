<?php $page='livewell'; $subpage='before-login'; require ('inc/header.php')?>

<section id="livewell">
  <ul>
    <li>
    
      <!-- section 1 -->
	  <div class="vmodule">
        <ul class="c-split-1 clearenter">
          <li>
        
            <div class="breadcrumb">
              <ul>
                <li><a class="fa fa-chevron-right" href=" ">Home</a></li>
                <li><a class="fa fa-chevron-right" href="javascript:void(0)">Find Doctors</a></li>
                <li><span>Dr.Albert Teddy</span></li>
              </ul>
            </div>

          </li>
        </ul>
      </div>
      <!-- end section 1 -->
      
      
      
      <!-- section 2 -->
	  <div class="vmodule">
        <ul class="c-split-1 clearenter">
          <li>
            <div class="docdetail">
              <ul>
              
                <!-- bio -->
                <li class="docprofile">
                  <h1>Book this <b>Doctor</b></h1>
                  <div>
              	    <div class="flex_ori">
                      <img data-original="img/doctor-<?php echo rand(1, 7); ?>.jpg" />
                    </div>
                    <div class="doclist-info content_center">
                      <span>
                        <h2 class="doc-name">Dr.Andreas Harry</h2>
                        <h3>Cardiology</h3>
                        <ul class="doc-rate">
                          <li><i class="fa fa-star" aria-hidden="true"></i></li>
                          <li><i class="fa fa-star" aria-hidden="true"></i></li>
                          <li><i class="fa fa-star" aria-hidden="true"></i></li>
                          <li><i class="fa fa-star" aria-hidden="true"></i></li>
                          <li><i class="fa fa-star" aria-hidden="true"></i></li>
                          <li>(12345)</li>
                        </ul>
                        <div class="doc-rs fa fa-map-marker" aria-hidden="true">Rumah Sakit Gading Pluit</div>
                        <div class="doc-rs fa fa-map-marker" aria-hidden="true">Rumah Sakit Pusat Pertamina</div>
                        <ul class="doc-btn">
                          <li><a class="btn doc-btn-compare">View Profile</a></li>
                        </ul>
                      </span>
                    </div>
                  </div>
                </li>
                <!-- end bio -->
              
                <!-- info tab -->
                <li class="docinfo">
                
              	  <!-- tab button -->
                  <div class="docinfo-step">
                    <ul>
                      <li><span>Location</span> <div class="arrow"></div></li>
                      <li class="active"><span>Date & Time</span> <div class="arrow"></div></li>
                      <li><span>Patient's Detail</span> <div class="arrow"></div></li>
                      <li><span>Verify</span></li>
                    </ul>
                  </div>
                  <!-- end tab button -->
                  
                  <div class="docinfo-tab-content choose-time">   
                    
                    <!-- choose time -->
                    <div>
                      <h5>Choose Your Available Time</h5>
                    </div>
                    
                    <div class="select-time">
                      <b>1st Option</b>
                      <ul>
                        <li>
                          <div class="sort-form" id="pilihtanggal">
                            <input type="text" class="choosedate" />
                          </div>
                        </li>
                        <li>
                          <select name="">
                            <option value="1">Select Time</option>
                          tes</select>
                        </li>
                      </ul>
                    </div>
                    
                    <div class="select-time">
                      <b>2nd Option</b>
                      <ul>
                        <li>
                          <div class="sort-form" id="pilihtanggal">
                            <input type="text" class="choosedate" />
                          </div>
                        </li>
                        <li>
                          <select name="">
                            <option value="1">Select Time</option>
                          tes</select>
                        </li>
                      </ul>
                    </div>
                    <!-- end choose time --> 
                    
                    <div class="book-button">
                      <input class="btn" value="Continue" name="" type="button">
                    </div>
                    
                  </div>                  
                </li>
                <!-- end info tab -->
                
              </ul>
            </div>
          </li>
        </ul>
      </div>
      <!-- end section 2 -->
      
      
              
    </li>  
  </ul>
</section>

<?php require ('inc/doc-compare.php')?>
<?php require ('inc/footer.php')?>