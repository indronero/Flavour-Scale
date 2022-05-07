<!-- index.php -->
<?php include 'template/header.php'; ?>
<?php include 'dbCon.php';?>

  <body>
    
    <?php include 'template/nav-bar.php'; ?>
    <!-- END nav -->
    
    
                    

    <section class="home-slider owl-carousel" >
      <div class="slider-item" style="background-image: url('images/bg_1.jpg');">
        <div class="overlay"> 
        
        </div>
        <div class="container">
          <div class="row slider-text align-items-center justify-content-center text-center">
            <div class="col-md-10 col-sm-12 ftco-animate">

            <div class="card" style="width:700px; height:700px; margin: auto; margin-top: 10%; box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
  transition: 0.3s;">
        
         <?php 
              
                    $con = connect();
                    $res_id = $_GET['res_id'];
                    $sql = "SELECT * FROM `restaurant_info` WHERE id = '$res_id';";
                    $result = $con->query($sql);
                    foreach ($result as $r) {
                  ?>
     
    <img class="card-img-top" style="background-image: url(dashboard/user-image/<?php echo $r['logo']; ?>); background-position: center center; background-repeat: no-repeat; background-size: contain; padding-bottom:37%; margin-top:10%;" >
    
   
    <div class="card-body" style=" padding-bottom:19%; padding: 2px 16px;">
      <h4 class="card-title"><?php echo $r['restaurent_name']; ?></h4>
      <p class="card-text" style="color : black;"><?php echo $r['address']; ?></p>
      <a class="card-text" style="color : black;">Cuisines: <?php echo $r['cuisine']; ?></a><br>
      <a class="card-text" style="color : black;">Timings: <?php echo $r['time']; ?></a><br>
      <a class="card-text" style="color : black;">Average Cost for two: Rs. <?php echo $r['cost']; ?></a>
      <br><br>
      <a href="reservation.php?res_id=<?php echo $r['id']; ?>" class="btn btn-primary stretched-link">Book Table</a>
    </div>
    <?php } ?> 
  </div>  
            </div>
          </div>
        </div>
      </div>
      
    </section>


   

  
<?php include 'template/footer.php'; ?>


  <?php include 'template/script.php'; ?>
  
  <script src="dashboard/assets/vendor/jquery/jquery.js"></script>
  <script src="dashboard/assets/vendor/select2/select2.js"></script>
  <script src="dashboard/assets/vendor/bootstrap-multiselect/bootstrap-multiselect.js"></script>
    
  </body>
</html>