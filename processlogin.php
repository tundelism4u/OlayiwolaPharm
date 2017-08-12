<?php
$host="localhost";
$usr="root";
$pwd="";
$dbname="olayiwoladb";
$con=mysqli_connect($host,$usr,$pwd,$dbname);

if (!$con){
	echo "Error connecting to database:".mysqli_error($con);
}
else {
	//echo "connected successfully";
	
}
if (mysqli_connect_errno()) {
	echo "MySQLi Connection was not established:".mysqli_connect_error();
	}
	
if(isset($_POST['Login'])){
$username = mysqli_real_escape_string($con,$_POST['username']);
$pass = mysqli_real_escape_string($con,$_POST['password']);
$sel_user = "select * from user where Username='$username' AND Password='$pass'";

$run_user = mysqli_query($con, $sel_user);

$check_user = mysqli_num_rows($run_user);

if($check_user>0){
	
	$_SESSION['username']=$username;
	echo "<script>window.open('indexlogin.php','_self')</script>";
	}
else {
	
	echo "<script>alert('Username Or Password Not Correct, try again!')</script>";
}
	}

?>