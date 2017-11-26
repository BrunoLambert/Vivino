<?php include('header.php'); ?>
<div class="row">
    <div class="col-md-2">
    </div>
    <div class="col-md-8">
        <div class="widget widget-default widget-item-icon">
            <div class="widget-item-left">
                <span class="fa  fa-glass"></span>
            </div>
            <div class="widget-data">
                <div>
                    <div class="widget-title"><center><h1>Vinhos</h1></center></div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-2">
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="panel panel-default">
            <div class="panel-heading">
            
            <div class="panel-body">
                <table class="table datatable_simple">
                    <thead>
                        <tr>
                            <th>Usuario</th>
                            <th>Nome</th>
                            <th>Produtor</th>
                            <th>Preço</th>
                            <th>Tipo</th>
                            <th>Foto</th>
                            <th>Página</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        include("config/database.php");
                        if (!isset($_SESSION)) session_start();

                        $sql = "select id, name, producer, price, type, photo from wines where id_user = '" .
                        $_SESSION['user_id'] . "'";

                        $result = mysqli_query($db, $sql);

                        if(!$result){
                            echo "<tr><td>Erro: " . $db->error . "</td></tr>";
                        }else{

                            while ($row = $result->fetch_array()) {
                                ?>
                                <tr>
                                    <td><?=$_SESSION['user_firstName'] ." ". $_SESSION['user_lastName']?></td>
                                    <td><?=$row['name']?></td>
                                    <td><?=$row['producer']?></td>
                                    <td><?=$row['price']?></td>
                                    <td><?=$row['type']?></td>
                                    <td><img width="100px" src=<?=$row['photo']?>></td>
                                    <td> <a href="controller/pageController.php?change=wine&wineId=<?=$row['id']?>">Visualisar</a></td>
                                </tr>
                                <?php
                            }
                        }

                        $sql = "select u.firstName, u.lastName, w.id, w.name, w.producer, w.price, w.type, w.photo from users u inner join wines w on u.id = w.id_user inner join colaboracao c on w.id = c.idWine where c.idUser = '" . $_SESSION['user_id'] . "'";
                        $result = mysqli_query($db, $sql);

                        if(!$result){
                            echo "<tr><td>Erro: " . $db->error . "</td></tr>";
                        }else{

                            while ($row = $result->fetch_array()) {
                                ?>
                                <tr>
                                    <td><?=$row['firstName'] ." ". $row['lastName']?></td>
                                    <td><?=$row['name']?></td>
                                    <td><?=$row['producer']?></td>
                                    <td><?=$row['price']?></td>
                                    <td><?=$row['type']?></td>
                                    <td><img width="100px" src=<?=$row['photo']?> ></td>
                                    <td> <a href="controller/pageController.php?change=wine&wineId=<?=$row['id']?>">Visualisar</a></td>
                                </tr>
                                <?php
                            }
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<?php include('footer.php'); ?>