<?php
include(VIEWS . "index/header.php");
include("config/database.php");

if(!isset($_SESSION)) session_start();

$result = mysqli_query($db, "select * from users where id ='" . $_SESSION['profileId'] . "'");
$profile_user_name = "";

if(!$result){
	echo "Erro: " . $db->error;
}else{
	if($row = $result->fetch_array()){
		?>
		<br>
		<div style="text-align: center;">
			<h1><?=$row['firstName'] ." ". $row['lastName']?></h1>
			<p>Email: <?=$row['email']?></p>
			<br>
			<img width="200px" src=<?=$row['photo']?> >
		</div>
		<?php
	}else{
		echo "<h1>Usuário não encontrado!</h1>";
	}
	$profile_user_name = $row['firstName'];
}

$result = mysqli_query($db, "select * from wines where id_user = '" . $_SESSION['profileId'] . "'");

if(!$result){
	echo "Erro: " . $db->error;
}else{
	?>
	<hr>
	<h3 style="text-align: center;">Vinhos de <?=$profile_user_name?></h3>
	<table class="table">
		<tr>
			<th>Nome do Vinho</th>
			<th>Produtor</th>
			<th>Preço</th>
			<th>Tipo</th>
			<th>Imagem</th>
			<th>Página</th>
		</tr>
		<?php
		while ($row = $result->fetch_array()) {
			?>
			<tr>
				<td><?=$row['name']?></td>
				<td><?=$row['producer']?></td>
				<td><?=$row['price']?></td>
				<td><?=$row['type']?></td>
				<td><img width="100px" src=<?=$row['photo']?>></td>
				<td> <a href="controller/pageController.php?change=wine&wineId=<?=$row['id']?>">Visualisar</a></td>
			</tr>
			<?php
		}
		?>
	</table>
	<?php
}

include(VIEWS . "index/footer.php");
?>