# SQL Injection Vulnerability Sandbox

# SQL Injection Vulnerability Sandbox

## Project Overview
The **SQL Injection Vulnerability Sandbox** is a web-based educational project developed to demonstrate how SQL Injection vulnerabilities occur in web applications and how they can be prevented using secure coding practices.

The project is implemented as a **website using PHP and MySQL**, where user input is intentionally handled insecurely in certain parts to demonstrate SQL Injection attacks, followed by a secure implementation that prevents such attacks. This helps in understanding both the attack mechanism and its mitigation.

---

## Objective
The objectives of this project are:
- To understand how unsanitized user input leads to SQL Injection vulnerabilities
- To demonstrate different types of SQL Injection attacks
- To show how attackers can bypass authentication mechanisms
- To explain the difference between vulnerable and secure implementations
- To implement and demonstrate SQL Injection prevention techniques

---

## Application Flow
Vulnerable Login Page → SQL Injection Demonstration
↓
Prevention Explanation Page
↓
Secure Login (Injection Prevented)


---

## Technologies Used
- **Frontend:** HTML, CSS
- **Backend:** PHP
- **Database:** MySQL / MariaDB
- **Web Server:** Apache (XAMPP)
- **Version Control:** Git & GitHub
- **Development Tool:** VS Code

---

## How to Run the Project

This project requires a local server environment to execute PHP and MySQL.

### Prerequisites
- XAMPP (Apache + MySQL)
- Web Browser (Chrome / Edge)
- Git (optional)

### Setup Steps
1. Download or clone this repository
2. Place the project folder inside:C:\xampp\htdocs\
3. Start **Apache** and **MySQL** from the XAMPP Control Panel
4. Open phpMyAdmin:
http://localhost/phpmyadmin
5. Create a database named:
```sql
vuln_sandbox
Import the file database.sql to create tables and insert sample data

Open the application in a browser:

http://localhost/hh8-minor-project-1/login.php
