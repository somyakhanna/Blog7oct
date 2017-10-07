<?php 

include("connections/connections.php");
if(isset($_GET['pid'])){
 $postid=$_GET['pid'];

$query="SELECT * FROM posts WHERE id='$postid'";
}

$result3=mysqli_query($connect,$query);
//echo $result1;
        $row3 = mysqli_fetch_assoc($result3);

        if(isset($row3['imgname'])){
                if($row3['imgname']=="no"){
        $img="img/poa.jpg";}
                else{
                $img ="img/".$row3['imgname'];
        }}
        ?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    
   <meta property="og:url"                content="http://planofaction.in/post.php?pid=<?php echo $row3['id'];?>" />
<meta property="og:type"               content="article" />
<meta property="og:title"              content="<?php echo $row3['title'];?>" />
<meta property="og:description"        content="<?php echo "";?>" />
<meta property="og:image"              content="<?php echo "http://planofaction.in/img/".$row3['imgname'];?>" />
    <meta property="fb:app_id" content="1832248837104350" />
<title>Plan of Action</title>

     <link href='http://fonts.googleapis.com/css?family=Roboto:400,400italic,300italic,300,100italic,100,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
  <link href='http://fonts.googleapis.com/css?family=Playball' rel='stylesheet' type='text/css'>
  <link href='http://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic' rel='stylesheet' type='text/css'>
 
    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" type="text/css" href="css/main.css" media="screen">
<link href="css/blog.css" rel="stylesheet" media="screen">
<!-- Responsive -->
  <link rel="stylesheet" type="text/css" href="css/responsive.css" media="screen">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
    <style>
        @import url(http://weloveiconfonts.com/api/?family=entypo);

/* entypo */
[class*="entypo-"]:before {
   font-family: "entypo", sans-serif;
}
a { 
   text-decoration: none;
}

.container {
   margin: 0 auto;
  
   
}
#sticky-social {
   left: 0;
   position: fixed;
   top: 150px;
   display: none;
}
#sticky-social a {
   background: #333;
   color: #fff;
   display: block;
   height: 35px;
   font: 16px "Open Sans", sans-serif;
   line-height: 35px;
   position: relative;
   text-align: center;
   width: 35px;
}
#sticky-social a span {
   line-height: 35px;
   left: -120px;
   position: absolute;
   text-align:center;
   width:120px;
}
#sticky-social a:hover span {
   left: 100%;
}
#sticky-social a[class*="facebook"],
#sticky-social a[class*="facebook"]:hover,
#sticky-social a[class*="facebook"] span { background: #3b5998; }

#sticky-social a[class*="twitter"],
#sticky-social a[class*="twitter"]:hover,
#sticky-social a[class*="twitter"] span { background: #00aced; }

#sticky-social a[class*="gplus"],
#sticky-social a[class*="gplus"]:hover,
#sticky-social a[class*="gplus"] span { background: #dd4b39; }  

#sticky-social a[class*="linkedin"],
#sticky-social a[class*="linkedin"]:hover,
#sticky-social a[class*="linkedin"] span { background: #007bb6; }  

#sticky-social a[class*="instagrem"],
#sticky-social a[class*="instagrem"]:hover,
#sticky-social a[class*="instagrem"] span { background: #517fa4; }  

#sticky-social a[class*="stumbleupon"],
#sticky-social a[class*="stumbleupon"]:hover,
#sticky-social a[class*="stumbleupon"] span { background: #eb4924; }  

#sticky-social a[class*="pinterest"],
#sticky-social a[class*="pinterest"]:hover,
#sticky-social a[class*="pinterest"] span { background: #cc2127; }  

#sticky-social a[class*="flickr"],
#sticky-social a[class*="flickr"]:hover,
#sticky-social a[class*="flickr"] span { background: #ff0084; }  

#sticky-social a[class*="tumblr"],
#sticky-social a[class*="tumblr"]:hover,
#sticky-social a[class*="tumblr"] span { background: #32506d; }
    </style>

</head>

<body>

<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v2.10&appId=1832248837104350";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
    
       <?php include("menu.php");?>
<?php include("menu2.php");?> 
    <!-- Navigation -->
    <!-- Page Header -->
     <?php 
         
         
//$query="SELECT * FROM posts WHERE category='$category'";

