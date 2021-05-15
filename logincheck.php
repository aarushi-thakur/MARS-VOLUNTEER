<?php
session_start();

$con = mysqli_connect('localhost','root');
if($con){
	echo "Connection Successful";
}else{
	echo "No Connection";
}


$db = mysqli_select_db($con, 'nasadb');
echo "DB Connection API called";
if(isset($_POST['submit'])){
	$user = $_POST['user'];
	$pass = $_POST['pass'];

	$sql = " select * from admintable where user = '$user'and pass = '$pass'";
	$query = mysqli_query($con,$sql);

	$row = mysqli_num_rows($query);
	echo $row;
	echo "No. of rows";
		if($row == 1){
			echo "Login Successful";
			$_SESSION['user'] = $username;
			header('location:display.php');
		}else{
			echo "Login Failed";
			header('location:AdminLogin.php');
		}
	
}
?>