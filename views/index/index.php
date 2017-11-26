<?php include ('header.php'); 
      include('config/database.php');
?>



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
  <div class="container" id="container-search" style="background-color: #bf828a; width: 100%; height: 120px;">
    <div class="col-md-4">
      <div class="filter-panel">
          <label class="lab-search">Preços</label>
          <input type="hidden" class="price_range" value="0,500" />
      </div>
    </div>
    <div class="col-md-3">
      <div class="filter-panel">
        <label class="lab-search">Uvas</label>
        <div class="select">
          <select>
            <?php
            $queryGrape = $db->query("SELECT grape FROM wines");
            while($grapes=mysqli_fetch_assoc($queryGrape))
            {
            echo "<option value='$grapes[grape]'>$grapes[grape]</option>";
            }
            ?>
          </select>
        </div>
      </div>
    </div>
    <div class="col-md-3">
      <div class="filter-panel">
        <label class="lab-search">Avaliações</label>
          <input type="hidden" class="price_range" value="0,500" />
      </div>
    </div>
    <div class="col-md-2">
      <div class="filter-panel">
      <input type="button" class="btn-price" onclick="filterProducts()" value="Buscar" />
      </div>
    </div>
  </div>
  <div>
</div>
</center>
   <div class="container" style=" width: 100%;">
      <div id="productContainer">
            <?php
            
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
<!-- slider -->
<link rel="stylesheet" href="themes/theme-public/css/flexslider.css" type="text/css" media="screen" />
<script defer src="themes/theme-public/js/jquery.flexslider.js"></script>
<script type="text/javascript" src="views/index/image.js"></script>
<script type="text/javascript" src="views/index/price.js"></script>


<?php include ('footer.php'); ?>