<?php
session_start();
if(!isset($_SESSION['user'])){
	header('location:adminlogin.php');
}

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="style1.css">
	<?php  include 'links.php' ?> 
</head>
<body>

<div class="container center-div shadow">
		<div class="heading text-center text-uppercase text-white mb-5"> Hello in your admin session <a href="content/index.html">
			<?php echo $_SESSION['user']?>Technical session :) </div>
		<a href="logout.php" class="btn btn-danger">  Logout</a>
</div>



</body>
</html>
