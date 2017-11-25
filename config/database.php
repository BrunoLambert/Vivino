<?php
	if(basename($_SERVER["PHP_SELF"])=='database.php'){
		die("<script>window.location=('../../Vivino')</script>");
	}

	# SERVER, USER, PASSWORD, DATA_BASE
	$db = new mysqli('localhost', 'root', '', 'vivino');

	if(!$db){
		?>
		<script type="text/javascript">
			alert("Banco de Dados Não Conectado");
		</script>
		<?php
		header("Location: controller/pageController.php?change=index");
	}
?>