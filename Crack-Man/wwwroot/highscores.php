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
        <div id="left"></div>
        <div id="title" onclick="location.href='index.html';"><h3>Crack-Man The Game</h3></div>
        <div id="play" onclick="location.href='game.html';"><p>PLAY GAME</p></div>
        <div id="options" onclick="location.href='highscores.php';"><p>HIGHSCORES</p></div>
        <div id="credits" onclick="location.href='index.html';"><p>CREDITS</p></div>
        <div id="right"></div>
        <div id="exit" onclick="window.close();"></div>
        <div id="circle"></div>
        <br />
        <br />
        <br />
        <br />
        <br />
        <br />
        <br />
        <br />
        <br />
        <br />
        <?php
        $sql = "SELECT * FROM Highscores ORDER BY Score DESC LIMIT 10";
        if($result = mysqli_query($conn, $sql)){
        if(mysqli_num_rows($result) > 0){
        echo "<table>
            ";
            echo "
            <tr>
                ";
                echo "
                <th>Name</th>";
                echo "
                <th>Score</th>";
                echo "
            </tr>";
            while($row = mysqli_fetch_array($result)){
            echo "
            <tr>
                ";
                echo "
                <td>" . $row['Name'] . "</td>";
                echo "
                <td>" . $row['Score'] . "</td>";
                echo "
            </tr>";
            }
            echo "
        </table>";
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