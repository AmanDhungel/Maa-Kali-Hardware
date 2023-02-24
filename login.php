<?php
  $username = $_POST['username'];
  $password = $_POST['password'];

  $servername = "localhost";
  $dbusername = "root";
  $dbpassword = "";
  $dbname = "logindb";

  // Create connection
  $conn = new mysqli($servername , $dbusername, $dbPassword, $dbname);

  // Check connection
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

  $sql = "SELECT * FROM loginpage WHERE username='$username' AND password='$password'";
  $result = $conn->query($sql);

  if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "Welcome " . $row["username"] . "<br>";
    }
  } else {
    echo "Invalid username or password";
  }
  $conn->close();
?>
