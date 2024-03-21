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
	$dt=new datetime();
	$d=$dt->format("d/m/y");
	$s="select * from token where dte='25/06/21'";
	
	$rs=mysqli_query($con,$s);
	echo "<br><table style='border-collapse:collapse class=tab' width='70%'>";
	echo "<tr><th>Doctor Name<th>Time<th>Total Patient";
	while($r=mysqli_fetch_array($rs))
	{
		echo "<tr><td class=tdt>$r[0]";
		echo "<td class=tdt>$r[2]";
		echo "<td class=tdt>$r[3]";

	}
	echo"</table>";
	
?>