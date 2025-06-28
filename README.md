A simple vanilla PHP project for testing functionality, learning concepts, or building basic web applications without frameworks.

## 📌 File Structure
login-system/
├── config/
│   └── database.php
├── css/
│   └── style.css
├── includes/
│   └── functions.php
├── login.php
├── dashboard.php
└── logout.php


## 🚨 Security Features Implemented:
- Prepared Statements: Uses PDO prepared statements to prevent SQL injection
- Password Hashing: Uses PHP's password_hash() and password_verify()
- Input Sanitization: All user inputs are sanitized before processing
- Session Management: Proper session handling with session regeneration
- CSRF Protection: Could be added with tokens (not shown here for brevity)
- Secure Password Storage: Passwords are never stored in plain text
- Error Handling: Proper error handling without exposing sensitive information
- Output Escaping: Uses htmlspecialchars() when outputting user data

This implementation provides a clean, modular, and secure login system that follows current best practices.


## 🚨 Requirements
- PHP >= 8.2.12
- XAMPP
