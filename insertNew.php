<?php
$servername = "localhost";
$username = "student";
$password = "website";
$dbasename = "firstlab";

//create connection
$mysqli = new mysqli($servername, $username, $password, $dbasename);

//check connection
if ($mysqli->connect_errno) {
printf("COnnect failed: %s\n", $mysqli->connect_error);
exit();
}

    $com = $_POST['com'];
    $stmt = $mysqli->prepare("INSERT into comments (comment) VALUES (?)");
    $stmt->bind_param('s', $com);
    $sucess = $stmt->execute();

    $stmt->close();
    $mysqli->close();
?>
