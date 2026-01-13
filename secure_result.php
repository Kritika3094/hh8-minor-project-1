<?php
include("config.php");

$username = $_POST['username'];
$password = $_POST['password'];

/*
 SECURE QUERY USING PREPARED STATEMENTS
 SQL Injection payloads are treated as DATA, not SQL
*/
$stmt = $conn->prepare(
    "SELECT * FROM users WHERE username = ? AND password = ?"
);
$stmt->bind_param("ss", $username, $password);
$stmt->execute();

$result = $stmt->get_result();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Secure Login Result</title>
    <style>
        body { font-family: Arial; background: #f4f6f8; }
        .box {
            width: 450px;
            margin: 100px auto;
            padding: 25px;
            background: white;
            border-radius: 8px;
            text-align: center;
        }
        .success { color: green; }
        .fail { color: red; }
    </style>
</head>

<body>
<div class="box">
<?php
if ($result->num_rows > 0) {
    echo "<h2 class='success'>Login Successful</h2>";
    echo "<p>Valid credentials provided.</p>";
} else {
    echo "<h2 class='fail'>Login Failed</h2>";
    echo "<p>Invalid credentials or SQL Injection attempt detected.</p>";
}
?>
</div>
</body>
</html>
