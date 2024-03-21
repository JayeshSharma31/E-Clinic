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
</style>
<?php
	include "heading.php";
	include "dbconnect.php";
	$pid=$_GET["id"];
	$s="Select * from patient where id=$pid";
	$rs=mysqli_query($con,$s);
	$pname="";
	$age="";
	echo "<center><H3>PATIENT DETAIL</H3>";
	echo "<br><table style='border-style: solid;border-color: #008080;' 1 width='70%'>";
			//echo "<tr><th>ID<th>Patient Name<th>Father Name<th>Gender<th>Contact No<th>Age<th>Registration Date";
			while($r=mysqli_fetch_array($rs))
			{
				$pid=$r[0];
				//echo "<tr><td class=tdt>Patient ID<td>$pid";
				$pname=$r[1];
				echo "<tr><td class=tdt>Patient Name<td>$pname";
				echo "<td class=tdt>Father Name<td>$r[2]";
				echo "<tr><td class=tdt>Patient Gender<td>$r[3]";
				echo "<td class=tdt>Contact Number<td>$r[4]";
				$age=$r[6];
				echo "<tr><td class=tdt>Patient Age<td>$age";
				echo "<td class=tdt>Registration Date<td>$r[5]";	
			}
			echo"</table>";
			$s="select * from appoint where pid=$pid";
			$rs=mysqli_query($con,$s);
	echo "<br><table style='border-collapse:collapse class=tab' width='70%' border=1>";
	echo "<tr><th>Doctor Name<th>Visited Date<th>Visited Time<th>Remark<th>Fee";
	while($r=mysqli_fetch_array($rs))
	{
		
		echo "<tr><td class=tdt>$r[2]";
		echo "<td class=tdt>$r[6]";
		echo "<td class=tdt>$r[3]";
		echo "<td class=tdt>$r[4]";
		echo "<td class=tdt>$r[5]";
		
	}
	echo"</table>";
	echo "<br>";
	echo "<a href='appointment.php?id=$pid&pname=$pname&age=$age'>Give Appointment</a>";
	
?>