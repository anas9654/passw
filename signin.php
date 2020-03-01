<?php
session_start();
$a=$_POST['name'];
$b=$_POST['email'];
$c=$_POST['option'];
if (isset($_POST)) {
	function password_generate($c) 
{
  $data = '1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcefghijklmnopqrstuvwxyz';
  return substr(str_shuffle($data), 0, $c);
}
  $g= password_generate($c);
  if (mail($b, "here is your pass", "your powerfull password is".$g)) {
   	$_SESSION['pass'] =$g;
   header("location:login.php");
   exit();
   } 
   
}
//print_r($_SESSION);
$_SESSION['mail']=$b;

?><!DOCTYPE html>
<html>
<head>
	<title>form</title>
</head>
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
<body>
	<form class="form" action="" method="post" name="form">
	<label>Name<br>
	<input type="text" name="name" class="name"></label><br>
	<label>Email</label><br>
	<input type="email" name="email" class="mail"><br>
    <label>Password length<br>
	<input type="option" name="option" class="opt" placeholder="i.e 5"></label><br>
	
	
	<input type="submit" name="submit" value="submit" class="sub" >

</form>
<script src=" https://cdn.jsdelivr.net/jquery/1.12.4/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
<script src="valid.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</body>
</html>