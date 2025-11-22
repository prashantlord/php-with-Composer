# PHP with Composer

A minimal and clean PHP project starter that provides a structured foundation for PHP development using Composer. This boilerplate is perfect for beginners and small projects seeking organization without the complexity of heavyweight frameworks.

## Features

- **Composer Autoloading** — PSR-4 compliant autoloading out of the box
- **Environment Variables** — Secure configuration using vlucas/phpdotenv
- **Organized Structure** — MVC-inspired folder layout for clean code organization
- **Simple Routing** — Lightweight routing system in `routes/web.php`
- **Database Connection** — PDO wrapper for safe database interactions
- **Migration System** — Built-in migration tools for database management
- **Public Directory** — Clean separation of public assets from application code
- **Built-in Server** — Works seamlessly with PHP's development server

## Project Structure

```
PHP-WITH-COMPOSER/
├── app/
│   ├── Controllers/
│   ├── Models/
│   └── Helper.php
├── config/
│   ├── Database/
│   ├── Database.php
│   └── Migrations/
│       └── Migrations.php
├── public/
│   ├── css/
│   ├── js/
│   ├── view/
│   └── index.php
├── routes/
│   └── web.php
├── vendor/
├── .env
├── .env.example
├── composer.json
└── README.md
```

## Getting Started

### Installation

1. Clone the repository:
   ```bash
   git clone https://github.com/your-username/PHP-WITH-COMPOSER.git
   cd PHP-WITH-COMPOSER
   ```

2. Install dependencies:
   ```bash
   composer install
   ```

3. Set up environment variables:
   ```bash
   cp .env.example .env
   ```
   Edit `.env` with your database credentials and application settings.

### Running the Server

Start the development server using PHP's built-in server:

```bash
php -S localhost:8000 -t public
```

Or use the Composer script:

```bash
composer serve
```

Visit `http://localhost:8000` in your browser.

## Usage

### Running Migrations

To run migrations, add this to your PHP application:

```php
use Database\Migrations\Migrations;

$migration = new Migrations();
$migration->runMigration();
```

To drop a table:

```php
$migration->dropMigration();
```

### Database Configuration

Configure your database connection in the `.env` file:

```
DB_HOST=localhost
DB_USER=root
DB_PASS=password
DB_NAME=your_database
```

Access the database in your controllers or models using the `Database` class.

### Project Routing

Define your application routes in `routes/web.php`. The application entry point is `public/index.php`.

## Why Use This?

This boilerplate is designed as a lightweight alternative to heavyweight frameworks like Laravel. It's ideal if you want:

- Clean, organized code structure
- Composer autoloading without framework overhead
- Full control over your application
- A starting point for learning PHP best practices
- A foundation for small to medium-sized projects

## License

This project is open-source and free to use.

## Author

Created by **Prash**

Have suggestions or questions? Feel free to reach out:  
📧 [prahsantstha0077@gmail.com](mailto:prahsantstha0077@gmail.com)

---

*This is my first project, and I'm open to suggestions for improvement!*
