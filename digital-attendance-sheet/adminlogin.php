<html>
<head>
<title> loginform</title>
<style>
body{
	position:fixed;
background-size:cover;
background-color:black;
}
h6{
	position:relative;
	color:white;
	font-size:15px;
	left:300px;
	top:30px;
	
}
a{
		color:white;
		text-decoration:none;}
h5{
	position:relative;
	color:white;
	font-size:18px;
	left:20px;
	top:90px;
	
}
 a{
		color:white;
		text-decoration:none;
}

div{

	
	
	border:2px solid black;
	border-radius:10px;
	position:relative;
	left:450px;
	top:70px;
background-size:cover;
	
		background:linear-gradient(rgba(0,0,0,0.6),rgba(0,0,0,0.6)),url('welcome1.jpg');
	height:520px;
	width:430px;
	box-shadow:0px 2px 240px 30px blue;

}

.i{
	position:relative;
	left:120px;
	top:40px;
font-size:35px;
color:white;
}
				

.i1{
	position:relative;
	top:50px;
	left:120px;
	width:200px;
	height:45px;
	text-align:center;
	font-size:25px;
	border-radius:10px;
		border-color:red;
		
				
		
}
.i:hover{
	box-shadow:0px,0px,120px,0px yellow;
}
.i2
{
	position:relative;
	top:150px;
	left:-50px;
	height:45px;
	width:120px;
	font-size:30px;
	border-radius:10px;
}
.i2:hover
{
	background-color:blue;
}
.icon{
	position:relative;
	height:100px;
	width:100px;
	top:20px;
	left:160px;
	background-color:white;
	border-radius:100%;
	
}
.icon:hover
{
	background-color:blue;
}
	

		
</style>

<body>



<div>
<img class="icon" src="loginicon.png">

<form method="POST" action="">

<h1 class="i"> Your Name</h1>
<input class="i1" type="text" placeholder="name" name="p1" required>
<h1 class="i">Password</h1>
<input class="i1" type="password"  maxlength="8" min="8" placeholder="password" name="p2" required>

<input class="i2" onclick="av();" type="submit" value="ok" name="k">

<h5><a href="adminregi.php">Registration</a></h5>
<h6><a href="adminreset.php">Forget password</a></h6>
<script>
	
function av()
{
alert('Login successfully');
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
	
    $query="select *from adminregi where name='$u'and password='$p';";
	
	$result=mysqli_query($conn,$query);
    $data=mysqli_num_rows($result);
	if($data==1)
	{
	echo"login successfully";
	header('location:adminhome.php');
	}
	
	else
	{
	echo"you have entered incorrect password";
 
}	 }
	
	?>
	


</body>
</form>
</div>
</head>
<html>