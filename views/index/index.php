<?php include ('header.php'); ?>



<div class="banner-main">

      <section class="slider">
           <div class="flexslider">
             <ul class="slides">
                   <li>
                   <img style="width: 280px; height: 340px;" src="views/index/wine.png" class="img-responsive" alt="">
                   <h3>Buy your next bottle of wine with the help of 27 Million friends</h3>
                   </li>
          </ul>
        </div>
      </section>
    
</div>
<link rel="stylesheet" href="themes/theme-public/css/flexslider.css" type="text/css" media="screen" />
    <script defer src="themes/theme-public/js/jquery.flexslider.js"></script>
    <script type="text/javascript">
    $(function(){
      SyntaxHighlighter.all();
    });
    $(window).load(function(){
      $('.flexslider').flexslider({
        animation: "slide",
        start: function(slider){
          $('body').removeClass('loading');
        }
      });
    });
  </script>

<?php include ('footer.php'); ?>