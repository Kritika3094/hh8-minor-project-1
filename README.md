# SQL Injection Vulnerability Sandbox

## What is this Project?
This project is a **simple website** created to show:

1. **How SQL Injection attacks happen**
2. **How SQL Injection can be prevented**

It contains:
- A **vulnerable login page** (attack works)
- A **secure login page** (attack fails)
- Explanation of prevention techniques

This project is only for **learning and educational purposes**.

---

## What You Will Learn
- What SQL Injection is
- How attackers bypass login forms
- Difference between **vulnerable vs secure code**
- How prepared statements prevent SQL Injection
- Basic PHP + MySQL web security concepts

---

## Technologies Used
- **HTML / CSS** – page design
- **PHP** – backend logic
- **MySQL** – database
- **Apache (XAMPP)** – server to run PHP
- **VS Code** – code editor
- **Git & GitHub** – version control

---

## Requirements (Install These First)

Before running the project, make sure you have:

- **XAMPP** (Apache + MySQL)
- **VS Code** (optional but recommended)
- A web browser (Chrome / Edge / Firefox)

---

## How to Install & Setup

### Step 1 – Download the Project
Download ZIP from GitHub **or** clone the repository.

---

### Step 2 – Move Project Folder
Move the project folder to:
C:\xampp\htdocs\


---

### Step 3 – Start Server
Open **XAMPP Control Panel** and click:

- Start **Apache**
- Start **MySQL**

Both should turn **green**.

---

### Step 4 – Create Database
Open browser and go to:

http://localhost/phpmyadmin


Then:

1. Click **New**
2. Create database named:


---

### Step 5 – Import Tables
- Select `vuln_sandbox` database
- Click **Import**
- Choose file `database.sql`
- Click **Go**

Now your database is ready.

---

## How to Run the Project

Open your browser and type:

http://localhost/hh8-minor-project-1/login.php


Press **Enter**.

If you see a login page, the project is running correctly 🎉

---

## How to Use the Project

### 1. Vulnerable Login Page
This page allows SQL Injection.

Try normal login:
admin / admin123


Try SQL Injection payloads:
' OR '1'='1
admin' AND '1'='1
admin' AND '1'='2


Observe:
- Login bypass
- Success / failure behavior

---

### 2. Prevention Page
Go to:

prevention.php


Here you will see:
- Explanation of SQL Injection
- Secure login form
- Prepared statement protection

---

## Project Structure
hh8-minor-project-1/
│
├── login.php → Vulnerable login page
├── result.php → Vulnerable login result
├── search.php → Error-based SQL Injection demo
│
├── prevention.php → Explanation + secure login form
├── secure_result.php → Secure login result
│
├── config.php → Database connection
├── database.sql → Tables & sample data
├── README.md