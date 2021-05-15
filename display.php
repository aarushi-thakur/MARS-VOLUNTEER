<?php



	$conn = mysqli_connect('localhost','root','','nasadb');

	$sql = "SELECT * FROM register";

	$result = mysqli_query($conn,$sql);


?>
<!DOCYTPE html>
<html lang="en">
<style>
	.myButton {
    
    padding: 10px;
    display:block;
    float:right;
    background-color: #7FFFD4;
    color: black;
    text-align:center;
    }
     .button5 {
  background-color: black;
  color: white;


}

.button5:hover {
  background-color: #555555;
  color: white;
}

	body {
  background-image: url('img_girl.jpeg');
  background-repeat: no-repeat;
  background-attachment: fixed;  
  background-size: cover;
}
	table {
  border-collapse: collapse;
  border-spacing: 0;
  width: 100%;
  border: 1px solid #ddd;
}

th, td {
  text-align: left;
  padding: 16px;
}

tr:nth-child(odd) {
  background-color: #f2f2f2;
}
tr:nth-child(even) {
  background-color: #f2f2f2;
}

/* Responsive layout - makes the two columns stack on top of each other instead of next to each other on screens that are smaller than 600 px */
@media screen and (max-width: 600px) {
  .column {
    width: 100%;
  }
}
table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
}
th, td {
  padding: 5px;
  text-align: left;
}

mark { 
  background-color: #f5bcbc;
  color: Navy;
}
</style>
<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="widh=device-width, initial-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="ie-edge">
		<title>Document</title>
</head>
<body>
	<a href="logout.php" class="myButton button5"><b>Logout</b></a>

	<h2 align ="center" style="color:Blue;"><mark>Open The Planet Program Applicant List</mark></h2>
		<table>
			<tr>
			<th>Username</th>
			<th>Occupation</th>
			<th>Gender</th>
			<th>Email</th>
			<th>Phone Code</th>
			<th>Phone</th>
			<th>Country</th>
			<th>Qualification</th>
			<th>Can Travel to US?</th>
			<th>Weight</th>
			<th>Height</th>
			<th>Ailment</th>
			<th>Food Preference</th>
			<th>Experience</th>
			<th>COVID Vaccinated</th>
			<th>Impact on life</th>

		</tr>
		<?php while($row = mysqli_fetch_array($result)){ ?>
			<tr>
				<td><?php echo $row['username']; ?></td>
				<td><?php echo $row['Occupation']; ?></td>
				<td><?php echo $row['gender']; ?></td>
				<td><?php echo $row['email']; ?></td>
				<td><?php echo $row['phoneCode']; ?></td>
				<td><?php echo $row['phone']; ?></td>
				<td><?php echo $row['country']; ?></td>
				<td><?php echo $row['ql']; ?></td>
				<td><?php echo $row['yn']; ?></td>
				<td><?php echo $row['wt']; ?></td>
				<td><?php echo $row['ht']; ?></td>
				<td><?php echo $row['ailment']; ?></td>
				<td><?php echo $row['veg']; ?></td>
				<td><?php echo $row['exp']; ?></td>
				<td><?php echo $row['cov']; ?></td>
				<td><?php echo $row['imp']; ?></td>
			</tr>


		<?php } ?>

		</table>
</body>
</html>