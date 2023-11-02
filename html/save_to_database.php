<?php
$servername = "localhost"; // Replace with your server name
$username = "root";
$password = "uthpala";
$dbname = "signin_paytime";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
<?php
// This part should go after establishing the connection

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fullname = $_POST['fName'];
    $businessName = $_POST['bName'];
    $email = $_POST['mail'];
    $phone_number = $_POST['pNum'];
    $address = $_POST['add'];
    $district = $_POST['dis'];
    $country = $_POST['coun'];
    $username = $_POST['uName'];
    $userpass = $_POST['pass'];
    $registration = $_POST['reg'];

    $sql = "INSERT INTO your_table_name (fName, bName, mail, pNum, add, dis, coun, uName, pass, reg) 
            VALUES ('$fullname', '$businessName', '$email', '$phone_number', '$address', '$district', '$country', '$username', '$userpass', '$registration')";

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>