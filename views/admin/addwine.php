<?php include('header.php'); ?>
    <div class="form-group">
        <h1><center> Vinhos </center></h1>
    </div>
    </br></br>
    <div class="col-sm-12">
        <form method="POST" action="index.php?action=createWine">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                

                <div class="form-group">
                    <label for="nome">Nome do Vinho</label>
                    <input type="text" class="form-control" name="name" id="nome_vinho">
                </div>
                <header class="row">
                    <h2 class='text-center text-danger'>Vinhos</h2>
                </header>
                <div class="form-group">
                    <label for="nome">Produtor</label>
                    <input type="text" class="form-control" name="producer" id="produtor_vinho" required>
                </div>

                <div class="form-group">
                    <label for="nome">País</label>
                    <input type="text" class="form-control" name="country" id="pais_vinho">
                </div>
                <div class="form-group">
                    <label for="nome">Tipo</label>
                    <input type="text" class="form-control" name="type" id="tipo_vinho">
                </div>
                <div class="form-group">
                    <label for="nome">Estilo</label>
                    <input type="text" class="form-control" name="style" id="estilo_vinho">
                </div>
                <div class="form-group">
                    <label for="nome">Tipo da Uva</label>
                    <input type="text" class="form-control" name="grape" id="uva_vinho">
                </div>
                <div class="form-group">
                    <label for="nome">Harmonização</label>
                    <input type="text" class="form-control" name="harmonization" id="harm_vinho">
                </div>

                <input type="submit" value="Cadastrar" class="btn btn-default">
            </div>

        </form>

    </div>
    </div>
    <script type="text/javascript" src="views/admin/custom.js"></script>

  <?php include('footer.php'); ?>