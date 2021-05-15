<?php
session_start();

$con = mysqli_connect('localhost','root','');

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="style3.css">
	<?php include 'links.php' ?>
</head>
<body>

<header>
	<div class="container center-div shadow">
		<div class="heading text-center text-uppercase text-white mb-5">ADMIN LOGIN PAGE</div>
	<div class="container row d-flex flex-row justify-content-center mb-5">
		<div class="admin-form shadow p-2">
			<form action="logincheck.php" method="POST">
			<div class="form-group">
				<label>User Name</label>
				<input type="text" name="user" value="" class="form-control" autocomplete="off">
			</div>
			<div class="form-group">
				<label>Password</label>
				<input type="password" name="pass" value="" class="form-control" autocomplete="off" id="myInput">
				<input type="checkbox" onclick="myFunction()"> Show Password


			</div>
			<input type="submit" class="btn btn-success" name="submit">						
			</form>
	</div>
	</div>
</header><script>
function myFunction() {
  var x = document.getElementById("myInput");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
</script>
</body>
</html>