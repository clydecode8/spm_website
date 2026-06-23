# Booking Management System

This system was developed during my SPM studies as my first major software project. Built before the rise of AI-assisted development tools, this project represents my early journey of learning programming through documentation, Stack Overflow discussions, developer communities, and technical blogs.

Debugging issues, researching solutions, and understanding code independently helped strengthen my problem-solving mindset. Despite being an early-stage project, it introduced me to real-world software development concepts such as database design, requirement analysis, user workflows, CRUD operations, and application testing.

The experience from building this system became the foundation for my later projects involving full-stack development, AI applications, and cloud-based systems. A web-based booking management system developed as my SPM (Sijil Pelajaran Malaysia) final project.
This project was built to digitalize the traditional booking process by allowing users to make reservations online while providing administrators with tools to manage booking records efficiently.

🏆 **Achievement: Awarded A+ for SPM Computer Science Project**

---

## Overview

The Booking Management System focuses on solving problems commonly found in manual reservation workflows, such as handwritten records, scheduling mistakes, and inefficient booking management.

The system provides a simple platform where customers can submit bookings, while administrators can organize and monitor booking information through a centralized system.

This project represents my early foundation in software development, covering requirements analysis, database design, user interface development, and CRUD-based application logic.

---

## Features

### User Features

* Create new bookings through an online form
* View booking information
* Submit personal and reservation details
* Simple and user-friendly interface

### Administrator Features

* Manage customer booking records
* Add, update, and delete booking information
* View stored reservation data
* Maintain booking records digitally

---

## Technologies Used

* HTML
* CSS
* JavaScript
* PHP
* MySQL

---

## Key Learning Outcomes

Through this project, I gained experience in:

* Designing a database-driven web application
* Implementing CRUD operations
* Connecting frontend pages with backend logic
* Handling form submissions and user input
* Managing data using SQL queries
* Understanding basic software development lifecycle concepts

This project became my starting point in full-stack web development and strengthened my interest in building practical software solutions.

---

## Installation & Setup

### 1. Clone the Repository

```bash
git clone https://github.com/clydecode8/spm_website.git
```

Navigate into the project folder:

```bash
cd spm_website
```

---

### 2. Setup Local Server

Install a local PHP server environment:

* XAMPP
* WAMP
* Laragon

Move the project folder into your server directory.

Example for XAMPP:

```
C:\xampp\htdocs\spm_website
```

---

### 3. Setup Database

1. Start Apache and MySQL from XAMPP Control Panel

2. Open phpMyAdmin:

```
http://localhost/phpmyadmin
```

3. Create a new database

4. Import the provided `.sql` database file

5. Update database connection settings if required:

```php
$servername = "localhost";
$username = "root";
$password = "";
$database = "your_database_name";
```

---

### 4. Run the Application

Open your browser:

```
http://localhost/spm_website
```

The booking system should now be running locally.

---

## Author

**Clyde Han**

* GitHub: https://github.com/clydecode8
* Portfolio: https://clydekok.vercel.app/