$result1=mysqli_query($connect,$query);
//echo $result1;
        while ($row = mysqli_fetch_assoc($result1)){


          ?>
    <div class="container">
    <?php if(isset($row['imgname'])){
                if($row['imgname']=="no")
                    $img="img/poa.jpg";
                else
                $img ="img/".$row['imgname'];
            ?>
        
        <div id="postbackground" style='background-image: url("<?php echo $img;?>")'>
        <?php } }?>
        <br>
        <br>
        <div class="container post-post">
            <div class="row">
                <div class="col-xs-11 col-lg-9 col-md-9 col-sm-8">
                    <?php 
         
         
//$query="SELECT * FROM posts WHERE category='$category'";

$result1=mysqli_query($connect,$query);

//echo $result1;
        while ($row = mysqli_fetch_assoc($result1)){


$authorname=$row['author'];


$query1="SELECT * FROM bloggers WHERE name='$authorname'";

$result1=mysqli_query($connect,$query1);


          ?>
                    
                    <a href="#" id="post-heading"><?php echo $row['title'];?></a>
                   


            </div>      
        </div>
    </div>
    </div>
    </div>
      
      <div class="container" id="maincon">
    <div class="blog">
               
            <div class="row">
                
               <div class="author-info">
                   <div class="author-image pull-left">
                       <a href="blogger.php?blogger=<?php echo $row['author'];?>">
                       <?php while ($row23 = mysqli_fetch_assoc($result1)){?>
                           <img alt="<?php echo $row['author'];?>" src="img/<?php echo $row23['image'];?>" class="img-circle" ></a></div>
                           <?php }?>
                           <div class="pull-left" >
                               <span class="author-name text-uppercase" >
                                   <a href="blogger.php?blogger=<?php echo $row['author'];?>" >
                                       <span><?php echo $row['author'];?></span></a>
                                   &nbsp;<label class="piping" >&nbsp;|</label>
                               </span>
                               <span class="published-time publish-time text-capitalize" >
                                   <time > <?php echo $row['date'];?></time></span>
                           </div>
                   <div class="clearfix" >
                       
                   </div></div> 
               
            </div>
            <div class="row">

        </div>
            
       
              <div class="row" id="buttonslaptop">
                                               

    <!-- Facebook -->
   
    <div class="col-xs-12 col-lg-1 col-md-1 col-sm-1">
   <a class="fb-xfbml-parse-ignore" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2Fplanofaction.in/post.php%3Fpid=<?php echo $row['id'];?>&amp;src=sdkpreparse">
                
             <button  type="button" data-href="http://planofaction.in/post.php?pid=<?php echo $row['id'];?>" class="btn btn-facebook btn-lg"><i class="fa fa-facebook fa-2"> </i></button></a><!-- Twitter -->
        </div>
      
    <div class="col-xs-12 col-lg-1 col-md-1 col-sm-1">
    <a href="https://twitter.com/share?url=http://planofaction.in/post.php?pid=<?php echo $row['id'];?>&amp;text=Plan%20OF%20Action&amp;hashtags=poa" target="_blank" onclick="window.open(this.href,'targetWindow','toolbar=no,location=0,status=no,menubar=no,scrollbars=yes,resizable=yes,width=600,height=230'); return false"><button type="button" class="btn btn-twitter btn-lg"><i class="fa fa-twitter fa-2"></i></button></a><!-- Twitter -->
    </div>
   
    <div class="col-xs-12 col-lg-1 col-md-1 col-sm-1">
    <a href="http://pinterest.com/pin/create/button/?url=/node/[nid]&description=[title]" target="_blank" onclick="window.open(this.href,'targetWindow','toolbar=no,location=0,status=no,menubar=no,scrollbars=yes,resizable=yes,width=600,height=230'); return false"><button  type="button" class="btn btn-pinterest btn-lg"><i class="fa fa-pinterest fa-2"> </i></button></a><!-- Twitter -->
    </div>





    
    </div>
        <br>
         <div class="row" id="buttonsmobile">
                                                 

    <!-- Facebook -->
   
    <div class="col-xs-2 col-lg-2 col-md-2 col-sm-2">
        
        <a class="fb-xfbml-parse-ignore" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2Fplanofaction.in/post.php%3Fpid=<?php echo $row['id'];?>&amp;src=sdkpreparse">
       
           <button  type="button" data-href="http://planofaction.in/post.php?pid=<?php echo $row['id'];?>" class="btn btn-facebook btn-lg"><i class="fa fa-facebook fa-2"> </i></button></a><!-- Twitter -->
            
       </div>
      
    <div class="col-xs-2 col-lg-2 col-md-2 col-sm-2">
    <a href="https://twitter.com/share?url=https//planofaction.in/post.php?pid=<?php echo $row['id'];?>&amp;text=Plan%20OF%20Action&amp;hashtags=poa" target="_blank" onclick="window.open(this.href,'targetWindow','toolbar=no,location=0,status=no,menubar=no,scrollbars=yes,resizable=yes,width=600,height=230'); return false"><button type="button" class="btn btn-twitter btn-lg"><i class="fa fa-twitter fa-2"> </i></button></a><!-- Twitter -->
    </div>
   
    <div class="col-xs-2 col-lg-2 col-md-2 col-sm-2">
    <a href="http://pinterest.com/pin/create/button/?url=/node/[nid]&description=[title]" target="_blank" onclick="window.open(this.href,'targetWindow','toolbar=no,location=0,status=no,menubar=no,scrollbars=yes,resizable=yes,width=600,height=230'); return false"><button  type="button" class="btn btn-pinterest btn-lg"><i class="fa fa-pinterest fa-2"> </i></button></a><!-- Twitter -->
    </div>
    </div>

        <aside id="sticky-social">
    <ul>
        <li><a class="entypo-facebook fb-xfbml-parse-ignore" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2Fplanofaction.in/post.php%3Fpid=<?php echo $row['id'];?>&amp;src=sdkpreparse">
       <span>Facebook</span></a></li>
        <li><a href="https://twitter.com/share?url=https//planofaction.in/post.php?pid=<?php echo $row['id'];?>&amp;text=Plan%20OF%20Action&amp;hashtags=poa" target="_blank" onclick="window.open(this.href,'targetWindow','toolbar=no,location=0,status=no,menubar=no,scrollbars=yes,resizable=yes,width=600,height=230'); return false" class="entypo-twitter" target="_blank"><span>Twitter</span></a></li>
        <li><a href="http://pinterest.com/pin/create/button/?url=/node/[nid]&description=[title]" target="_blank" onclick="window.open(this.href,'targetWindow','toolbar=no,location=0,status=no,menubar=no,scrollbars=yes,resizable=yes,width=600,height=230'); return false" class="entypo-pinterest" ><span>Pinterest</span></a></li>
         </ul>
</aside>
<?php }?>         

               <?php 
         
         
