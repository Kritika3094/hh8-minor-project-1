<?php
include("config.php");

$username = $_POST['username'];
$password = $_POST['password'];

// INTENTIONALLY VULNERABLE QUERY
$query = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
$result = mysqli_query($conn, $query);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login Result</title>
    

    <style>
        body { font-family: Arial; background: #eef2f3; }
        .box {
            width: 500px;
            margin: 80px auto;
            padding: 20px;
            background: white;
            border-radius: 8px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 15px;
        }
        th, td {
            border: 1px solid #ccc;
            padding: 8px;
            text-align: center;
        }
        th { background: #f0f0f0; }
        a { display: inline-block; margin-top: 15px; }
       

    </style>
</head>

<body>
<div class="box">
    <h2>Login Result</h2>

<?php
if (!$result) {
    die("SQL Error: " . mysqli_error($conn));
}

if (mysqli_num_rows($result) > 0) {
    echo "<p><b>Login Successful!</b></p>";
    echo "<table>";
    echo "<tr><th>Username</th><th>Password</th></tr>";

    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<td>".$row['username']."</td>";
        echo "<td>".$row['password']."</td>";
        echo "</tr>";
    }
    echo "</table>";
} else {
    echo "<p><b>Login Failed</b></p>";
}
?>

<a href="prevention.php">➡ How to Prevent SQL Injection</a>
</div>
</body>
</html>
