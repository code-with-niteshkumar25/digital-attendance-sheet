<html>
<head><title>ragi</title>
<style>
body{
	position:fixed;
	background:green;
	border-radius:50px;
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
	border:1px solid black;
	position:relative;
	height:620px;
	width:650px;
	color:rgba(0,0,0,0.94);
	left:350px;
	top:20px;
	border-radius:10px;

}
.n{
		font-size:40px;
	position:relative;
	left:120px;
	top:-10px;
	color:white;
}
.t{
	position:relative;
	font-size:25px;
	left:65px;
	color:white;
}
.t1{
	position:relative;
	font-size:25px;
left:65px;
color:white;
}
.t2{
	position:relative;
	font-size:25px;
	left:65px;
	color:white;
}
.t3{
	position:relative;
	font-size:25px;
	left:65px;
	color:white;
}
.t4{
	position:relative;
	font-size:25px;
	left:65px;
color:white;
}
.i{
	position:relative;
	top:-50px;
	height:35px;
	width:195px;
	left:380px;
	border-radius:10px;
	font-size:22px;    
	border:1px solid white;
	background:transparent;
color:white;
}
.i:hover{
	background-color:black;
	color:white;
	box-shadow:0px 0px 40px 0px white;
	background:transparent;
	border:1px solid white;
}
.i1{
	position:relative;
	top:20px;
	height:40px;
	width:150px;
	border-radius:10px;
	left:40px;
	color:white;
		border:1px solid white;
background:transparent;
font-size:20px;
}
.i1:hover{
	box-shadow:0px 0px 40px 0px white;
}
	</style></head>
<body>
<form method="post">
<div class="d">
<h1 class="n">* Faculty Registration*</h1>
<h1 class="t"> Your Name:</h1>
<input  class="i" type="text" placeholder="Name" name="n1" required>
<h1 class="t1"> Mobile No:</h1>
<input class="i" type="text" maxlength="10" min="10" placeholder="Mobile No" name="n2" required>
<h1 class="t2"> Organization:</h1>
<select class="i" type="text" placeholder="Organization" name="n3" required>
<option value="MCU">MCU</option>
<option value="DAVV">DAVV</option>
<option value="RJPV">RJPV</option>

</select>
<h1 class="t3"> E-mail:</h1>
<input  class="i" type="email" placeholder="E-mail" name="n4" required>
<h1 class="t4"> Password:</h1>
<input class="i" type="password" maxlength="8" min="8" placeholder="Password" name="n5" required>
<input class="i1" type="Submit" onclick="nan()" value="Submit" name="ragi">
<script>
function nan()
{
alert('Registration. successfully');

}
</script>
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
$query="insert into ragi values('$r1','$r2','$r3','$r4','$r5');";
$data=mysqli_query($conn,$query);
if($data>0)
{
 header('location:login.php');
   }
else
{
	echo"data not insert";
}}
?>
</form>
</body>
</html>