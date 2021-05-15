<?php
if (isset($_POST['submit'])) {
    if (isset($_POST['username']) && isset($_POST['Occupation']) &&
        isset($_POST['gender']) && isset($_POST['email']) &&
        isset($_POST['phoneCode']) && isset($_POST['phone'])  && isset($_POST['country']) && isset($_POST['ql']) && isset($_POST['yn']) && isset($_POST['ailment']) && isset($_POST['veg']) && isset($_POST['exp']) && isset($_POST['cov']) && isset($_POST['imp'])) {
        
        $username = $_POST['username'];
        $Occupation = $_POST['Occupation'];
        $gender = $_POST['gender'];
        $email = $_POST['email'];
        $phoneCode = $_POST['phoneCode'];
        $phone = $_POST['phone'];
      	$country = $_POST['country'];
      	$ql = $_POST['ql'];        
      	$yn = $_POST['yn']; 
        $ailment = $_POST['ailment']; 
        $veg = $_POST['veg']; 
        $exp = $_POST['exp']; 
        $cov = $_POST['cov']; 
        $imp = $_POST['imp']; 

	$host = "localhost";
        $dbUsername = "root";
        $dbPassword = "";
        $dbName = "nasadb";

        $conn = new mysqli($host, $dbUsername, $dbPassword, $dbName);

        if ($conn->connect_error) {
            die('Could not connect to the database.');
        }
        else {
            $Select = "SELECT email FROM register WHERE email = ? LIMIT 1";
            $Insert = "INSERT INTO register(username, Occupation, gender, email, phoneCode, phone, country, ql, yn, ailment, veg, exp, cov, imp) values(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

            $stmt = $conn->prepare($Select);
            $stmt->bind_param("s", $email);
            $stmt->execute();
            $stmt->bind_result($resultEmail);
            $stmt->store_result();
            $stmt->fetch();
            $rnum = $stmt->num_rows;

            if ($rnum == 0) {
                $stmt->close();

                $stmt = $conn->prepare($Insert);
                $stmt->bind_param("ssssiissssssss",$username, $Occupation, $gender, $email, $phoneCode, $phone, $country, $ql, $yn, $ailment, $veg, $exp, $cov, $imp);
                if ($stmt->execute()) {
                    echo "New Record Inserted Sucessfully.";

                }
                else {
                    echo $stmt->error;
                }
            }
            else {
                echo "Someone already registers using this email.";
            }
            $stmt->close();
            $conn->close();
        }
    }
    else {
        echo "All field are required.";
        die();
    }
}
else {
    echo "Submit button is not set";
}
?>
<!DOCTYPE html>
<html>
<style>.button {
  background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 1px 10px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  transition-duration: 0.4s;
  cursor: pointer;
}
.button5 {
  background-color: white;
  color: black;
  border: 2px solid #555555;
}

.button5:hover {
  background-color:  #ffcccc;
  color: white;
}</style>
<head>
</head>
<body>
<div style="text-align:center">  

     <button class="button button5"><a href="logout.php">Logout</a></button>
</div>
</body>
</html>