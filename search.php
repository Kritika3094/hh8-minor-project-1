<?php
// WARNING: This page is intentionally vulnerable to SQL Injection
include("config.php");

if (isset($_GET['search'])) {
    $search = $_GET['search'];

    $query = "SELECT * FROM users WHERE username = '$search'";
    $result = mysqli_query($conn, $query);

    if (!$result) {
        die("SQL Error: " . mysqli_error($conn));
    }

    while ($row = mysqli_fetch_assoc($result)) {
        echo "Username: " . $row['username'] . "<br>";
    }
}
?>

<form method="GET">
    <input type="text" name="search" placeholder="Search username">
    <button type="submit">Search</button>
</form>
