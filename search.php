<!DOCTYPE html>
<html>
<head>
    <title>SQL Injection Vulnerability Sandbox</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f6f8;
        }
        .container {
            width: 450px;
            margin: 80px auto;
            padding: 20px;
            background: white;
            border-radius: 8px;
            box-shadow: 0px 0px 10px rgba(0,0,0,0.1);
        }
        h2 {
            text-align: center;
        }
        input {
            width: 95%;
            padding: 10px;
            margin: 10px 0;
        }
        button {
            width: 100%;
            padding: 10px;
            background: #d9534f;
            color: white;
            border: none;
            cursor: pointer;
        }
        table {
            width: 100%;
            margin-top: 15px;
            border-collapse: collapse;
        }
        th, td {
            padding: 8px;
            border: 1px solid #ccc;
            text-align: center;
        }
        th {
            background: #eee;
        }
        .warning {
            color: red;
            font-size: 13px;
            text-align: center;
        }
    </style>
</head>

<body>
<div class="container">
    <h2>User Search</h2>
    <p class="warning">
        ⚠ This application is intentionally vulnerable to SQL Injection (Educational Purpose)
    </p>

    <form method="GET">
        <input type="text" name="search" placeholder="Enter username">
        <button type="submit">Search</button>
    </form>

<?php
include("config.php");

if (isset($_GET['search'])) {
    $search = $_GET['search'];

    // INTENTIONALLY VULNERABLE QUERY
    $query = "SELECT * FROM users WHERE username = '$search'";
    $result = mysqli_query($conn, $query);

    if (!$result) {
        die("<p class='warning'>SQL Error: " . mysqli_error($conn) . "</p>");
    }

    if (mysqli_num_rows($result) > 0) {
        echo "<table>";
        echo "<tr><th>ID</th><th>Username</th><th>Password</th></tr>";

        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td>" . $row['id'] . "</td>";
            echo "<td>" . $row['username'] . "</td>";
            echo "<td>" . $row['password'] . "</td>";
            echo "</tr>";
        }

        echo "</table>";
    } else {
        echo "<p>No user found</p>";
    }
}
?>
</div>
</body>
</html>
