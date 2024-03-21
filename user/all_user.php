<style>
body 
	{
		font-family: Arial, Helvetica, sans-serif;
	}
.tab
{
  border-collapse: collapse;
  width: 100%;
}
th {
  background-color: #008080;
  color: white;
  padding: 12px;
}
.tdt {
  text-align: center;
  padding: 10px;
}

tr:nth-child(even) {background-color: #f2f2f2;}
input[type=text],input[type=password] {
  width: 90%;
  padding: 7px 20px;
  margin: 5px 0;
  box-sizing: border-box;
  border: 2px solid black;
  border-radius: 4px;
  box-shadow:0 0 15px 4px rgba(0,0,0,0.06);
}
.btn {
  border: none;
  color: white;
  padding: 10px 28px;
  font-size: 14px;
  cursor: pointer;
  border-radius:10px;
}

.success {background-color: #008080}
.success:hover {background-color: grey;}
.tab
{
  border-collapse: collapse;
  width: 100%;
}
<?php
include "admin_header.php";
?>
</style>
<form method="post" action="all_user.php">
<table>
	<tr>
		<td>Enter User Name to Get Details
		<td><input type="text" name="t1">
		<td><input type="submit" value="Search" name="btn" class="btn success">
</table>
</form>
<?php
	include "dbconnect.php";
	

	if(isset($_POST['btn']))
	{
		$uname=$_POST["t1"];
		$s="select * from logiin where uname like '%$uname%'";
	}
	else
		$s="select * from logiin";
	
	$rs=mysqli_query($con,$s);
	echo "<br><table style='border-collapse:collapse class=tab' width='70%'>";
	echo "<tr><th>User Pic<th>User ID<th>User Password<th>User Name<th>Gender<th>Contact No<th>Joining Date<th>Address";
	while($r=mysqli_fetch_array($rs))
	{
		
		echo "<tr><td class=tdt><img src='$r[5]' width=50 height=50>";
		echo "<td class=tdt>$r[0]";
		echo "<td class=tdt>$r[1]";
		echo "<td class=tdt>$r[2]";
		echo "<td class=tdt>$r[3]";
		echo "<td class=tdt>$r[4]";
		echo "<td class=tdt>$r[6]";
		echo "<td class=tdt>$r[7]";
	}
	echo"</table>";
	
?>