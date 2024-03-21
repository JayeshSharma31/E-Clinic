<?php
	extract($_POST);
	if(isset($_POST["btn"]))
	{
		include "dbconnect.php";
		$source=$_FILES["fp"]["tmp_name"];
		$dest=$_FILES["fp"]["name"];
		if(move_uploaded_file($source,$dest))
			{
			$s="insert into logiin values('$t1','$t2','$t3','$t4','$t5','$dest','$t6','$t7')";
			//echo $s;
			mysqli_query($con,$s);
			echo "<script>alert('New User Registered Sucessfully')</script>";
			}
		else
			echo "<script>alert('Oh.. Error in Registration')</script>";
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
<?php include "admin_header.php";?>
	  <form method="post" action="new_user.php" enctype="multipart/form-data">
	
	<font size=5.5 face="Cambria"><b>NEW USER REGISTRATION PANEL</font>
	
	<fieldset style="width:60%" style="border-radius:18px;">
		<legend><h4>Enter USER Details</h3></legend>
		<table cellpadding=10 width="80%">
			<tr>
				<td>Enter User ID
				<td><input type="text"  name="t1">
			<tr>
				<td>Enter User Password
				<td><input type="password"  name="t2">
			<tr>
				<td>Enter User Name
				<td><input type="text"  name="t3">
			<tr>
				<td>User Gender
				<td>
					<input type="radio" name="t4" value="Male"> Male
					<input type="radio" name="t4" value="FeMale"> FeMale
			<tr>  
			    <td>User Contact No
				<td><input type="text" name="t5">
			<tr>
				<td>Upload User PIC
				<td><input type="file" name="fp">
			<tr>  
			    <td>Enter Date of Joining
				<td><input type="date" name="t6" class="box">
			<tr>  
			    <td>Enter Address
				<td><textarea name="t7" rows=7 cols=35></textarea>
			<tr>
				<td colspan=2 align=center>
				<input type="submit" class="btn success" value="Register User" name="btn">
		</fieldset>
		
</body>