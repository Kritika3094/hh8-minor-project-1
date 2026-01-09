<?php
include("config.php");

$query = "SELECT * FROM users";
$result = mysqli_query($conn, $query);

while ($row = mysqli_fetch_assoc($result)) {
    echo "ID: " . $row['id'] . " | Username: " . $row['username'] . "<br>";
}
?>
