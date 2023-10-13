<?php
    // Get data from the form
    $fullName = $_POST['fname'];
    $businessName = $_POST['bname'];
    $email = $_POST['email'];
    $phoneNumber = $_POST['pnumber'];
    $address = $_POST['address'];
    $district = $_POST['district'];
    $country = $_POST['country'];
    $userName = $_POST['uname'];
    $password = $_POST['password'];

    // Create a database connection
    $conn = new mysqli('localhost', 'root', '', 'signin_paytime');

    // Check for a successful connection
    if ($conn->connect_error) {
        die('Connection failed: '.$conn->connect_error);
    }else{
        $stmt =$conn->prepare("insert into registration(fName,bName,mail,pNum,add,dis,coun,uName,pass )
            values(?,?,?,?,?,?,?,?,?)");
        $stmt->bind_param("sssssssss",$fullName, $businessName, $email, $phoneNumber, $address, $district, $country, $userName, $password);
        $stmt->execute();
        echo "registration successfully...";
        $stmt->close();
        $conn->close();

    }


    
?>