//$query="SELECT * FROM posts WHERE category='$category'";

$result1=mysqli_query($connect,$query);
//echo $result1;
        while ($row = mysqli_fetch_assoc($result1)){


          ?>
        <br>    <div class="container col-xs-12 col-lg-9  col-md-8 col-sm-8 " id="blog_text" >
           
<?php echo $row['body'];?>

<div class="fb-comments" data-href="http://localhost/FinalBlog/post.php?pid=<?php echo $row['id'];?>" data-width="100%" data-numposts="10"></div>

   
<?php }?>
        </div>
        
        <div id="right-wrapper"  class="col-xs-12 col-sm-3 col-lg-3 col-md-3">

                <!-- Posts List -->
                <section id="right" class="row">
                    <div>
                        
                        <ul class="posts col-xs-12 col-sm-12 col-lg-12 col-md-12">

                            <div class="row"><h2 id="heading">Recommended Posts</h2></div>
                            
                            <br>
           
                            <?php 
                            $p=1;

$query="SELECT * FROM posts Where id NOT IN($postid) ORDER BY RAND() LIMIT 4";
$result=mysqli_query($connect,$query);
                            while ($row = mysqli_fetch_assoc($result)){
                            ?>
                                <li style='padding:5px;'>
                                        <article>
                                            <header>
                                                <center>
                                               <h3><a href='post.php?pid=<?php echo $row['id'];?>' id='genre'><?php echo $row['title'];?></a></h3>
                                               <a href="blogger.php?blogger=<?php echo $row['author'];?>"><p><?php echo $row['author'];?></p></a>
                                                </center>                                    
                                                                                           </header>
                                            
                                            <a href='post.php?pid=<?php echo $row['id'];?>' class='image img-responsive'><img src='<?php echo"img/".$row['recimg'];?>' alt='' /></a>
                                        </article>
                                    </li>
                              <?php 
                            }
                        ?>

                        </ul>
                         
        
                    </div>
                </section>


            </div>
               </div>
           

      </div>
    
    <br>
   
    
    
             
    
    <br>
         
   
    <?php include("footer.php");?>
    
    
    <!-- Bootstrap core JavaScript -->

    
    <script src="vendor/tether/tether.min.js"></script>
    

    <!-- Custom scripts for this template -->
    <script src="js/clean-blog.min.js"></script>
    <script src="js/script.js"></script>
</body>

</html>