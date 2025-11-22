PHP With Composer — Simple Project Setup

A minimal and clean PHP project starter built by Prash.
This setup provides:

* A structured folder layout (similar to modern frameworks)
* Autoloading using Composer (PSR-4)
* Environment variable support via vlucas/phpdotenv
* Public directory for clean server routing
* Organized controllers, models, routes, and migrations
* Simple database connection + migration system
  
Project Structure

  PHP-WITH-COMPOSER/
├── app/
│   ├── Controllers/
│   ├── Models/
│   └── Helper.php
│
├── config/
│
├── Database/
│   ├── Database.php
│   └── Migrations/
│       └── Migrations.php
│
├── public/
│   ├── css/
│   ├── js/
│   ├── view/
│   └── index.php      ← Application entry point
│
├── routes/
│   └── web.php
│
├── vendor/            ← Composer dependencies
│
├── .env               ← Environment variables
├── .env.example
├── composer.json
└── README.md

Features

✔ Composer Autoloading (PSR-4)
✔ Environment variable support using Dotenv
✔ Organized MVC-like folder layout
✔ Simple routing file (routes/web.php)
✔ Database wrapper + PDO connection class
✔ Basic migration system (Database/Migrations/Migrations.php)
✔ Public directory for asset servings
✔ Works with PHP built-in server

Installation
Clone the repository:
$ git clone https://github.com/your-username/PHP-WITH-COMPOSER.git
$ cd PHP-WITH-COMPOSER

Install dependencies:
$ composer install

Running the Development Server
Using PHP built-in server:
$ php -S localhost:8000 -t public

Or use Composer scripts:
$ composer serve

Running Migrations
Inside your PHP file:

# use Database\Migrations\Migrations;

# $mig = new Migrations();
# $mig->runMigration();

To drop the table:
# $mig->dropMigration();

Purpose

This project serves as a simple boilerplate for PHP development using Composer, ideal for beginners or small projects that want:

* Autoloading
* Environment variables
* Organized structure
* PDO database handling
* Clean entry point
* Created by Prash as a lightweight alternative to heavy frameworks like Laravel.

📄 License
This project is open-source and free to use.

** This is my first project so i dont really know much, Open to suggesions. **
** Contact: prahsantstha0077@gmail.com **  