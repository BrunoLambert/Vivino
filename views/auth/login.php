<?php
if(basename($_SERVER["PHP_SELF"])=='login.php'){
    die("<script>window.location=('../../controller/pageController.php?change=index')</script>");
}
?>

<!DOCTYPE html>
<html lang="en" class="body-full-height">
<head>        
    <!-- META SECTION -->
    <title>Login</title>            
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
                <form action="index.php?action=login" class="form-horizontal" method="POST">
                    <div class="login-title"><strong>Login</strong></div>
                    <?php
                    if (!isset($_SESSION)) session_start();

                    if (isset($_SESSION['error'])){
                        ?>
                        <div class="form-group">
                            <div class="form-group col-md-7">
                                <a href="" class="btn btn-link btn-block"><?=$_SESSION['error']?></a>
                            </div>
                        </div>
                        <?php
                        unset($_SESSION['error']);
                    }
                    ?>
                    <div class="form-group">
                        <div class="col-md-12">
                            <input type="text" name="email" class="form-control" placeholder="Email"/>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-12">
                            <input type="password" name="password" class="form-control" placeholder="Senha"/>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="form-group col-md-7">
                            <a href="controller/pageController.php?change=register" class="btn btn-link btn-block">Ainda não possui conta?</a>
                        </div>

                    </div>
                    <center>

                        <div class="form-group" style="width: 60%;">
                            <input type="submit" value="Logar" class="btn-wine" style="height: 50px;">
                        </div>
                    </center>
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






