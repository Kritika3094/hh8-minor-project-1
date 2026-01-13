# SQL Injection Vulnerability Sandbox

## 📌 Project Overview
The **SQL Injection Vulnerability Sandbox** is a deliberately vulnerable web-based application designed to demonstrate how SQL Injection (SQLi) attacks occur in real-world websites when user input is not properly sanitized.  

This project simulates common insecure coding practices found in web applications and allows learners to safely explore, exploit, and understand SQL Injection vulnerabilities and their defenses.

The application is built as a **simple website** using PHP and MySQL, making it easy to understand how backend logic interacts with user input and databases.

---

## 🎯 Objective
The primary objectives of this project are:
- To understand how **unsanitized user input** leads to SQL Injection vulnerabilities
- To demonstrate **error-based** and **blind SQL Injection** attacks
- To observe how attackers manipulate SQL queries through form inputs
- To learn **secure coding practices** to prevent SQL Injection

---

## 🌐 Application Description
This project functions as a small website with the following features:
- A user search page that interacts with a backend database
- Direct database queries using user-supplied input
- Visible SQL error messages for learning purposes
- No input validation (intentionally vulnerable)

The website allows users to enter input into form fields, which are then directly concatenated into SQL queries. This insecure design helps demonstrate how attackers exploit SQL Injection vulnerabilities.

---

## ⚙️ How to Run the Project
1. Install **XAMPP** and start Apache and MySQL
2. Clone or download this repository
3. Place the project folder inside:
