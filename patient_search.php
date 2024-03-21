<?php include "heading.php"; ?>
<style>

body 
	{
		font-family: Arial, Helvetica, sans-serif;
	}
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
th {
  background-color: #008080;
  color: white;
  padding: 8px;
}
.tdt {
  text-align: center;
  padding: 10px;
}

tr:nth-child(even) {background-color: #f2f2f2;}

</style>
<form method="post" action="patient_search.php">
<table>
	<tr>
		<td>Enter Patient Name or Contact No
		<td><input type="text" name="t1">
		<td><input type="submit" value="Search" name="btn" class="btn success">
</table>
</form>

<?php

if(isset($_POST["btn"]))
{
	$id=$_POST["t1"];

	include "dbconnect.php";
	$s="Select * from patient where pname like '%$id%'";
	echo $s;
	$rs=mysqli_query($con,$s);
	$c=mysqli_num_rows($rs);
	

	if($c==0)
	{
		$s="Select * from patient where pctno like '%$id%'";
		//echo $s;
		$rs=mysqli_query($con,$s);
		$c=mysqli_num_rows($rs);
		if($c==0)
			echo "<script>alert('Record Not Found')</script>";
	}
	if($c!=0)
		{
			
			echo "<br><table style='border-collapse:collapse class=tab' width='70%'>";
			echo "<tr><th>ID<th>Patient Name<th>Father Name<th>Gender<th>Contact No<th>Age<th>Registration Date";
			while($r=mysqli_fetch_array($rs))
			{
				$pid=$r[0];
				echo "<tr><td class=tdt><a href='display_patient.php?id=$pid'>$pid</a>";
				echo "<td class=tdt>$r[1]";
				echo "<td class=tdt>$r[2]";
				echo "<td class=tdt>$r[3]";
				echo "<td class=tdt>$r[4]";
				echo "<td class=tdt>$r[6]";
				echo "<td class=tdt>$r[5]";
			}
			echo"</table>";
		}
	
	
}

?>