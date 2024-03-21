<?php
	extract($_POST);
	if(isset($_POST["btn"]))
	{
		include "dbconnect.php";
		$s="insert into doctor(dname,gen,ctno,speciality,doj,dt,status) values('$t1','$t2','$t3','$t4','$t5','$t6','Available')";
		echo $s;
		mysqli_query($con,$s);
		echo "<script>alert('Doctor Sir Registered Sucessfully')</script>";
	}
?>
<head>
<style>
.box {
        width: 280px;
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
  box-shadow:0 0 15px 4px rgba(0,0,0,0.06);
}
.btn {
  border: none;
  color: ;
  padding: 10px 28px;
  font-size: 14px;
  cursor: pointer;
  border-radius:10px;
}

.success {background-color: #008080;}
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
	  <form method="post" action="dr_regs.php">
	
	<font size=5.5 face="Cambria"><b>DOCTOR REGISTRATION PANEL</font>
	
	<fieldset style="width:60%" style="border-radius:18px;">
		<legend><h4>Enter Doctor Details</h3></legend>
		<table cellpadding=10 width="80%">
			<tr>
				<td>Enter Doctor Name
				<td><input type="text"  name="t1">
			<tr>
				<td>Doctor Gender
				<td>
					<input type="radio" name="t2" value="Male"> Male
					<input type="radio" name="t2" value="FeMale"> FeMale
			<tr>  
			    <td>Doctor Contact No
				<td><input type="text" name="t3">
			<tr>
				<td>Select  Specialization
				<td><select name="t4" class="box">
					<option>Medicine
					<option>Obstetrics
					<option>Gynecology
					<option>Pediatrics
					<option>Pathology
					<option>Anesthesiology
					<option>Ophthalmology
					<option>Surgery
					<option>Orthopedic surgery
					<option>Neurology
					<option>Radiology
					<option>Urology
				</select>
			<tr>  
			    <td>Doctor Date  of Joining
				<td><input type="date" name="t5" class="box">
			<tr>  
			    <td>Doctor Available Time Slot
				<td><input type="text" name="t6">
			<tr>
				<td colspan=2 align=center>
				<input type="submit" class="btn success" value="Register Doctor" name="btn">
		</fieldset>
		
</body>