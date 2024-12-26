<html>
<head>
<title> about</title>
<style>
body{
	background:linear-gradient(blue,black);
	overflow-x:hidden;
  
}
a{
text-decoration:none;
}

div{
	position:relative;
	height:700px;
	width:1340px;
	border:1px solid white;
}

h1{
	position:relative;
	color:white;
	left:200px;
	top:70px;
	font-size:30px;
}
.i1{
	position:relative;
	height:35px;
	width:200px;
	left:380px;
	top:20px;
	font-size:20px;
	
}
h2{
	position:relative;
	color:white;
	left:750px;
	top:-150px;
	font-size:30px;
}
.i2{
	position:relative;
	height:35px;
	width:200px;
	left:970px;
	top:-205px;
	font-size:20px;
	
}
h3{
	position:relative;
	color:white;
	left:200px;
	top:-170px;
	font-size:30px;
}
.i3{
	position:relative;
	height:35px;
	width:200px;
	left:380px;
	top:-240px;
	font-size:20px;
	
}
h5{
	position:relative;
	color:white;
	left:750px;
	top:-315px;
	font-size:30px;
}
.i5{
	position:relative;
	height:35px;
	width:200px;
	left:970px;
	top:-400px;
	font-size:20px;
	
}
h4{
	color:white;
	font-size:40px;
	text-align:center;
}
.i4{
	position:relative;
	height:35px;
	width:120px;
	left:400px;
	top:-250px;
	font-size:25px;
	
}
table,th ,td{
	border:1px solid white;
}

table {
	border-collapse:collapse;
	width:100%;
}
th{
color:white;
font-size:30px;
}
td{
color:white;
font-size:25px;
text-align:center;
}
p{
	text-align:center;
	font-size:40px;
	color:white;
} 	
.back{
		position:absolute;
		top:620px;
		left:150px;
		
		font-weight:700%;
	}
	.back a{
	color:black;
	}
	.back a input{
		width:80px;
		height:30px;
		background:yellow;
	font-size:20px;
	}
	

</style>

<body>
<div>
<form method="POST">
<h4> *BCA 3RD YEAR*</h4>

<h1>Sr. no:</h1><select class="i1" type="text" placeholder="Sr. no" name="t1" required>
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="5">5</option>
<option value="6">6</option>
<option value="7">7</option>
<option value="8">8</option>
<option value="9">9</option>
<option value="10">10</option>
</select>

<h1>Name:</h1><select class="i1" type="text" placeholder="Name" name="t2" required>
<option value="Alfiya">Alfiya</option>
<option value="Nagma">Nagma</option>
<option value="Milka">Milka</option>
<option value="Vikash">Vikash</option>
<option value="Ishwar">Ishwar</option>
<option value="Hussain">Hussain</option>
<option value="Harshit">Harshit</option>
<option value="Sultan">Sultan</option>
<option value="Tushar">Tushar</option>
<option value="Rishabh">Rishabh</option>
</select>
<h2>Father Name:</h2><input  class="i2" type="text" placeholder="Father Name" name="t3" required>
<h2>Date:</h2><input class="i2" type="Date" placeholder="Date" name="t4"required>
<h3> Semester:</h3><select class="i3" type="text" placeholder="BCA" name="t5"required>
<option value="BCA 3RD">BCA 3RD</option>
</select>
<h5> Attendance:</h5><select class="i5" type="text" placeholder="Attendance" name="tt"required>
<option value="P">P</option>
<option value="A">A</option>
<option value="Application">Application</option>
</select>
<input class="i4" type="Submit" onclick="a();" value="*Ok*" name="t6">
</div>
<h5 class="back">  <a href="home.php"><input type="button" value="BACK" name="BACK"></input></a></h5>
<p> ***BCA 3RD YEAR***</p>
<script>
function name a()
{
	alert('Sucessfully');
}
</script>
<?php
include("conn.php");
error_reporting(0);
session_start();
if(isset($_POST['t6']))
{   
$p1=$_POST[t1];
	$p2=$_POST[t2];
	$p3=$_POST[t3];
	$p4=$_POST[t4];
	$p5=$_POST[t5];
		$p6=$_POST[tt];
	
    
	$q2="insert into bca3 values('$p1','$p2','$p3','$p4','$p5','$p6');";
	$q3=mysqli_query($conn,$q2);
	 
	 $q4="select *from bca3;";
	 $q5=mysqli_query($conn,$q4);

	 $table=mysqli_num_rows($q5);

      if($table>0)
	  {
          ?>
		  <table>
		  <tr>
		  <th> Sr.no</th>
          <th>Name</th>
          <th>Father Name</th>
		  <th> Date</th>
		  <th> Semester</th>
		  <th> Attendance</th>
		  </tr>
		  <?php
		  while($rows=mysqli_fetch_assoc($q5))
		  {
			  echo"<tr>
			  <td>".$rows['sr_no']."</td>
			  <td>".$rows['name']."</td>
			  <td>".$rows['father_name']."</td>
			  <td>".$rows['date']."</td>
			  <td>".$rows['semester']."</td>
			  <td>".$rows['attendance']."</td>
			  </tr>";
		  }
	  }  
		  else
		  {
			  echo"date not insert";
		  }
}
		  ?>
		  
			  
</table>
</form>
</body>
</head>
</html>
