<?php
	extract($_POST);
	$dt=new datetime();
		$d=$dt->format("d/m/y");
	
	if(isset($_POST["btn"]))
	{
		include "dbconnect.php";
		$s="select tno from token where dname='$t3' and dte='$t7'";
		mysqli_query($con,$s);
		$rs=mysqli_query($con,$s);
		$c=mysqli_num_rows($rs);
		
		$tno=0;
		while($r=mysqli_fetch_array($rs))
		{
			$tno=$r[0];
		}
		$tno=$tno+1;
			
		if($c==0)
		{		
			$s="insert into token values('$t3','$t7','$t4',$tno)";
			//echo $s;
		}
		else
			$s="update token set tno=tno+1 where dname='$t3' and dte='$t7'";
		
		echo $s;
		mysqli_query($con,$s);
		
		$s="insert into appoint values($t1,'$t2','$t3','$t4','$t5','$t6','$t7',$tno)";
		echo $s;
		mysqli_query($con,$s);
		//	echo "location:receipt.php?t1=$t1&t2=$t2&t3=$t3&t4=$t4&t5=$t5&t6=$t6&t7=$t7&t8=$t8";
		header("location:receipt.php?t1=$t1&t2=$t2&t3=$t3&t4=$t4&t5=$t5&t6=$t6&t7=$t7&t8=$t8&t9=$tno");
		//echo "<script>alert('Appointment Given Sucessfully')</script>";
	}
	else if(isset($_GET["id"]))
	{
		extract($_GET);
		
	}


?>
<head>
<style>
.box {
        width: 300px;
        height: 30px;
        border: 1px solid #999;
        font-size: 14px;
        color: #1c87c9;
        background-color: #eee;
        border-radius: 5px;
              }
body 
	{
		font-family: Arial, Helvetica, sans-serif;
	}
	input[type=text],input[type=password] {
  width: 80%;
  padding: 7px 20px;
  margin: 5px 0;
  box-sizing: border-box;
  border: 2px solid blue	;
  border-radius: 4px;
  box-shadow:0 0 2px 4px rgba(0,0,0,0.06);
}
.btn {
  border: none;
  color:white	 ;
  padding: 10px 28px;
  font-size: 14px;
  cursor: pointer;
  border-radius:10px;
}

.success {background-color: #008080}
.success:hover {background-color: grey;}
fieldset {
  margin: 20px;
  padding: 0 10px 10px;
  border: 1px solid #666;
  border-radius: 8px;
  box-shadow: 0 0 10px #666;
  padding-top: 10px;
}
legend {
  padding: 2px 4px;
  background: #fff;
  /* For better legibility against the box-shadow */
}
</style>
</head>
<body >
<?php include "heading.php";?>
	  <form method="post" action="appointment.php">
	
	<font size=5.5 face="Cambria"><b>PATIENT APPOINTEMENT PANEL</font>
	
	<fieldset style="width:60%" style="border-radius:18px;">
		<legend><h4>Patient Appointment Details</h3></legend>
		<table cellpadding=10 width="80%">
			<tr>
				<td>Patient Name
				<td><input type="text" name="t2" value='<?php echo $pname;?>'>
				<input type="hidden" name="t1" value='<?php echo $id;?>'>
				<input type="hidden" name="t8" value='<?php echo $age;?>'>
			<tr>
				<td>Consulting Doctor
				<td><select name="t3" class="box">
					<?php
						include "dbconnect.php";
						$s="select dname from doctor where status='Available'";
						$rs=mysqli_query($con,$s);
						echo "<option>Select Consulting Doctor</option>";
						while($r=mysqli_fetch_array($rs))
						{
							echo "<option>$r[0]";
						}
					?>
					</select>
			<tr>
				<td>Date of Consulation Is
				<td><input type="text"  name="t7" class="box"  value='<?php echo $d;?>' >
			<tr>
				<td>Time of Consulation Is
				<td><input type="text"  name="t4" class="box">
			<tr>  
			    <td>Remark (if Any)
				<td><input type="text" name="t5">
			<tr>  
			    <td>Fee Amount Is
				<td><input type="text" name="t6">
			
			<tr>
				<td colspan=2 align=center>
				<input type="submit" class="btn success" value="Give Appointment" name="btn">
		</fieldset>
		
</body>
