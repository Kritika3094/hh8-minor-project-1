# SQL Injection Vulnerability Sandbox

## Description / Overview
The **SQL Injection Vulnerability Sandbox** is a simple web-based project created to demonstrate how SQL Injection attacks occur in vulnerable web applications and how they can be prevented using secure coding practices.

The project is implemented as a website using **PHP and MySQL**, where certain parts of the application intentionally handle user input insecurely to demonstrate SQL Injection attacks. A secure implementation is also included to show how the same attacks can be prevented.

This project is intended for **educational and learning purposes**.

---

## Features
- Vulnerable login functionality
- Demonstration of Error-based SQL Injection
- Demonstration of Blind SQL Injection (Boolean-based)
- Secure login using prepared statements
- Clear comparison between vulnerable and secure implementations

---

## Technologies Used
- **Frontend:** HTML, CSS  
- **Backend:** PHP  
- **Database:** MySQL / MariaDB  
- **Web Server:** Apache (XAMPP)  
- **Editor:** Visual Studio Code  
- **Version Control:** Git & GitHub  

---

## Installation / Setup

### Prerequisites
Make sure the following are installed on your system:
- XAMPP (Apache + MySQL)
- Visual Studio Code
- Web browser (Chrome / Edge)

---

### Step-by-Step Setup

1. Clone or download the repository from GitHub
2. Move the project folder to:
   C:\xampp\htdocs\
3. Open **XAMPP Control Panel**
4. Start **Apache** and **MySQL**
5. Open **phpMyAdmin** in the browser:
   http://localhost/phpmyadmin
6. Create a new database:
   CREATE DATABASE vuln_sandbox;

7.Import the file database.sql to create tables and insert sample data

## How to Run the Project

1. Open VS Code

2. Click File → Open Folder

3. Select:

C:\xampp\htdocs\hh8-minor-project-1


4. Open a browser and run the application:

http://localhost/hh8-minor-project-1/login.php

## Usage
Vulnerable Login (SQL Injection Demonstration)

Enter normal credentials to log in

Try SQL Injection payloads to observe vulnerable behavior

Example payloads:

' OR '1'='1
admin' AND '1'='1
admin' AND '1'='2