<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "contactform";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$sql = "INSERT INTO user (name, email,subject ,message)
VALUES ('$_POST[name]',  '$_POST[email]','$_POST[subject]', '$_POST[message]' )";


if ($conn->query($sql) === TRUE) {
    ?><center> <?php echo 'your message is sent succesfully ,please wait from us :)'; ?> <center><?php
  //echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
