A Complete Hostel Management Solution
📌 Table of Contents
Project Overview

Features

Technologies Used

Installation Guide

Database Setup

Usage

Screenshots

Contributing

License

🌐 Project Overview
The Washington Hostel Management System is a web-based application designed to streamline hostel operations, including:
✔ Student/guest registration
✔ Room allocation & management
✔ Payment tracking & receipt generation
✔ Real-time reporting & analytics

Built with PHP, MySQL, and Bootstrap 5, this system replaces manual record-keeping with an efficient digital solution.

✨ Features
Admin Dashboard
View total users, occupancy rates, and revenue.

Quick access to all modules.

User Management
Add, edit, or delete student/guest records.

Search by name, room number, or status.

Room Management
Track room availability (available/occupied/maintenance).

Assign rooms to guests.

Payments & Receipts
Record payments.

Generate printable PDF receipts.

Reports
Financial summaries (daily/weekly/monthly).

Export to Excel/PDF.

Security
Admin login with session protection.

🛠 Technologies Used
Category	Technologies
Frontend	HTML5, CSS3, Bootstrap 5, JavaScript, jQuery
Backend	PHP (PDO for MySQL)
Database	MySQL
Libraries	DataTables.js, Font Awesome, Chart.js
📥 Installation Guide
Prerequisites
Web server (Apache/Nginx)

PHP 7.4+

MySQL 5.7+

Steps
Clone the repository:

bash
git clone https://github.com/dev-ramadan1/Hostel-management-system.git

Configure the database:

Import the SQL file (database/washington_hostel.sql).

Update includes/db.php with your MySQL credentials.

Run the application:

Access via http://localhost/washington-hostel.

🗃 Database Setup
Tables Structure
users

id, name, email, phone, room_no, check_in, check_out, fees, status

payments

id, user_id, amount, date, receipt_no

rooms

id, room_no, capacity, status

admin

id, username, password (Default: admin/admin123)

Run the following SQL to set up:

sql
CREATE DATABASE washington_hostel;
USE washington_hostel;
-- Paste the SQL schema from 'database/washington_hostel.sql'
🚀 Usage
Login

Go to http://localhost/washington-hostel/login.php.

Use default credentials:

Username: admin

Password: admin123

Manage Users

Navigate to Users → Add/Edit/Delete.

Generate Receipts

Go to Receipts → Enter payment details → Print.

View Reports

Check Reports for financial/occupancy analytics.

📸 Screenshots

Dashboard
![Screenshot 2025-07-05 161000](https://github.com/user-attachments/assets/1d91f8cc-0244-4fa5-b210-db58bb4887a6)

User Management
![Screenshot 2025-07-05 161255](https://github.com/user-attachments/assets/0b2b28e9-df82-41db-9dd6-b503fc3d1265)


Receipt Generation
![Screenshot 2025-07-05 161521](https://github.com/user-attachments/assets/10526c5a-fd35-4647-9c9e-007609fd2d5e)


🤝 Contributing
Fork the repository.
Feel free ro make changes or add some features to this repository.

📜 License
This project is licensed under the MIT License. See LICENSE for details.

📞 Contact
For questions or support, email: devramadangh@gmail.com
