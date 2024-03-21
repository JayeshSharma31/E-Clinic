<?php
extract($_GET);
include "dbconnect.php";
$s="Select max(rctno) from appoint";
$rs=mysqli_query($con,$s);
$r=mysqli_fetch_array($rs);
$rno=$r[0]+1;
?>
<center>
	<font face=arial size=6>ABC CLINIC HOSPITAL AND MEDICAL RESEARCH CENTER</H2><br>
		<font face=arial size=5>abc colony, Udaipur, Rajasthan 313001<br>
		<font face=arial size=4>Phone: 0294 2XXXXXX,Mob: +91XXXXXXXXXX,email: abc@gmail.com </FONT>	
<br>
<br>
<H3>- RECEIPT : <?php echo $rno; ?> -</h3>	
<table width="70%" cellpadding=10 border=1 style='border-collapse:collapse'>
	<tr>
		<td colspan=4 align=center style="background-color: #008080;color:white"><b>TOKEN NO - <?php echo $t9; ?>
	<tr>
		<td>Patient ID
		<td align="center"><b><?php echo $t1;?>
		
		<td>Date & Time
		<td align="center"><b><?php echo $t7." , ".$t4;?>
	<tr>
		<td>Patient Name
		<td align="center"><b><?php echo $t2 ;?>
		
		<td>Patient Age
		<td align="center"><b><?php echo $t8 ;?>
	<tr>
		<td colspan=4 align=center>Consulating Dr. <b><?php echo $t3;?>
	<tr>
		<td>Payment Mode
		<td align="center"><b><b>CASH</b>
		
		<td>Patient Amount
		<td align="center"><b><?php echo $t6 ;?>
	<tr>
		<td colspan=2 align=center>Remark
		<td colspan=2 align=center><b><?php echo $t5;?>
	</table>
	<br>		
	<br>
	<br>
	<table width="70%" cellpadding=10>
		<tr>
			<td align=right><b>Authorised Signatory
	</table>
<br>
	<a href="patient_regs.php">Back</a>
	