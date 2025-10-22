Mayondo Project Documentation
________________________________________
Project Name: Mayondo Author: Sandramags1 GitHub Repository: https://github.com/Sandra950/Mayondo  Database: MySQL (Database Name: sandra) Technologies: HTML, CSS, JavaScript, PHP, MySQL, Bootstrap
________________________________________
1. Project Overview
Mayondo is a simple web application for user registration and login with a dashboard displaying all registered users.
It allows new users to sign up and stores their information securely in a MySQL database. Existing users can log in to access the dashboard.
________________________________________
2. Features
•	User Registration: Collects full name, email, username, and password.
•	Password Validation: Ensures strong passwords and confirmation matching.
•	User Login: Authenticates existing users.
•	Dashboard: Displays all registered users in a styled table.
•	Session Management: Protects dashboard pages and requires login.
•	Responsive Design: Mobile-friendly using Bootstrap.
________________________________________
3. Database Setup
Database Name: sandra
Table Name: users
SQL Code:
CREATE DATABASE sandra;
USE sandra;

CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    fullname VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL UNIQUE,
    username VARCHAR(50) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
________________________________________
4. Project Structure
Mayondo/
├── index.html       # Home page
├── login.html       # Login form
├── signup.html      # Registration form
├── dashboard.php    # Admin dashboard
├── save_user.php    # Save new user to DB
├── login.php        # Handle login requests
├── logout.php       # Handle logout
├── signup.css       # Styles for signup and login
├── login.css        # Styles for login
└── README.md
________________________________________
5. GitHub Upload Instructions
1.	Open terminal and navigate to your project folder.
2.	Initialize git:
git init
3.	Add remote repository:
git remote add origin https://github.com/Sandra950/newrepo.git
4.	Add all files:
git add .
5.	Commit changes:
git commit -m "Initial project upload"
6.	Push to GitHub:
git branch -M main
git push -u origin main
________________________________________
6. Notes
•	Make sure MySQL is running.
•	Update database credentials in save_user.php and login.php if needed.
•	Passwords are hashed using PHP password_hash() for security.
•	The dashboard is protected; only logged-in users can access it.
________________________________________
End of Documentation
