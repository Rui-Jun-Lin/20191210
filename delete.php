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
$sql = "DELETE FROM new WHERE id = '".$_GET["id"]."'";
if ($conn->query($sql) === TRUE) {
    echo "Record deleted successfully";
	header("location:mix.php");//處理資料後，轉向到其他頁面
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>