<?php include ("header.php"); ?>
<div class="panel-body">
	<div style="text-align: center;">
		<?php
		include("config/database.php");
		if (!isset($_SESSION)) session_start();

		$sql = "select * from users u inner join wines w on w.id_user = u.id where w.id = '" . $_SESSION['wineId'] . "'";

		$result = mysqli_query($db, $sql);

		if (!$result){
			echo "<tr><td>Erro de Banco de Dados: " . $db->error . "</td></tr>";
		}else{
			$row = $result->fetch_array();
			?>
			<tr>
				<td><img src=<?=$row['photo']?>></td>
				<td>
					<h1><?=$row['name']?></h1>
					<h4><b>Cadastrado por: <?=$row['firstName'] . $row['lastName']?></h4></b>
					<p>Produtor <?=$row['producer']?></p>
					<p>Preço: <?=$row['price']?> reais</p>
					<p>País: <?=$row['country']?></p>
					<p>Tipo: <?=$row['type']?></p>
					<p>Harmonização: <?=$row['harmonization']?></p>
					<p>Uva: <?=$row['grape']?></p>
					<p>Estilo: <?=$row['style']?></p>
				</td>
			</tr>
			<?php
		}
		?>
	</div>
</div>

<?php include("footer.php"); ?>