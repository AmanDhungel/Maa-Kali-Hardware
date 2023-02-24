<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Maakalihardware";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
$selected = mysqli_select_db($conn, 'Maakalihardware');

if(!$selected){
    die('Error Selecteing datbase: ' .mysqli_error($conn));
}else{
    echo"Successfully selected";
}

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";


$fullname = $_POST['fname'];
$Email = $_POST['Email'];
$Message = $_POST['Message'];

$name = $_REQUEST['fname'];
if (empty($name)) {
  echo "Name is empty";
} else {
  echo $name;
}


$sql = $conn->prepare( "INSERT INTO Persons (fullname, Email, Message)
VALUES (? , ?, ?)");
  
$sql->bind_param($fullName, $Email, $Message);  
$sql->execute();
echo "registration successful";
$sql->close();
$conn->close();
// if ($conn->query($sql) === TRUE) {
//     echo "New record created successfully";
//   } else {
//     echo "Error: " . $sql . "<br>" . $conn->error;
//   }
?>

