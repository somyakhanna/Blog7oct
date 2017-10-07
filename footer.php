<script> // When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        document.getElementById("myBtn").style.display = "block";
    } else {
        document.getElementById("myBtn").style.display = "none";
    }
}

function topFunction() {
    document.body.scrollTop = 0; // For Chrome, Safari and Opera
    document.documentElement.scrollTop = 0; // For IE and Firefox
}

</script>
<!--Footer-->
<section>



    <!--===| Take A Look Start ===|-->
    <section class="footer">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xs-12">
                    <div id="footer">

                        <!-- Navigation -->
                        <nav class="navbar navbar links footer-nav" role="navigation">
                            <div class="container-fluid">
                               

                                <ul id ="footerlist" class="nav navbar-nav">



                                    <li class="foo-text"><a href="about.php">About Us</a></li>
 <li class="foo-text"><a href="contact.php">Contact Us</a></li>




                                    <li class="foo-text"><a href="advertise.php">Advertise </a></li>


                                    <li class="foo-text"><a href="privacy.php">Privacy</a></li>


                                    <li class="foo-text"><a href="terms.php">Terms of services</a></li>


 <li class="foo-text"><a href="https://www.instagram.com/poadelhi/" target="_blank"><i class="fa fa-instagram fa-lg"></i></a>
                                    </li>
                                    <li class="foo-text"><a href="https://twitter.com/poadelhi" target="_blank"><i class="fa fa-twitter fa-lg"></i></a></li>
                                    <li class="foo-text"><a href="https://www.facebook.com/poadelhi/" target="_blank"><i class="fa fa-facebook fa-lg"></i></a></li>
                                    <li class="foo-text"><a href="https://plus.google.com/113362088761384980092"><i class="fa fa-google fa-lg" target="_blank"></i></a></li>
                                    <li class="foo-text"><a href="https://in.pinterest.com/poadelhi/?eq=poa.&etslf=5974"><i class="fa fa-pinterest fa-lg" target="_blank"></i></a></li>




                                </ul>

                                <ul class="nav navbar-nav navbar-right">



                                    <li class="foo-text"><a>Copyright 2017 PlanMakers</a></li>
                                    <li><button onclick="topFunction()" id="myBtn" title="Go to top"><i class="fa fa-angle-up fa-lg"></i></button> </li>


                            </div>

                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>

</section>
<?php mysqli_close($connect); ?>