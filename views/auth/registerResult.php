<?php
	if(!isset($_SESSION)) session_start();

	if(isset($_SESSION['error'])){
		$_SESSION['action'] == 'register';
		?>
		<script type="text/javascript">
			alert("Registro não foi concluído!\nErro: " + <?=$_SESSION['error']?>);
			window.location.href("../Vivino");
		</script>
		<?php
	}else{
		?>
		<script type="text/javascript">
			alert("Cadastro feito com Sucesso!\nVocê já está logado!");
		</script>
		<?php
	}

?>