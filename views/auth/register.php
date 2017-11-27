<?php
if(basename($_SERVER["PHP_SELF"])=='register.php'){
    die("<script>window.location=('../../controller/pageController.php?change=index')</script>");
}
?>

<!DOCTYPE html>
<html lang="en" class="body-full-height">
<head>        
    <!-- META SECTION -->
    <title>Cadastrar</title>            
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <link rel="icon" href="favicon.ico" type="image/x-icon" />
    <!-- END META SECTION -->

    <!-- CSS INCLUDE -->        
    <link rel="stylesheet" type="text/css" id="theme" href="themes/theme-admin/css/theme-default.css"/>
    <!-- EOF CSS INCLUDE -->                                    
</head>
<body>
    <div class="login-container">

        <div class="login-box animated fadeInDown">
            <div class="login-body">
                <div class="login-title"><strong>Faça seu cadastro</strong></div>
                <?php
                if (!isset($_SESSION)) session_start();

                if(isset($_SESSION['error'])){
                    ?>
                    <div class="col-md-6">
                        <a href="#" class="btn btn-link btn-block">
                            Erro no Cadastro: 
                            <?=$_SESSION['error']?><br>
                        </a>
                    </div>
                    <?php
                    unset($_SESSION['error']);
                }
                ?>
                <form action="index.php?action=register" class="form-horizontal" method="POST">

                    <div class="form-group">
                        <div class="col-md-12">
                            <input type="text" class="form-control" name="firstName"" placeholder="Primeiro Nome"/>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-12">
                            <input type="text" class="form-control" name="lastName" placeholder="Último Nome"/>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <div class="col-md-12">
                            <input type="text" class="form-control" name="login" placeholder="login"/>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-12">
                            <input type="email" class="form-control" name="email" placeholder="email"/>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-12">
                            <input type="password" class="form-control" name="password" placeholder="Senha"/>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-6">
                            <a href="controller/pageController.php?change=login" class="btn btn-link btn-block">Já possui conta?</a>
                        </div>

                        <div class="col-md-6">
                            <input type="submit" value="Cadastrar" class="btn-wine">
                        </div>
                        
                    </div>
                </form>
            </div>
            <div class="login-footer">
                <div class="form-group" style="width: 60%; margin: auto;">
                 <a href="controller/pageController.php?change=index"><button class="btn-wine" style="height: 50px;">Voltar</button></a>
             </div>
         </div>
     </div>

 </div>

</body>
</html>






