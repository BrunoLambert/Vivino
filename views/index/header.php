
<!DOCTYPE HTML>
<html>
<head>
    <title>Vivino Clone</title>
    <link href="themes/theme-public/css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
    <link href="themes/theme-public/css/price-range.css" rel="stylesheet" type="text/css" media="all">
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="themes/theme-publicpublic/js/jquery-1.11.0.min.js"></script>
    <link href="themes/theme-public/css/login.css" rel="stylesheet" type="text/css" media="all">
    <script type="text/javascript" src="themes/theme-public/js/bootstrap.js"></script>
    <!-- Custom Theme files -->
    <link href="themes/theme-public/css/style.css" rel="stylesheet" type="text/css" media="all"/>
    <link rel="stylesheet" href="themes/theme-public/css/flexslider.css" type="text/css" media="screen" />
    <!-- Custom Theme files -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); }
</script>
<meta name="keywords" content="Wines Responsive web template, Bootstrap Web Templates, Flat Web Templates, AndroidCompatible web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<!--Google Fonts-->
<link href="themes/theme-public/css/font-awesome.min.css" rel="stylesheet" type="text/css" media="all" />
<link href='//fonts.googleapis.com/css?family=Roboto:400,700' rel='stylesheet' type='text/css'>
<!--JS for animate-->
<link href="themes/theme-public/css/animate.css" rel="stylesheet" type="text/css" media="all">
<script src="themes/theme-public/js/wow.min.js"></script>
<script>
    new WOW().init();
</script>
<!--//end-animate-->
</head>
<body>
    <!--banner start here-->
    <div class="banner">
      <div class="container">
       <div class="header">

        <div class="logo wow fadeInLeft animated" data-wow-delay=".5s">
            <h1><a href="../Vivino">Vivino</a></h1>
        </div>
        <nav class="navbar navbar-default">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <!--/.navbar-header-->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav animated wow fadeInUp animated animated" data-wow-duration="1200ms" data-wow-delay="500ms">
                    <li>
                        <i class="fa fa-search">
                        </i>
                        <input type="text" name="pesquisar" placeholder="Pesquisar">
                    </li>
                    <?php
                    if(!isset($_SESSION)) session_start();

                    if (isset($_SESSION['user_id'])){
                        ?>
                        <li style="float: right">
                            <a href="controller/pageController.php?change=addWine">
                                <i class="fa">
                                    <?=$_SESSION['user_firstName']?>
                                </i>
                            </a>
                            <a href="controller/pageController.php?change=logout">
                                <i class="fa">Logout</i>
                            </a>
                        </li>
                        <?php
                    }else{
                        ?>
                        <li style="float: right">
                            <a href="controller/pageController.php?change=login">
                                <i class="fa">
                                    Login
                                </i>
                            </a>
                            <a href="controller/pageController.php?change=register">
                                <i class="fa">Cadastro</i>
                            </a>
                        </li>
                        <?php
                    }
                    ?>
                </ul>
            </div>
            <!--/.navbar-collapse-->

            <div class="login-nav" style="float: right;" data-wow-delay=".5s">

            </div>
        </nav>

        <!-- search-scripts -->
        <script src="public/js/classie.js"></script>
        <script src="public/js/uisearch.js"></script>



    </div>
</div>
</div> 