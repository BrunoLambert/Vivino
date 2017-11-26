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

    <!-- START PAGE CONTAINER -->
        <div class="page-container">
            
            <!-- START PAGE SIDEBAR -->
            <div class="page-sidebar">
                <!-- START X-NAVIGATION -->
                <ul class="x-navigation">
                    <li class="xn-logo">
                        <a href="#">Perfil</a>
                        <a href="#" class="x-navigation-control"></a>
                    </li>
                    <li class="xn-profile">
                        <a href="#" class="profile-mini">
                            <img src="" alt="John Doe"/>
                        </a>
                        <div class="profile">
                            <div class="profile-image">
                                <img src=<?=$_SESSION['user_photo']?> alt="John Doe"/>
                            </div>
                            <div class="profile-data">
                                <div class="profile-data-name"><?=$_SESSION['user_firstName']?> <?=$_SESSION['user_lastName']?></div><!-- criar cadastro de usuario-->
                                <div class="profile-data-title"></div>
                            </div>
                            <div class="profile-controls">
                                <a href="#" class="profile-control-left"><span class="fa fa-cogs"></span></a>
                            </div>
                        </div>                                                                        
                    </li>
                    <li class="xn-title">Navegação</li>
                    <li>
                        <a href="controller/pageController.php?change=index"><span class="fa fa fa-desktop"></span> <span class="xn-text">Inicio</span></a>
                    </li> 
                    <li>
                        <a href="controller/pageController.php?change=myWines"><span class="fa fa-drink"></span> <span class="xn-text">My Wines</span></a>
                    </li>
                    
                </ul>
                <!-- END X-NAVIGATION -->
            </div>
            <!-- END PAGE SIDEBAR -->
            
            <!-- PAGE CONTENT -->
            <div class="page-content">
                
                <!-- START X-NAVIGATION VERTICAL -->
                <ul class="x-navigation x-navigation-horizontal x-navigation-panel">
                    <!-- TOGGLE NAVIGATION -->
                    <li class="xn-icon-button">
                        <a href="#" class="x-navigation-minimize"><span class="fa fa-dedent"></span></a>
                    </li>
                    <!-- END SEARCH -->
                    <!-- SIGN OUT -->
                    <li class="xn-icon-button pull-right">
                        <a href="#"><span class="fa fa-sign-out"></span></a>                        
                    </li> 
                    <!-- END SIGN OUT -->
                    <!-- SALDO -->
                    <li class="pull-right">
                        <a href="#">
                            <strong style=""></strong>
                            
                            <strong><strong>
                        </a>         
                    </li>
                    <!-- END SALDO -->
                </ul>
                <!-- END X-NAVIGATION VERTICAL -->                     
              
                
                <!-- PAGE CONTENT WRAPPER -->
                <div class="page-content-wrap">
                    
                    <div class="row">
                        <div class="col-md-12">
                            
                            <!-- START SALES BLOCK -->
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <div class="panel-title-box">
                                        <h3></h3>
                                    </div>                                     
                                    <ul class="panel-controls panel-controls-title">                                        
                                        <li>
                                            <div id="reportrange" class="dtrange">                                            
                                                <span></span><b class="caret"></b>
                                            </div>                                     
                                        </li>                                
                                        <li><a href="#" class="panel-fullscreen rounded"><span class="fa fa-expand"></span></a></li>
                                    </ul>                                    
                                    
                                </div>
                                <div class="panel-body">                                    
                                    <div class="row stacked">
                                        <div class="col-md-12">