<?php
	if(isset($_POST['btn']))
	{
	include "dbconnect.php";
	$uid=$_POST["t1"];
	$upass=$_POST["t2"];
	$newpass=$_POST["t3"];
	
	
	$s="select * from logiin where uid='$uid' and upass='$upass'";

	$rs=mysqli_query($con,$s);	
	$c=mysqli_num_rows($rs);
	
	if($c==0)
	{
		echo "<script>alert('Invalid ID Or Password')</script>";
	}
	else
		{
		$s="update logiin set upass='$newpass' where uid='$uid' and upass='$upass'";
		echo $s;
		mysqli_query($con,$s);	
		header("location:password_change_message.php");
		}
		
	}
?>
<head>
<style>
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

.success {background-color: #008080;} /* Green */
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
<body>
	  <form method="post" action="change_password.php">
	<img src="logo.png"  width=270 height=150>
	<center>
	<fieldset style="width:40%" style="border-radius:18px;">
		<legend>Password Change Panel</legend>
				  <p align=center><font color="red">Enter USER ID</p>	
			  
				  <input type="text"  name="t1">
			  <p align=center>
				  Enter Old PASSWORD
			  </p>
				  <input type="password" name="t2">
			  <p align=center>
				  Enter New PASSWORD
			  </p>
				  <input type="password" name="t3">
			  <br>
			  <br>
				  <input type="submit" name="btn" class="btn success" value="Change Password">
		</fieldset>
		
</body>
