<?php
echo "THANK ~ ". $_POST["name"]."<br>";
echo "We received your message."."<br>";
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
$sql = "INSERT INTO new (NAME, EMAIL,SUBJECT,MESSAGE) VALUES ('". $_POST["name"]."', '".$_POST["email"]."','".$_POST["subject"]."','".$_POST["message"]."')";
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
if (isset($_POST["submit"])) {
echo "<script>alert('已接收到你的信息'); location.href = 'index.html';</script>";
}
$conn->close();
?>