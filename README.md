Prerequisites:

PHP >= 7.4 (or latest)

Composer

MySQL or compatible database

Apache/Nginx (with PHP support)

Git:

git clone https://github.com/ghaideng/Hotel-Booking.git
cd Hotel-Booking

Install Dependencies:

composer install

Configure the Environment:

Set your database credentials in the configuration file or booking.php file:
DB_HOST=127.0.0.1  
DB_PORT=3306  
DB_DATABASE=hotel_db  
DB_USERNAME=root  
DB_PASSWORD=""

Import the Database:

Open your database client (e.g., phpMyAdmin or MySQL CLI)
Create a new database named hotel_db
Import the SQL dump file:
mysql -u ghaideng -p hotel_db < HotelBooking/bookings.sql

Run the Application:

Ensure your Apache or Nginx server is running
Place the project folder inside your web server's root directory (e.g., htdocs for XAMPP)
Open your browser and go to:
http://localhost/HotelBooking/index.php
