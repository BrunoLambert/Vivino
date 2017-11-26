<?php include ('header.php'); ?>



<div class="banner-main">

      <section class="slider">
           <div class="flexslider">
             <ul class="slides">
                   <li>
                   <img style="width: 280px; height: 340px;" src="views/index/wine.png" class="img-responsive">
                   <h3>Compre sua próxima garrafa de vinho com a nossa ajuda</h3>
                   </li>
          </ul>
        </div>
      </section>
    
</div>

<center>
  <div class="container" >
      <div class="filter-panel">
          <p><input type="hidden" class="price_range" value="0,500" /></p><br /><br />
          <input type="button" class="btn-price" onclick="filterProducts()" value="Mostrar vinhos " />
      </div>
      <div id="productContainer">
          <?php
          //Include database configuration file
          include('config/database.php');
          
          //get product rows
          $query = $db->query("SELECT * FROM wines ORDER BY id DESC");
          
          if($query->num_rows > 0){
                  while($row = $query->fetch_assoc()){
              ?>
                  <div class="list-item">
                      <h2><?php echo $row["name"]; ?></h2>
                      <h4>Price: <?php echo $row["price"]; ?></h4>
                  </div>
          <?php }
          }else{
              echo 'Product(s) not found';
          } ?>
      </div>
  </div>
</center>
<!-- slider -->
<link rel="stylesheet" href="themes/theme-public/css/flexslider.css" type="text/css" media="screen" />
<script defer src="themes/theme-public/js/jquery.flexslider.js"></script>
<script type="text/javascript" src="views/index/image.js"></script>
<script type="text/javascript" src="views/index/price.js"></script>


<?php include ('footer.php'); ?>