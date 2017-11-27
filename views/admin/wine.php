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
					<h4><b>Cadastrado por: <?=$row['firstName'] ." ". $row['lastName']?></h4></b>
					<p>Produtor <?=$row['producer']?></p>
					<p>Preço: <?=$row['price']?> reais</p>
					<p>País: <?=$row['country']?></p>
					<p>Tipo: <?=$row['type']?></p>
					<p>Harmonização: <?=$row['harmonization']?></p>
					<p>Uva: <?=$row['grape']?></p>
					<p>Estilo: <?=$row['style']?></p>
					<?php
					$result = mysqli_query($db, "select AVG(stars) from avaliacoes where idWine = '" . 
						$_SESSION['wineId'] . "'");
					$row = $result->fetch_array();
					?>
					<h3>Avaliação Média: <?=substr($row['AVG(stars)'], 0, 3)?></h3>
					</td>
				</tr>
				<?php
			}
			?>
		</div>

		<hr>

		<div style="background-color: Maroon; color: white; box-shadow: 0px 0px 30px black;">
			<?php
			$sql = "select * from avaliacoes a inner join wines w on a.idWine = w.id inner join users u on a.idUser = u.id where idWine = '" . $_SESSION['wineId'] . "'";
			$result = mysqli_query($db, $sql);

			if(!$result){
				echo "<h3 style='text-align: center; color: white;'>Houve algum erro nas avaliações</h3>";
			}else{
				$comment = 0;
				echo "<br><div style='text-align:center;'><h3 style='color:white;'>Comentários</h3></div><br>";
				while($row = $result->fetch_array()){
					$comment++;
					?>
					<p>->#<?=$comment?>#<-</p>
					<table class="table">
						<tr>
							<th></th>
							<th>Usuário</th>
							<th>Avaliação</th>
							<th>Comentário</th>
						</tr>
						<tr>
							<td><img width="100px" src=<?=$row['photo']?>></td>
							<td><?=$row['firstName'] . " " . $row['lastName']?></td>
							<td>Avaliação: <?=$row['stars']?> estrelas</td>
							<td><?=$row['comment']?></td>
						</tr>
					</table>
					<?php
				}
				if ($comment == 0) echo "<h3 style='color:white;text-align:center;'>Nenhum comentário cadastrado</h3><br>";
			}
			?>
		</div>
		<hr>
		<div style="background-color: Maroon;box-shadow: 0px 0px 30px black;">
			<br><h3 style="text-align: center;color: white;">Faça Seu Comentário!</h3><br>
			<form style="text-align: center;" method="POST" action="index.php?action=rating">
				<?php
				if (isset($_SESSION['sucess'])){
					?>
					<h3 style="color: white;"><?=$_SESSION['sucess']?></h3>
					<?php
					unset($_SESSION['sucess']);
				}else if (isset($_SESSION['error'])){
					?>
					<h3 style="color: white;">Houve um erro: <?=$_SESSION['error']?></h3>
					<?php
					unset($_SESSION['error']);
				}
				?>
				<label style="color: white;">Avaliação</label><br>
				<input type="number" name="stars"><br><br>
				<label style="color: white;">Comentário</label><br>
				<textarea name="comment" style="width: 50%; height: 150px;"></textarea><br>
				<br>
				<input type="submit" name="submit" value="Enviar" class="btn btn-info btn-block" style="width: 50%; margin: auto;">
			</form>
			<br>
		</div>
	</div>

	<?php include("footer.php"); ?>