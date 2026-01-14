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
<head><link rel="stylesheet" href="css/style.css">


    <title>Secure Login Result</title>
    
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
