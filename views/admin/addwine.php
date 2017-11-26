<?php include('header.php'); ?>
<div class="form-group">
    <h1><center> Adicionar Vinho </center></h1>
</div>
</br></br>
<div class="col-sm-12">
    <form method="POST" action="index.php?action=createWine" enctype="multipart/form-data">
        <div class="col-md-2"></div>
        <div class="col-md-8">

            <?php
            if (isset($_SESSION['error'])){
                ?>
                <div class="form-group">
                    <label for="nome" style="color: red;"><b><?=$_SESSION['error']?></b></label>
                </div>
                <?php
                unset($_SESSION['error']);
            }
            ?>

            <input type="hidden" name="hidden" id="hidden" value="insert">
            <input type="hidden" name="id" id="id">
            
            <div class="form-group">
                <label for="nome">Nome</label>
                <input type="text" class="form-control" name="name" id="nome_vinho">
            </div>
            <div class="form-group">
                <label for="nome">Preço</label>
                <input type="text" class="form-control" name="price" id="preco_vinho">
            </div>
            <div class="form-group">
                <label for="nome">Produtor</label>
                <input type="text" class="form-control" name="producer" id="produtor_vinho" required>
            </div>

            <div class="form-group">
                <label for="nome">País</label>
                <input type="text" class="form-control" name="country" id="pais_vinho">
            </div>
            <div class="form-group">
                <label for="nome">Tipo</label><br>
                <select name="type" id="tipo_vinho" style="width: 100%; height: 30px;">
                    <option value="Tinto">Tinto</option>
                    <option value="Branco">Branco</option>
                    <option value="Rose">Rose</option>
                    <option value="Espumante">Espumante</option>
                    <option value="Sobremesa">Sobremesa</option>
                    <option value="Porto">Porto</option>
                </select>
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
            <div class="form-group">
                <label for="nome">Foto</label>
                <input type="file" class="form-control" name="photo" id="photo_vinho" accept=".jpg">
            </div>

            <input type="submit" value="Cadastrar" class="btn btn-default">
        </div>

    </form>

</div>
</div>
<script type="text/javascript" src="views/admin/custom.js"></script>

<?php include('footer.php'); ?>