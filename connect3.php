<?php       

        $fname = $_POST['fname'] ;
        $age = $_POST['age'];
        $gender = $_POST['gender'];
        $country = $_POST['country'];
        $country_code = $_POST['country_code'];
        $email = $_POST['email'];
        $occ = $_POST['occ'];
        $yn = $_POST['yn'];

        $con = new mysqli("localhost" , "root" , "", "database123");
        if($con->connect_error) 
        {
            die("Failed to Connect : ".$con->connect_error);
        } 
        else 
        {
            $stmt = $con->prepare("select * from registration where email = ?");
            $stmt->bind_param("s", $email);
            $stmt->execute();
            $stmt_result = $stmt->get_result();
            if($stmt_result->num_rows > 0)
            { 
                $data = $stmt_result->fetch_assoc();
                echo $data; 

            }
            else {
                echo "Invalid Email";
            }
        }