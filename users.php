<!DOCTYPE html>
<html>
<head>
<title> my first page </title>
</head>
<?php 
include connect.php;

$sql = "SELECT ID, firstname, surname, email FROM users";
$result = $mysqli->query ($sql);
if ($result){ 
if ($result->num_rows_ > 0 {
                                echo "<table>";
                                echo "<tr>";
                                echo "<th>ID</th>";
                                echo "<th>Firstname</th>";
                                echo "<th>Surname</th>";
                                echo "<th>Email</th>";
                                echo "</tr>";

</body>
</html>
