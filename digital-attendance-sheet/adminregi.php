<html>
<head><title>Registration</title>
<style>
body{
	
	background:linear-gradient(magenta,magenta);
	border-radius:50px;
	overflow-x:hidden;
	overflow-y:hidden;
}
img{
position:relative;
left:430px;
top:5px;
border-radius:50px;
height:1000px;
width:1000px;

}
.d{
	border:1px solid white;
	position:relative;
	height:640px;
	width:620px;
	color:rgba(0,0,0,0.94);
	left:350px;
	top:0px;
	border-radius:5px;
	background:linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)),url('children.jpg');
background-size:cover;
		box-shadow:0px 0px 120px 0px  blue;
}
.d:hover{
	box-shadow:0px 0px 120px 0px  black;
}
.n{
	

	font-size:45px;
	position:relative;
	left:130px;
	top:-10px;
	color:white;
}
.t{
	position:relative;
	font-size:25px;
	left:65px;
	color:white;
	top:10px;
}
.t1{
	position:relative;
	font-size:25px;
left:65px;
color:white;
top:10px;
}
.t2{
	position:relative;
	font-size:25px;
	left:65px;
	color:white;
	top:10px;
}
.t3{
	position:relative;
	font-size:25px;
	left:65px;
	color:white;
	top:10px;
}
.t4{
	position:relative;
	font-size:25px;
	left:65px;
color:white;
top:10px;
}
.i{
	position:relative;
	top:-30px;
	height:40px;
	width:220px;
	left:320px;
	border-radius:10px;
	font-size:25px;
	}
.i:hover{
	background-color:black;
	color:white;
	box-shadow:0px 0px 40px 0px white;
}
.i1{
	position:relative;
	top:33px;
	height:40px;
	width:120px;
	border-radius:10px;
	font-size:20px;
	left:35px;

}
.i1:hover{
background-color:black;
	color:white;
	box-shadow:0px 0px 40px 0px white;
}	
	
</style></head>
<body>
<form method="POST">
<div class="d">
<h1 class="n">Admin Registration</h1>
<h1 class="t"> YOUR NAME:</h1>
<input  class="i" type="text" placeholder="name" name="n1" required>
<h1 class="t1"> MOBILE NO:</h1>
<input class="i" type="tel" maxlength="10" min="10" placeholder="mobile no" name="n2" required>
<h1 class="t2"> ADDRESS:</h1>
<input class="i" type="text" placeholder="address" name="n3" required>
<h1 class="t3"> E-MAIL:</h1>
<input  class="i" type="email" placeholder="e-mail" name="n4" required>
<h1 class="t4"> PASSWORD:</h1>
<input class="i" type="password" maxlength="8" min="8" placeholder="password" name="n5" required>
<input class="i1" type="submit" onclick="nan()" value="submit" name="ragi">
<script>
function nan()
{
alert('Registration:Successfully');
}
</script>
</form>
</body>
</html>
<?php
error_reporting(0);
session_start();
include("conn.php");
if(isset($_POST['ragi']))
{
$r1=$_POST['n1'];
$r2=$_POST['n2'];
$r3=$_POST['n3'];
$r4=$_POST['n4'];
$r5=$_POST['n5'];
if(empty($r1) or empty($r2) or empty($r3) or empty($r4) or empty($r5))
{
	echo"<h3 style='color:white'> styleplz data required data with correct manner </h3>";
}
else
{
	if($r5)
	{
		$q="select *from adminregi;";
		$q1=mysqli_query($conn,$q);
		$d=mysqli_num_rows($q1);
		if($d>=1)
		{
			echo"<h3 style='color:white'> Admin Already Register</h3>";
		}
		else
		{
			$query="insert into adminregi values('$r1','$r2','$r3','$r4','$r5');";
$data=mysqli_query($conn,$query);
if($data)

{
 header('location:adminlogin.php');
 	echo"<h3 style='color:white'>successfully</h3>";
 
}
	}
	}
else
{
	echo"<h3='color:white'>plz do not insert duplicate entry</h3>";
}
}
}
?>