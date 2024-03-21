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
  color: ;
  padding: 10px 28px;
  font-size: 14px;
  cursor: pointer;
  border-radius:10px;
}

.success {background-color: #04AA6D;} /* Green */
.success:hover {background-color: #46a049;}
</style>
</head>
<body>
	  
	<img src="logo.png"  width=270 height=150>
	<center>
	<img src="user.png" width=100 height=100>
	<fieldset style="width:40%">
		<legend>Login Panel</legend>
				  <p align=left>USER ID</p>	
			  
				  <input type="text"  name="t1">
			  <p align=left>
				  PASSWORD
			  </p>
				  <input type="password" name="t2">
			  <br>
			  <br>
				  <input type="submit" class="btn success" value="Login">
		</fieldset>
		
</body>