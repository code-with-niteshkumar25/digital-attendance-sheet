<html>
<head>
<title>Attendances</title>
<style>
body{
	
 background:linear-gradient(blue,black);
overflow-x:hidden;
}

a{
	text-decoration:none;
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

h1{
	color:white;
	text-align:center;

font-size:55px;

}
.img{
	position:relative;
	heigth:50px;
	width:50px;
	background-color:yellow;
	top:-50px;
}
</style></head>
<body>
<h1>*BCA 1ST Year*</h1>
<a href="adminhome.php"><image class="img"src="back.png"></a>
<?php
include("conn.php");
error_reporting(0);
	 
	 $q4="select *from bca1;";
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
		  ?>
		  

</table>
</form>
</table>
</body>
<html>