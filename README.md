# Construction-Website

This is a website for a construction company built using PHP, JavaScript, jQuery, CSS, HTML, Bootstrap, Swiper library and Chart.js. It allows users to get information about the company, estimate construction cost using a estimation model and also store them as favorites for later use.

## Installation

1. Install XAMPP on your computer by following the instructions provided in the XAMPP installation guide.
2. Copy the entire source folder 'FutureEdifice' to the htdocs folder in your XAMPP installation directory. For example, on Windows, the path might be C:/xampp/htdocs.
3. Import the provided .sql file into your MySQL database using phpMyAdmin.
4. Open the db_connect.php file from the folder 'FutureEdifice' and update the database connection details to match your own.
5. Start the Apache and MySQL services in the XAMPP Control Panel.
6. Open a web browser and navigate to `http://localhost/FutureEdifice/landing.php` to view the website.
## Configure sendmail in php.ini
1. Open the php.ini file in a text editor. On a Windows machine running XAMPP, the php.ini file is typically located in C:\xampp\php.
2. Find the sendmail_path setting and set it to the path of the sendmail program on your system. On a Windows machine running XAMPP, the sendmail program is located in C:\xampp\sendmail.
`sendmail_path = "C:\xampp\sendmail\sendmail.exe"`

## Features

- Homepage showcasing company's services and contact information.
- About Us page with company's vision, core values, and mission.
- Project page with detailed information about completed projects.
- Construction cost estimation feature to help users calculate the cost of their project.
- Login/Signup page for users to create a account or login to existing one.
- My Account page to allow users to view their account details or edit them.
- Favorites feature to allow users who have a account to save their project estimations for later.

## Used By

This project is used by the following company:

- Real Enterprises

