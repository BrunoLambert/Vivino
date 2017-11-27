<?php

if(isset($_POST['price_range'])){

    include('../../config/database.php');

    //Setando condições para o price range
    $whereSQL = $orderSQL = '';
    $priceRange = $_POST['price_range'];
    $op = $_POST['op'];
    $priceRangeArr = explode(',', $priceRange);
    $whereSQL = "WHERE price BETWEEN '".$priceRangeArr[0]."' AND '".$priceRangeArr[1]."'";
    $orderSQL = " ORDER BY price ASC ";
}else{
    $orderSQL = " ORDER BY id DESC ";
}

$query = $db->query("SELECT * FROM wines $whereSQL $orderSQL");

if($query->num_rows > 0){
    while($row = $query->fetch_assoc()){
        ?>
        <div class="list-item">
            <div id="pattern" class="pattern">
              <ul class="list img-list">
                <li>
                    <a href="#" class="inner">
                        <div class="li-img">
                          <a href="controller/pageController.php?change=wine&wineId=<?=$row['id']?>">
                          <img width="100px" src=<?=$row['photo']?>></a>
                      </div>
                  </a>
                  <div class="li-text">
                    <h2><?php echo $row["name"]; ?></h2>
                    <h4>Preço: R$<?php echo $row["price"]; ?></h4>
                    <h4>País: <?php echo $row["country"]; ?></h4>


                </li>

            </ul>
        </div>
    </div>
    <?php }

}

else{
    echo 'Product(s) not found';
}
?>
