<?php
if(isset($_POST['price_range'])){
    
    include('../../config/database.php');
    
    //Setando condições para o price range
    $whereSQL = $orderSQL = '';
    $priceRange = $_POST['price_range'];
    if(!empty($priceRange)){
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
                <h2><?php echo $row["name"]; ?></h2>
                <h4>Price: <?php echo $row["price"]; ?></h4>
            </div>
    <?php }
    }else{
        echo 'Product(s) not found';
    }
}
?>