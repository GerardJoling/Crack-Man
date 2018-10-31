<?php
$servername = "localhost";
$username = "id7517507_admin";
$password = "crackman";
$dbname = "id7517507_crackman";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$Name = $_POST['name'];
$Score = $_POST['score'];

$sql = "INSERT INTO Highscores (Name, Score)
VALUES ('$Name', '$Score')";

if ($conn->query($sql) === TRUE) {
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>