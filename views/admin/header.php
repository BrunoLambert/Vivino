<?php
if(basename($_SERVER["PHP_SELF"])=='header.php'){
    die("<script>window.location=('../../controller/pageController.php?change=index')</script>");
}
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- css plugins -->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.css">

    <link rel="stylesheet" type="text/css" href="themes/theme-admin/css/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" id="theme" href="themes/theme-admin/css/theme-default.css"/>

    <!-- js plugins -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script> 
    <script type="text/javascript" src="themes/theme-admin/js/plugins/bootstrap/bootstrap.min.js"></script>

    <!-- START THIS PAGE PLUGINS-->  
    <script type="text/javascript" src="themes/theme-admin/js/plugins/scrolltotop/scrolltopcontrol.js"></script>

    <script type="text/javascript" src="themes/theme-admin/js/plugins/morris/raphael-min.js"></script>
    <script type="text/javascript" src="themes/theme-admin/js/plugins/morris/morris.min.js"></script>

    <script type="text/javascript" src="themes/theme-admin/js/plugins/icheck/icheck.min.js"></script>
    <script type="text/javascript" src="themes/theme-admin/js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js'"></script>


    <!-- START TEMPLATE -->
    <script type="text/javascript" src="themes/theme-admin/js/settings.js"></script>
    <script type="text/javascript" src="themes/theme-admin/js/plugins.js"></script>
    <script type="text/javascript" src="themes/theme-admin/js/actions.js"></script>


</head>
<body>
    <?php
    if(!isset($_SESSION)) session_start();
    if (isset($_SESSION['user_id'])){
        ?>

        <div class="page-container">

            <div class="page-sidebar">
                <ul class="x-navigation">
                    <li class="xn-logo">
                        <a href="#"><?=$_SESSION['user_firstName']?> <?=$_SESSION['user_lastName']?></a>
                    </li>
                    <li class="xn-profile">
                        <div class="profile">
                            <div class="profile-image">
                                <img src=<?=$_SESSION['user_photo']?> alt="John Doe"/>
                            </div>
                            <div class="profile-controls">
                                <a href="controller/pageController.php?change=updateUser" class="profile-control-left"><span class="fa fa-cogs"></span></a>
                            </div>
                        </div>                                                                        
                    </li>
                    <li class="xn-title">Navegação</li>
                    <li>
                        <a href="controller/pageController.php?change=index"><span class="fa fa fa-desktop"></span> <span class="xn-text">Inicio</span></a>
                    </li> 
                    <li>
                        <a href="controller/pageController.php?change=myWines"><span class="fa fa-glass"></span> <span class="xn-text">My Wines</span></a>
                    </li>
                    <li>
                        <a href="controller/pageController.php?change=addWine"><span class="fa fa-plus"></span> <span class="xn-text">Cadastrar Vinho</span></a>
                    </li>

                </ul>
            </div>

            <div class="page-content">

                <ul class="x-navigation x-navigation-horizontal x-navigation-panel">
                    <li class="xn-icon-button pull-right">
                        <a href="controller/pageController.php?change=logout"><span class="fa fa-sign-out"></span></a>
                    </li> 
                </ul>                    

                <div class="page-content-wrap">

                    <div class="row">

                        <div class="panel-body">                                    
                            <div class="row stacked">
                                <div class="col-md-12">
                                    <?php
                                }
                                ?>