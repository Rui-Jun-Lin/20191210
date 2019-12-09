<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "newblance";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$sql = "UPDATE `new` SET `EMAIL` = 'YES' WHERE `ID` = 32";
if ($conn->query($sql) === TRUE) {
    echo "record update successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>