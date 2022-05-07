<section class="ftco-section bg-light">
      <div class="container">
        <div class="row justify-content-center mb-5 pb-5">
          <div class="col-md-7 text-center heading-section ftco-animate">
            
            <h2>Our Recommendations</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 dish-menu">

            

            <div class="tab-content py-5" id="v-pills-tabContent">
              <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
              <div class="row">
                  <?php  
                    $con = connect();
                    $sql = "SELECT * FROM `restaurant_info` WHERE location = '2';";
                    $result = $con->query($sql);
                    foreach ($result as $r) {
                  ?>
                  <div class="col-lg-12">
                    <div class="menus d-flex ftco-animate">
                      <div class="menu-img" style="background-image: url(dashboard/user-image/<?php echo $r['logo']; ?>)"></div>
                      <div class="text d-flex">
                        <div class="row one-half">
                        	<div class="col-lg-12">
                          	<h3  onClick="location.href='restaurant.php?res_id=<?php echo $r['id']; ?>'" class="btn btn-info"><?php echo $r['restaurent_name']; ?></h3>
                      		</div>
                          <div class="col-lg-12">
                            <p><?php echo $r['address']; ?></p>
                          </div>
                        </div>
                        <div class="one-third">
                        	<a href="reservation.php?res_id=<?php echo $r['id']; ?>" class="btn btn-info" style="width: 100%;margin-left: 23px;margin-top: 18px;">Book Table</a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <?php } ?>
              </div>

                 
                
               
              </div> 
            </div>
          </div>
        </div>
      </div>
    </section>