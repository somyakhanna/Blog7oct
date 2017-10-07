
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Login</title>
    <link rel="stylesheet" type="text/css" href="css/stylelogin.css" media="screen" />
</head>
<body>
<div class="container">
	<section id="content">
		<form action="index.php" method="post">
			<h1>Admin Login</h1>
			<div>
				<input type="text" placeholder="Username" required="" name="username"/>
			</div>
			<div>
				<input type="password" placeholder="Password" required="" name="password"/>
			</div>
			<div>
				<input type="submit" value="Log in" name="submit" />
			</div>
		</form><!-- form -->
		
	</section><!-- content -->
</div><!-- container -->
</body>
</html>
    <?php 

session_start();

include('../connections/connections.php');

if (isset($_POST['submit'])) {
	# code...
	

$name=$_POST['username'];

$password=$_POST['password'];


$error="";


if(empty($name)||empty($password)){

	$error="Enter Complete details";
}


	$sql="SELECT * FROM admin where username='$name' and password='$password'";

$result=mysqli_query($connect,$sql);
if(mysqli_num_rows($result)>0) {
	
	   header("location: main.php");
		}
			
		else {
			echo"Email or password is not correct";
			}
}
?>
