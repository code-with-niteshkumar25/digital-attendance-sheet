<html>
<head>
<title>feedback</title>
<style>
body{
	 background-color:navy;
overflow-x:hidden;
}
.b{
position:relative;
left:200px;
top:10px;
color:yellow;
text-decoration:none;
}
.b:hover{
	text-shadow:3px 4px 20px lightblue;
	border:1px solid yellow;
	height:40px;
	width:90px;
	border-radius:8px;
color:white;
background-color:black;
}


.o{
	position:relative;
	top:-10px;
	border:1px solid white;
	height:900px;
	width:1330px;
	border-radius:20px;
}
.n{
position:relative;
	top:20px;
    left:100px;
	font-size:30px;
	color:white;
}	
.n1{
position:relative;
	top:-520px;
    left:660px;
	font-size:30px;
	color:white;
}	

.i
{
	position:relative;
	top:-43px;
    left:340px;
	font-size:30px;
	color:white;
	border-radius:10px;
	background:transparent;
	border:1px solid white;
}

	.ii{
		
	position:relative;
	font-size:30px;
 color:white;
	left:-200px;
	TOP:100px;
	width:90px;
	background:transparent;
	}
.s{
		position:relative;
	font-size:30px;
 color:white;
	left:310px;
	TOP:30px;
	height:100px;
	width:800px;

	background:transparent;
}
a{
	text-decoration:none;
}
.facbook{
	position:relative;
	height:120px;
	width:120px;
	top:-150px;
	left:200px;
	
	border-radius:50%;
}
.facbook:hover{
	box-shadow:0px 0px 55px 0px white;
	border:2px dotted yellow;
}
.insta{
	position:relative;
	height:120px;
	width:120px;
	top:-20px;
	left:500px;
	
	border-radius:50%;
}
.insta:hover{
	box-shadow:0px 0px 55px 0px white;
	border:2px dotted yellow;
}
.google{
	position:relative;
	height:120px;
	width:120px;
	top:-150px;
	left:800px;
	
	border-radius:50%;
}
.google:hover{
	box-shadow:0px 0px 55px 0px white;
	border:2px dotted yellow;
}

div{
	background-color:black;
	height:800px;
	width:1330px;
	border-radius:10px;
}
h4{
	position:relative;
	color:white;
	font-size:25px;
	top:250px
}

a{
	color:white;
}
h5{
	position:relative;
	top:30px;
	left:550px;
	color:white;
	font-size:40px;
	}
.yogesh{
	position:relative;
	left:580px;
	height:150px;
	width:150px;
	border-radius:50%;
	
}
h6{
	position:relative;
     top:-30px;	
	text-align:center;
	color:white;
	font-size:30px;
}
	
	h2{
		color:white;
		text-align:center;
		font-size:50px;
	}
</style></head>
<a href="home.php"><h1 class="b">Home</h1></a>

<body>
<h3 class="o">
<form method="POST">
<h2>feedback</h2>
<p class="n">name:</p>
<input class="i"type="text" placeholder="name"  name="v1" required>
<p class="n">mobile no:</p>
<input class="i"type="number" maxlength="10" min="10" placeholder="mo.no" name="v2" required>
<p class="n">date</p>
<input class="i"type="date"name="v3" required>
<p class="n">suggest now</p>
<textarea class="s" value="" rows="4" cols="2" maxlength="100" min="100" placeholder="type feedback"  name="v4" required>
</textarea>
<input class="ii" onclick="av();" type="submit" value="ok"  name="ok">
<script>
function av()
{
alert('Thank your suggest me');
}

</script> 	
</h3>
<div>
<h5> Contact Now</h5>
<image class="yogesh" src="yogesh1.jpg">
<h6>Mr.yogesh Rathor </h6>
<h6>Mobile NO:6264 031 825</h6>
<h6> <a href="">yogesh@gmail.com</h6>
<a href="https://www.facebook.com/"><image class="facbook" src="facbook.gif"></a>
<a href=""><image class="insta" src="insta.gif"></a>
<a href="https://accounts.google.com/SignOutOptions?hl=en&continue=https://www.google.com%3Fhl%3Den-US"><image class="google" src="google.png"></a>

<?php
include('conn.php');
error_reporting(0);
session_start();
if(isset($_POST['ok']))
{
$b1=$_POST['v1'];
$b2=$_POST['v2'];
$b3=$_POST['v3'];
$b4=$_POST['v4'];
$query="insert into fb values('$b1','$b2','$b3','$b4');";
$data=mysqli_query($conn,$query);
$table=mysqli_num_rows($data);
}
?>
</form>
</body>
</html>