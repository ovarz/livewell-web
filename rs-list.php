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
                <li><span>Find Facilities</span></li>
              </ul>
            </div>

          </li>
        </ul>
      </div>
      <!-- end section 1 -->
      
      
      
      <!-- section 2 -->
	  <div class="vmodule docadv">
        <ul class="c-split-1 clearenter">
          <li>
            <div class="docadv-detail">
              <h1><b>Filter</b> Facilities</h1>
              
              <!-- filter -->
              <ul class="filter">
                <li>
                  <div class="name">Location</div>
                  <select name="">
                    <option value="1">Province, city</option>
                  </select>
                </li>
                <li>
                  <div class="name">Type</div>
                  <select name="">
                    <option value="1">Any</option>
                  </select>
                </li>
                <li>
                  <div class="name">Practice time</div>
                  <ul class="practice">
                    <li><input name="" class="btn" value="Any" type="button" /></li>
                    <li><input name="" class="btn" value="M" type="button" /></li>
                    <li><input name="" class="btn" value="T" type="button" /></li>
                    <li><input name="" class="btn" value="W" type="button" /></li>
                    <li><input name="" class="btn" value="T" type="button" /></li>
                    <li><input name="" class="btn" value="F" type="button" /></li>
                    <li><input name="" class="btn" value="S" type="button" /></li>
                    <li><input name="" class="btn" value="S" type="button" /></li>
                  </ul>
                </li>
              </ul>
              <!-- end filter -->
              
              <!-- filter -->
              <ul class="filter">
                <li class="exp">
                  <div class="name">Established</div>
                  <input name="" type="text" /> <span>years</span>
                </li>
                <li>
                  <div class="name">&nbsp;</div>
                  <input name="" class="btn" value="Filter Search" type="button" />
                </li>
              </ul>
              <!-- end filter -->
              
            </div>
          </li>
        </ul>
      </div>
      <!-- end section 2 -->
      
      
      
      <!-- section 3 -->
	  <div class="vmodule doclist rslist">
        <ul class="c-split-2 clearenter">
        
          <!-- list -->
          <?php for ($i=1; $i <= 10 ; $i++) { ?>
          <li>
            <div class="doclist-detail">
			  <a href="javascript:void(0)" class="flex_lazy">
                <img data-original="img/rs-<?php echo rand(1, 7); ?>.jpg" />
              </a>
              <div class="doclist-info content_center">
                <span>
                  <h2 class="doc-name">Rumah Sakit Pondok Indah</h2>
                  <div class="doc-rs fa fa-map-marker" aria-hidden="true">Pondok Indah, Jakarta Selatan</div>
                  <ul class="doc-rate">
                    <li><i class="fa fa-star" aria-hidden="true"></i></li>
                    <li><i class="fa fa-star" aria-hidden="true"></i></li>
                    <li><i class="fa fa-star" aria-hidden="true"></i></li>
                    <li><i class="fa fa-star" aria-hidden="true"></i></li>
                    <li><i class="fa fa-star" aria-hidden="true"></i></li>
                    <li>(12345)</li>
                  </ul>
                  <ul class="doc-btn">
                    <li><a class="btn doc-btn-rate"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                  </ul>
                </span>
              </div>
            </div>
          </li>
          <?php } ?> 
          <!-- list -->
          
        </ul>
        <div class="load-more">
          <input name="" class="btn" value="Load More" type="button" />
        </div>
      </div>
      <!-- end section 3 -->
        
    </li>  
  </ul>
</section>

<?php require ('inc/footer.php')?>