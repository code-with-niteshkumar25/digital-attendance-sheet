<html>
<head>
<title>fblist</title>
<style>
body{
	
 background:linear-gradient(black,black);
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
color:white ;
font-size:30px;
}
td{
color:white;
font-size:25px;
text-align:center;
}
h1{
	text-align:center;
      font-size:50px;
	  color:white;
}

.img{
	position:relative;
	height:50px;
	width:50px;
	top:-20px;
}
</style></head>
<body>
<h1>*Feedback list*</h1>
<a href="adminhome.php"><image class="img" src="back.png"></a>
<?php
include("conn.php");
$query="select *from fb;";
$data=mysqli_query($conn,$query);
$table=mysqli_num_rows($data);
if($table>0)
{
?>
<table>
<tr>
<th><b>Name</b></th>
<th>Mobile_No</th>

<th>Date</th>
<th>Suggestions</th>
</tr>
<?php
while($rows=mysqli_fetch_assoc($data))
{
echo"<tr>
<td>".$rows['name']."</td>
<td>".$rows['mobile_no']."</td>
<td>".$rows['date']."</td>
<td>".$rows['suggestions']."</td>
</tr>";
}
}
else
{
	echo"data not enter";

}



?>
</table>
</form>
</table>
</body>
<html>