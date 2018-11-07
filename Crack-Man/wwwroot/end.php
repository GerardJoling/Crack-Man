<link rel="stylesheet" type="text/css" href="css/MainMenu.css">
<?php
$Name = $_POST['name'];
$Score = $_POST['score'];
$Time = $_POST['time'];
?>
<div id="allthethings">
    </br>
    </br>
    </br>
<form action="end2.php" method="post">
        <div id="title">Name: <input type="text" name="name" value="Name"><input type="submit"></div>
        <input readonly type="number" name="score" value="<?php echo $Score; ?>" id="score" style="visibility:hidden;">
        <input readonly type="number" name="time" value="<?php echo $Time; ?>" id="time" style="visibility:hidden;">
</form>
</div>