<?php
	extract($_POST);
	if(isset($_POST["btn"]))
	{
		
		include "dbconnect.php";
		$s="insert into patient(pname,fname,pgen,pctno,dor,age) values('$t1','$t2','$t3','$t4','$t5','$t6')";
		echo $s;
		mysqli_query($con,$s);
		$s="Select max(id) from patient";
		$rs=mysqli_query($con,$s);
		$r=mysqli_fetch_array($rs);
		$id=$r[0]+1;
		
		echo "<script>alert('Patient Registered Sucessfully')</script>";
		header("location:appointment.php?id=$id&pname=$t1&age=$t6");
		//header("location:appointment.php?id=101&pname=abcd");
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
  color: white;
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
	  <form method="post" action="patient_regs.php">
	
	<font size=5.5 face="Cambria"><b>PATIENT REGISTRATION PANEL</font>
	
	<fieldset style="width:60%" style="border-radius:18px;">
		<legend><h4>Enter Patient Details</h3></legend>
		<table cellpadding=10 width="80%">
			<tr>
				<td>Enter Patient Name
				<td><input type="text"  name="t1">
			<tr>
				<td>Enter Patient Father Name
				<td><input type="text"  name="t2">
			<tr>
				<td>Patient Gender
				<td>
					<input type="radio" name="t3" value="Male"> Male
					<input type="radio" name="t3" value="FeMale"> FeMale
			<tr>  
			    <td>Patient Age
				<td><input type="text" name="t6">
			<tr>  
				<td>Patient Contact No
				<td><input type="text" name="t4">
			
			<tr>  
			    <td>Date of Registration
				<td><input type="date" name="t5" class="box">
			
			<tr>
				<td colspan=2 align=center>
				<input type="submit" class="btn success" value="Register Patient" name="btn">
		</fieldset>
		
</body>