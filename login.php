<?php 
 session_start();
 $mail=$_POST['email'];
 $pass=$_POST['option'];
 print_r($_SESSION);
 if (isset($_POST['submit'])) {
 	if ($mail==$_SESSION['mail'] && $pass==$_SESSION['pass']) {
 		echo header("location:account.php");
 	}
 }

 ?><!DOCTYPE html>
<html>
<head>
	<title>login page</title>
</head>
<body>
	<style>
	.form{
		border-left: :10px;
		border-top: 10px;
		text-align: center;
		padding: 2px;
	}
	label{
		color: blue;
		border: 2px bold; 
		background-color:
		padding: 2px; 
	}
	.sub{
		margin-top: 5px;
		background-color: #45b1bf;
		width: 100px; 
		text-align: center;
		height: 30px;
		color: white;
		font-style: bold;
		font-family: sans-serif;
	}
	.sub hover {
		background-color: #009688;
		
	}
</style>
	<form class="form" action="" method="post" name="form">
	
	<label>Email</label><br>
	<input type="email" name="email" class="mail"><br>
    <label>Password <br>
	<input type="option" name="option" class="opt" placeholder="enter your password"></label><br>
	
	
	<input type="submit" name="submit" value="submit" class="sub" >

</form>
<script src=" https://cdn.jsdelivr.net/jquery/1.12.4/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
<script src="valid.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

</body>
</html>