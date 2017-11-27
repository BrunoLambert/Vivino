<?php
    if(basename($_SERVER["PHP_SELF"])=='footer.php'){
    die("<script>window.location=('../../controller/pageController.php?change=index')</script>");
}
?>
<div class="footer">
        <div class="container">
            <div class="footer-grids">
                <div class="col-md-3 footer-grid wow fadeInLeft animated" data-wow-delay=".5s">
                    <h3>Extras</h3>
                    <p>Ut rutrum neque a mollis laoreet diam enim feuiat dui nec ulacoper quam felis id diam. Nunc ut tortor ligula eu petiu Pelleesque .</p>
                </div>
                <div class="col-md-3 footer-grid animated wow fadeInUp animated animated" data-wow-duration="1200ms" data-wow-delay="500ms">
                    <h3>Useful Info</h3>
                    <ul>
                        <li><a href="singlepage.html">Hendrerit quam</a></li>
                        <li><a href="singlepage.html">Amet consectetur </a></li>
                        <li><a href="singlepage.html">Iquam hendrerit</a></li>
                        <li><a href="singlepage.html">Hendrerit quam</a></li>
                        <li><a href="singlepage.html">Amet consectetur </a></li>
                    </ul>
                </div>
                <div class="col-md-3 footer-grid animated wow fadeInUp animated animated" data-wow-duration="1200ms" data-wow-delay="500ms">
                    <h3>Social</h3>
                    <ul class="social-icons1">
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                    </ul>
                </div>
                <div class="col-md-3 footer-grid wow fadeInRight animated" data-wow-delay=".5s">
                    <h3>Contact Us</h3>
                    <p>Pelleesque conquat dignissim lacus quis altrcies.</p>
                    <div class="footer-grid-address">
                        <p>Tel.800-255-9999</p>
                        <p>Fax: 1234 568</p>
                        <p>Email: <a class="email-link" href="mailto:info@example.com">Example.com</a></p>
                    </div>
                </div>
                <div class="clearfix"> </div>
            </div>
            <div class="copy-right animated wow fadeInUp animated animated" data-wow-duration="1200ms" data-wow-delay="500ms">
                <p>© 2016 Wines. All rights reserved | Design by <a href="http://w3layouts.com">W3layouts</a></p>
            </div>
        </div>
    </div>
<!--footer-->
</body>
</html>