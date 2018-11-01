﻿<link rel="stylesheet" type="text/css" href="css/MainMenu.css">
<body>
<?php
$servername = "localhost";
$username = "id7517507_admin";
$password = "crackman";
$database = "id7517507_crackman";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
?>
    <div id="allthethings">
        <div id="title" onclick="location.href='index.html';"><h3>Crack-Man The Game</h3></div>
        <br />
        <?php
        $sql = "SELECT * FROM Highscores ORDER BY Score DESC LIMIT 10";
		$i = 1;
        if($result = mysqli_query($conn, $sql)){
        if(mysqli_num_rows($result) > 0){
		    echo '<div id="high"><h1>Highscores</h1></div>';
            while($row = mysqli_fetch_array($result)){
			echo '<div id="score"><p>#' . $i . '    ' . $row['Score'] . ' ' . $row['Name'] . '</p></div>';
			$i++;
            }

        // Free result set
        mysqli_free_result($result);
        } else{
        echo "No records matching your query were found.";
        }
        } else{
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
        }

        // Close connection
        mysqli_close($conn);
        ?>
    </div>

</body>