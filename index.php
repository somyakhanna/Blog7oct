<?php
include("connections/connections.php");
$resultx="";
    $query="SELECT * FROM posts ORDER BY id DESC LIMIT 12";
$resultx=mysqli_query($connect,$query);
?>
<!DOCTYPE html>


<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Plan of Action</title>

    <!-- Bootstrap Core CSS -->

   
 


   
  <link rel="stylesheet" type="text/css" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
 <link rel="stylesheet" type="text/css"href="css/blog.css">
    
 
</head>

<body>
   <?php include("menu.php");?>
<?php include("menu2.php");?>    
   
  
   
 <?php include ("mainbanner.html"); ?>
  
<div class="container" id="content">

        <br>
        <h2>
            Latest Stories
        </h2>
        <br>
        
        <?php 
             while ($row = mysqli_fetch_assoc($resultx)){
          ?>
        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 try ">
            <div class='pro_part '>
            <?php if(isset($row['recimg'])){
     if ($row['recimg'] == "no") {
                        $img = "img/poa.jpg";
                    } else {
                        $img = "img/" . $row['recimg'];
                    }
            }
                    ?>
                             
    <div onclick="location.href='post.php?pid=<?php echo $row['id'];?>'" class='h1'  style='background-image: url(img/<?php echo $row['recimg'];?>);
         '>
<div class='h2'>
          <div class='fl'><span><a href="category.php?cat=<?php echo str_replace(" & ", "_and_",$row['category']);?>"><?php echo $row['category'];?></a></span></div><br>
          <div class='f2'><span><a href="post.php?pid=<?php echo $row['id'];?>"><?php echo $row['title'];?></a></span></div><br>
          <div class='f3'><span><a href="blogger.php?blogger=<?php echo $row['author'];?>"><?php echo $row['author'];?></a></span></div>
      </div>
     
        <div class='clear'></div>
 
         </div>
                </div>
               
    </div>
        

            <?php  } ?>
        <br>
        
        <div class="row load">
            <div class="col-xs-12 col-sm-12 col-lg-4 col-md-4 col-lg-offset-4 col-md-offset-4"> 

            <a href="allpost.php" name="count" class="btn btn-lg btn-alert">LOAD MORE</a>



</div>
        </div>
        
      <section id="con">
            <div class="container"  >
                <div class="row " >
                    
  <?php include("genre.php");?>          
                   
                       
 <?php include("sidebar.php");?>          
                </div>
                
                
            </div>
                </section>

            
        <hr>
<?php include("sliderimg.php"); ?>    

        </div>   
  
    <?php include("footer.php");?>
</div>
  <!--<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>-->
</body>
</html>
