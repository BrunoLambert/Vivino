<?php 

include ('header.php'); 
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
        <input type="hidden" class="price_range" value="200,800"/>
      </div>
    </div>
    <div class="col-md-3">
      <div class="filter-panel">
        <label class="lab-search">Uvas</label>
        <div class="select">
          <select name="op" class="op">
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
        <input type="hidden" class="price_range" value="200,800" />
      </div>
    </div>
    <div class="col-md-2">
      <div class="filter-panel">
        <a href="#result"><input type="button" class="btn-price" onclick="filterProducts()" value="Buscar" /></a>
      </div>
    </div>
  </div>
  <div>
  </div>
</center>
<section id="result">
  <div class="container" style=" width: 100%;">
    <div id="productContainer">

    </div>
  </div>
</section>
<!--End Pattern HTML-->


<!-- slider -->
<link rel="stylesheet" href="themes/theme-public/css/flexslider.css" type="text/css" media="screen" />
<script defer src="themes/theme-public/js/jquery.flexslider.js"></script>
<script type="text/javascript" src="views/index/image.js"></script>
<script type="text/javascript" src="views/index/price.js"></script>


<?php include ('footer.php'); ?>