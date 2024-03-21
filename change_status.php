<?php
	if(isset($_GET['did']))
	{
		extract($_GET);
		include "dbconnect.php";
		if($status=="Available")
			$s="update doctor set status='Not Available' where did=$did";
		else
			$s="update doctor set status='	Available' where did=$did";
		mysqli_query($con,$s);
	}
?>
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
</style>

<?php
	include "dbconnect.php";
	include "heading.php";
	
	$s="select * from doctor";
	
	$rs=mysqli_query($con,$s);
	echo "<br><table style='border-collapse:collapse class=tab' width='70%'>";
	echo "<tr><th>Doctor Name<th>Gender<th>Contact No<th>Specialist<th>Joining date<th>Visit Time<th>Status<th>Action";
	while($r=mysqli_fetch_array($rs))
	{
		$did=$r[0];
		echo "<tr><td class=tdt>$r[1]";
		echo "<td class=tdt>$r[2]";
		echo "<td class=tdt>$r[3]";
		echo "<td class=tdt>$r[4]";
		echo "<td class=tdt>$r[5]";
		echo "<td class=tdt>$r[6]";
		echo "<td class=tdt>$r[7]";
		echo "<td class=tdt><a href='change_status.php?did=$did&status=$r[7]'>Change</a>";
	}
	echo"</table>";
	
?>