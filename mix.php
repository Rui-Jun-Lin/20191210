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
$sql = "SELECT id, name, email,subject,message FROM new";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["id"]. " - Name: " . $row["name"]. " - Email: " . $row["email"]." - Subject: " . $row["subject"]." - message: " . $row["message"]."<a href='delete.php?id=".$row['id']."'>刪除</a><br>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>