<?php

include("connections/connections.php");
$result1="";
$query1="SELECT * FROM categories";
 $result1 = mysqli_query($connect,$query1);

?>

<html>
<head>
  <!-- Font Awesome 4.3.0 -->
  <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css" media="screen">

  <!-- Flat Icon -->
  <link rel="stylesheet" type="text/css" href="css/flaticon.css" media="screen">

  <!-- OWL CAROUSEL   -->
   <link rel="stylesheet" type="text/css" href="css/owl.carousel.min.css" media="screen">

  <!-- SLIDER REVOLUTION 4.x CSS SETTINGS -->
  <link rel="stylesheet" type="text/css" href="vendor/rs-plugin/css/settings.css" media="screen">

  <!-- Animate css -->
  <link rel="stylesheet" type="text/css" href="css/animate.min.css" media="screen">  

  <!-- Normalize CSS -->
  <link rel="stylesheet" type="text/css" href="css/normalize.min.css" media="screen">
  
  <!-- Bootstrap 3.3.4 -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" media="screen">

  <!-- Fancy Box CSS-->
  <link rel="stylesheet" type="text/css" href="vendor/fancybox/jquery.fancybox.min.css" media="screen">

  <!-- jQuery UI -->
  <link rel="stylesheet" type="text/css" href="css/jquery-ui.min.css" media="screen">

  <!-- Offcanvas -->
  <link rel="stylesheet" type="text/css" href="css/offcanvas.css" media="screen">

  <!-- Custom Style css -->
  <link rel="stylesheet" type="text/css" href="css/main.css" media="screen">

  <!-- Responsive -->
  <link rel="stylesheet" type="text/css" href="css/responsive.css" media="screen">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <!--[if lt IE 9]>
      <script type="text/javascript" src="js/ie.js"></script>
      <script type="text/javascript" src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->

  
</head>

<body onload="initialize()">



 
<!--===| Header Top Start |===-->
  <div id="offcanvas-container" class="wrapper offcanvas-container">
    <div class="inner-wrapper offcanvas-pusher">
    <div class="header-top ">
          <div class="container">
            <div class="row ">
               
            <div class="col-xs-12 hidden-xs col-sm-5">
                <!-- Top right side content -->
                <ul class="fa-ul list-inline top-info level-one">
                    <li>
                                        <div class="hidden-xs">
              <div class="l1">
                <a title="Plan of action" href="index.php">
               <img id="logo1" src="img/logo.png" alt="Logo">
                </a>
              </div>
                                             
                </div>
                    </li>
                  
                  </ul>
            </div>
            <!-- Top right side content -->
            <div class="col-xs-12 hidden-xs col-sm-7" >  
                <ul class=" pull-right">
                       
                           <form class="navbar-form navbar-right" id="searchform" action="search.php" method="get" role="search">
        <div class="form-group">
            
            <input type="text" id="searchtext" name="query" class="form-control" placeholder="Search Here" >
               
        </div>
                 </form>


				</ul>
            </div>
          </div>
          </div>
        </div>
        <!--===| Header Top End |===-->
      
        <header class="header-wrapper">
          <div class="container hidden-xs">
          <div class="row">
            <div class="col-xs-12">
             <!-- <div class="logo">
                <a title="UrbanGrill" href="index.html">
               <!--<img id="logo" src="img/logo.png" alt="Logo">
                </a>
              </div>--><!-- /Logo -->
              <!-- =========================================
              Menu
              ========================================== -->
              <div class="navbar navbar-default mainnav">
                 <div class="hidden-sm hidden-md hidden-lg col-xs-12">
              <div class="logo">
                <a title="UrbanGrill" href="index.php">
               <img id="logo" src="img/logo.png" alt="Logo">
                </a>
              </div>
                </div>
                  <div class="navbar-header navbar-left pull-right">
                    
                  <div id="offcanvas-trigger-effects" class="column">
                    <button type="button" class="navbar-toggle hidden-sm hidden-xs" data-toggle="offcanvas" data-target=".navbar-collapse" data-placement="right" data-effect="offcanvas-effect"> <i class="fa fa-bars"></i>
                    </button>
                  </div><!-- offcanvas-trigger-effects -->
                </div><!-- .navbar-header -->
                
                <div class="collapse navbar-collapse">
                  <ul class="nav navbar-nav navbar-left">
                 
<?php  while ($row = mysqli_fetch_assoc($result1)) {
?>
                            <li><a href="category.php?cat=<?php echo(str_replace(" & ","_and_",$row['catname']));?>"><?php echo(str_replace("_and_", " & ",$row['catname'])); ?></a></li>
<?php }?>

                           
                            
                         
							  
							</ul>
							
                          
                       
					
                  <!-- .navbar-nav -->
                </div><!-- .navbar-collapse -->
              </div><!-- .navbar -->
            </div><!-- .col-xs-12 -->
          </div><!-- .row -->
          </div> <!-- .container -->
        </header><!-- /header-wrapper -->      
 <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
        

  <!--  JAVASCRIPT -->
  <script type="text/javascript" src="js/jquery.min.js"></script> 

  <!-- Modernizr JS --> 
  <script type="text/javascript" src="js/modernizr-2.6.2.min.js"></script>

 

  <!-- Animate js -->
  <script type="text/javascript" src="js/wow.min.js"></script>

  <!-- SLIDER REVOLUTION 4.x SCRIPTS  -->
  <script type="text/javascript" src="vendor/rs-plugin/js/jquery.themepunch.tools.min.js"></script>
  <script type="text/javascript" src="vendor/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>

  <!-- Fancy Box JS -->
  <script type="text/javascript" src="vendor/fancybox/jquery.fancybox.min.js"></script>
  
  <!-- OWL CAROUSEL   -->
  <script type="text/javascript" src="js/owl.carousel.min.js"></script> 

  <!-- Offcanvas -->
  <script type="text/javascript" src="js/sidebarEffects.js"></script>
  <script type="text/javascript" src="js/classie.js"></script> 

  <!-- jQuery UI -->
  <script type="text/javascript" src="js/jquery-ui.min.js"></script>

  <!-- Validation -->
  <script type="text/javascript" src="js/validation.js"></script>

  

 
  
  <!-- Css Preseter -->
  <script type="text/javascript" src="js/preset.js"></script>
  
  <!-- Custom script --> 
  <script type="text/javascript" src="js/custom.js"></script>


       </html> 
    
   