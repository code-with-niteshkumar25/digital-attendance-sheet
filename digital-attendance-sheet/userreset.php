<html>
<head>
<title> userreset form</title>

<style>
body{
	position:fixed;
background:linear-gradient(rgba(0,0,0,0.3),rgba(0,0,0,0.3)),url('children.jpg');
}
h1{
	position:relative;
color:white;
left:50px;
font-size:50px;
}

div{
border:2px solid black;
	border-radius:10px;
	position:relative;
	left:500px;
	top:50px;
background-size:cover;
		background-color:magenta;
	height:520px;
	width:420px;
	}
div:hover{
box-shadow:0px 2px 240px 30px green;
}
.i{
	position:relative;
	left:120px;
	top:30px;
font-size:40px;
color:white;
animation-name:s;
		animation-duration:2s;
		animation-iteration-count:1;
}
		@keyframes s{
		from{left:800px; top:30px;}
		to{left:120px; top:30px;}
		}
	.i1{
	position:relative;
	top:30px;
	left:120px;
	width:200px;
	height:45px;
	text-align:center;
	font-size:25px;
	border-radius:10px;
		border-color:red;
		animation-name:v;
		animation-duration:2s;
		animation-iteration-count:1;
}
		@keyframes v{
		from{left:-520px; top:30px;}
		to{left:120px; top:30px;}
		}
				}
.i:hover{
	box-shadow:0px,0px,120px,0px yellow;
}
.i2
{
	position:relative;
	top:90px;
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
	


</style>
<body>
<div>
<h1>Reset Password</h1>
<form method="POST" action="">
<h1 class="i"> Your Name</h1>
<input class="i1" type="text" placeholder="name" name="p1" required>
<h1 class="i">Password</h1>
<input class="i1" type="password" maxlength="8" min="8" placeholder="password" name="p2" required>

<input class="i2" onclick="av();" type="submit" value="ok" name="k">

<script>
	
function av()
{
alert('reset successfully');
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
	    $query="update ragi set password='$p' where name='$u';";
	$result=mysqli_query($conn,$query);
    $data=mysqli_num_rows($result);
	if(!$data==1)
	{
	echo"login successfully";
	header('location:login.php');
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