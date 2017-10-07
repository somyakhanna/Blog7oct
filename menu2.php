<?php

include("connections/connections.php");
$result1="";
$query1="SELECT * FROM categories";
 $result1 = mysqli_query($connect,$query1);

?>

<html>
<head>
    <style>
     
        </style>
        
         <script>
        $(document).ready(function(){
	$('a[href="#search"]').on('click', function(event) {                    
		$('#search').addClass('open');
		$('#search > form > input[type="search"]').focus();
	});            
	$('#search, #search button.close').on('click keyup', function(event) {
		if (event.target == this || event.target.className == 'close' || event.keyCode == 27) {
			$(this).removeClass('open');
		}
	});            
});

        </script>
               
</head>

<body style="overflow-x:hidden">
    
        <div id="header_menu ">
            <!--Navigation -->
            <nav class="navbar navbar-fixed-top links my-navbar hidden-lg hidden-md hidden-sm " style="background-color: white"
                 role="navigation">
                <div class="container">
                    <!-- Brandand toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle pull-right" id="tgbtn" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar" ></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                        <a class="navbar-left" href="index.php" id="logo" style="float:left"><img src="img/logo.png" alt="" class="img-responsive"></a>
                    </div>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav navbar-right">
<?php  while ($row = mysqli_fetch_assoc($result1)) {
?>
                            <li class="resp-text"><a href="category.php?cat=<?php echo(str_replace(" & ","_and_",$row['catname']));?>"><?php echo(str_replace("_and_", " & ",$row['catname'])); ?></a></li>
<?php }?>

                           
                            <li class="resp-text">
                               <a href="#search">
  <i class="fa fa-search fa-lg"></i>Search
</a>
               
<!-- Search Form -->
<div id="search" class="col-xs-12 col-lg-12 col-md-12 col-sm-12"> 
	<span class="close">X</span>
        <form role="search" id="searchform" action="search.php" method="get">
		<input value="" name="query" type="search" placeholder="Type to search"/>
	</form>
</div>

                                            
                                  
                            </li>
                           

                                                    </ul>
                    </div>
                </div>
            </nav>
            
            <!-- /.navbar-collapse -->
        </div>
    
        <!-- /.container -->
        
   

        <script src="js/popup.js"></script>
    </html> 
    
   