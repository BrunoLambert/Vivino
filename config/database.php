<?php
	if(basename($_SERVER["PHP_SELF"])=='database.php'){
		die("<script>window.location=('../controller/pageController.php?change=index')</script>");
	}

	# SERVER, USER, PASSWORD, DATA_BASE
	$db = new mysqli('localhost', 'root', '', 'xvivino');

	if(!$db){
		?>
		<script type="text/javascript">
			alert("Banco de Dados Não Conectado");
		</script>
		<?php
		header("Location: controller/pageController.php?change=index");
	}
?>