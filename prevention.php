<!DOCTYPE html>
<html>
<head>
    <title>Preventing SQL Injection</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            padding: 0;
        }

        .box {
            width: 70%;
            margin: 60px auto;
            padding: 25px;
            background: white;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }

        h2, h3 {
            color: #2c3e50;
        }

        ul {
            line-height: 1.8;
        }

        code {
            background: #eee;
            padding: 4px 6px;
            border-radius: 4px;
        }

        input {
            width: 60%;
            padding: 8px;
            margin: 6px 0;
        }

        button {
            padding: 8px 15px;
            background-color: green;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        button:hover {
            background-color: darkgreen;
        }

        a {
            color: green;
            text-decoration: none;
        }

        a:hover {
            text-decoration: underline;
        }

        .success {
            color: green;
            font-weight: bold;
        }

        hr {
            margin: 30px 0;
        }
    </style>
</head>

<body>

<div class="box">

    <h2>How to Prevent SQL Injection</h2>

    <p>
        SQL Injection occurs when user input is directly concatenated into SQL queries.
        To prevent SQL Injection, secure coding practices must be followed.
    </p>

    <h3>1. Use Prepared Statements</h3>
    <code>
        SELECT * FROM users WHERE username = ? AND password = ?
    </code>

    <h3>2. Input Validation</h3>
    <ul>
        <li>Validate input length</li>
        <li>Reject special characters where not required</li>
    </ul>

    <h3>3. Password Hashing</h3>
    <ul>
        <li>Never store plain-text passwords</li>
        <li>Use hashing algorithms like bcrypt</li>
    </ul>

    <h3>4. Least Privilege</h3>
    <ul>
        <li>Database users should have minimal permissions</li>
    </ul>

    <h3>5. Disable SQL Error Display</h3>
    <ul>
        <li>Errors should not be shown to end users</li>
    </ul>

    <p>
        <b>Conclusion:</b> Secure coding practices eliminate SQL Injection vulnerabilities
        and protect user data.
    </p>

    <hr>

    <h2>Try Secure Login (SQL Injection Prevention)</h2>

    <p>
        Below is a secure login form implemented using <b>prepared statements</b>.
        Even if an attacker enters SQL Injection payloads, the login will fail.
    </p>

    <form method="POST" action="secure_result.php">
        <input type="text" name="username" placeholder="Enter username" required><br>
        <input type="password" name="password" placeholder="Enter password" required><br><br>
        <button type="submit">Secure Login</button>
    </form>

    <p class="success">
        ✔ This login is protected against SQL Injection
    </p>

    <hr>

    <h3>More Information</h3>
    <ul>
        <li><a href="https://en.wikipedia.org/wiki/SQL_injection" target="_blank">
            Wikipedia – SQL Injection
        </a></li>

        <li><a href="https://portswigger.net/web-security/sql-injection" target="_blank">
            PortSwigger SQL Injection Guide
        </a></li>

        <li><a href="https://owasp.org/www-community/attacks/SQL_Injection" target="_blank">
            OWASP SQL Injection
        </a></li>

        <li><a href="https://bobby-tables.com/" target="_blank">
            Bobby Tables
        </a></li>
    </ul>

</div>

</body>
</html>
