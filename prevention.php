<!DOCTYPE html>
<html>
<head>
    <title>Preventing SQL Injection</title>
    <link rel="stylesheet" href="css/style.css">

    <style>
       

        body { font-family: Arial; background: #f4f6f8; }
        .box {
            width: 700px;
            margin: 60px auto;
            padding: 25px;
            background: white;
            border-radius: 8px;
        }
        h2 { color: #2c3e50; }
        ul { line-height: 1.8; }
        code {
            background: #eee;
            padding: 4px;
        }
    </style>
</head>

<body>
<div class="box">
    <h2>How to Prevent SQL Injection</h2>

    <p>SQL Injection occurs when user input is directly concatenated into SQL queries. 
    To prevent SQL Injection, secure coding practices must be followed.</p>

    <h3>1️⃣ Use Prepared Statements</h3>
    <code>
    SELECT * FROM users WHERE username = ? AND password = ?
    </code>

    <h3>2️⃣ Input Validation</h3>
    <ul>
        <li>Validate input length</li>
        <li>Reject special characters where not required</li>
    </ul>

    <h3>3️⃣ Password Hashing</h3>
    <ul>
        <li>Never store plain-text passwords</li>
        <li>Use hashing algorithms like bcrypt</li>
    </ul>

    <h3>4️⃣ Least Privilege</h3>
    <ul>
        <li>Database users should have minimal permissions</li>
    </ul>

    <h3>5️⃣ Disable SQL Error Display</h3>
    <ul>
        <li>Errors should not be shown to end users</li>
    </ul>

    <p><b>Conclusion:</b>  
    Secure coding practices eliminate SQL Injection vulnerabilities and protect user data.</p>
    <hr>

<h2>Try Secure Login (SQL Injection Prevention)</h2>

<p>
Below is a secure login form implemented using <b>prepared statements</b>.
Even if an attacker enters SQL Injection payloads, the login will fail.
</p>

<form method="POST" action="secure_result.php">
    <input type="text" name="username" placeholder="Enter username" required>
    <input type="password" name="password" placeholder="Enter password" required>
    <br><br>
    <button type="submit">Secure Login</button>
</form>

<p style="color:green;">
✔ This login is protected against SQL Injection
</p>

</div>
</body>
</html>
