<html>
<head>
<title> loginform</title>
<link rel="stylesheet" type="text/css" href="adminreset.css">
<style>
body{
	position:fixed;
background-color:pink;
}
h1{
	position:relative;
color:white;
left:50px;
font-size:50px;
}	
		</style></head>
		<body><div>
<h1>Reset Password</h1>
<form method="POST" action="">
<h1 class="i"> Your Name</h1>
<input class="i1" type="text" placeholder="name" name="p1" required>
<h1 class="i"> Password</h1>
<input class="i1" type="password" maxlength="8" min="8" placeholder="password" name="p2" required>

<input class="i2" onclick="av();" type="submit" value="ok" name="k">
<script>
	function av()
{
alert('Reset successfully');
}
</script>
<?php
error_reporting(0);
include('conn.php');
session_start();
	if(isset($_POST['k']))
{
$u=$_POST['p1'];
	$p=$_POST['p2'];
	$query="update adminregi set password='$p' where name='$u';";
		$result=mysqli_query($conn,$query);
    $data=mysqli_num_rows($result);
	if(!$data==1)
	{
	echo"login successfully";
	header('location:adminlogin.php');
	}
	else
	{
	echo"you have entered incorrect password";
 
}	 }
	
	?>
	</body>
</form>
</div>
<html>