<?php include('header.php'); ?>
    <div class="form-group">
        <h1><center> Vinhos </center></h1>
    </div>
    </br></br>
    <div class="col-sm-12">
        <form method="POST" action="{{strpos(Request::url(), 'editar') ? route('atualizar_wine', $wine->id) : route('salvar_wine')}}">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <div class="form-group">
                    <label for="nome">Produtor</label>
                    <input type="text" class="form-control" name="producer" id="descricao" required>
                </div>

                <div class="form-group">
                    <label for="nome">Nome do Vinho</label>
                    <input type="text" class="form-control" name="name" id="descricao">
                </div>

                <div class="form-group">
                    <label for="nome">País</label>
                    <input type="text" class="form-control" name="country" id="descricao">
                </div>
                <div class="form-group">
                    <label for="nome">Tipo</label>
                    <input type="text" class="form-control" name="type" id="descricao">
                </div>
                <div class="form-group">
                    <label for="nome">Estilo</label>
                    <input type="text" class="form-control" name="style" id="descricao">
                </div>
                <div class="form-group">
                    <label for="nome">Tipo da Uva</label>
                    <input type="text" class="form-control" name="grape" id="descricao">
                </div>
                <div class="form-group">
                    <label for="nome">Harmonização</label>
                    <input type="text" class="form-control" name="harmonization" id="descricao">
                </div>

                <input type="submit" value="Cadastrar" class="btn btn-default">
            </div>



        </form>

    </div>
    </div>
  <?php include('footer.php'); ?>