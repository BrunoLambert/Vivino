<?php include('header.php'); ?>


<script type="text/javascript" src="themes/theme-admin/js/plugins/bootstrap/bootstrap-datepicker.js"></script>
<script type="text/javascript" src="themes/theme-admin/js/plugins/bootstrap/bootstrap-timepicker.min.js"></script>
<script type="text/javascript" src="themes/theme-admin/js/plugins/bootstrap/bootstrap-colorpicker.js"></script>
<script type="text/javascript" src="themes/theme-admin/js/plugins/bootstrap/bootstrap-file-input.js"></script>
<script type="text/javascript" src="themes/theme-admin/js/plugins/bootstrap/bootstrap-select.js"></script>
<script type="text/javascript" src="themes/theme-admin/js/plugins/tagsinput/jquery.tagsinput.min.js"></script>

<div class="form-group">
	<h1><center> PERFIL </center></h1>
</div>
</br></br>
<div class="col-sm-12">
	<form method="POST" action="index.php?action=updateUser" enctype="multipart/form-data">
		<div class="col-md-2"></div>
		<div class="col-md-8">

			<?php 
			if (isset($_SESSION['error'])){
				?>
				<div class="form-group" style="color: red;">
					<b><label for=""><?=$_SESSION['error']?></label></b>
				</div>
				<?php
				unset($_SESSION['error']);
			}else if (isset($_SESSION['sucess'])){
				?>
				<div class="form-group" style="color:green;">
					<b><label for=""><?=$_SESSION['sucess']?></label></b>
				</div>
				<?php
				unset($_SESSION['sucess']);
			}
			?>

			<div class="form-group">
				<label for="name">Primeiro Nome</label>
				<input type="text" class="form-control" name="firstName" value=<?=$_SESSION['user_firstName']?>  id="name" required>
			</div>
			<div class="form-group">
				<label for="name">Ultimo Nome</label>
				<input type="text" class="form-control" name="lastName" value=<?=$_SESSION['user_lastName']?>  id="name" required>
			</div>
			<div class="form-group">
				<label for="password">Senha</label>
				<input type="password" class="form-control" name="password" id="password">
			</div>

			<div class="form-group">
				<label for="photo">Foto</label>
				<input type="file" name="photo" id="photo" accept=".jpg">
			</div>

			<div class="form-group">
				<img id="view-img" style="width: 150px; height: 150px" src=<?=$_SESSION['user_photo']?> >
			</div><br><br>

			<div class="col-md-6">
				<input type="submit" value="Editar" class="btn btn-info btn-block">
			</div>

		</div>
	</form>
</div>

<?php include('footer.php'); ?>