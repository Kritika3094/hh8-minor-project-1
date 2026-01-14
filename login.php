<!DOCTYPE html>
<html>
<head>
    <title>Login - SQL Injection Demo</title>
    
    <style>
        body { font-family: Arial; background: #f4f6f8; }
        .box {
            width: 350px;
            margin: 100px auto;
            padding: 20px;
            background: white;
            border-radius: 8px;
        }
        input, button {
            width: 100%;
            padding: 10px;
            margin-top: 10px;
        }
        button { background: #007bff; color: white; border: none; }
        .warning { color: red; font-size: 13px; }
    </style>
</head>

<body>
<div class="box">
    <h2>Login</h2>
    <script>
function showInfo() {
    alert("This page is intentionally vulnerable for learning purposes.");
}
</script>

    <p class="warning">

        ⚠ This login page is intentionally vulnerable to SQL Injection
    </p>

    <form method="POST" action="result.php">
        <input type="text" name="username" placeholder="Enter username" required>
        <input type="text" name="password" placeholder="Enter password" required>
        <button onclick="showInfo()">Why is this vulnerable?</button>

    </form>
</div>
</body>
</html>
