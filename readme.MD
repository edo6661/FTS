# Laravel 12 Project with Livewire 3

This project is built using Laravel 12, Livewire 3, MySQL database, Node.js, and Tailwind CSS.

## Prerequisites

Before running this project, make sure you have the following installed on your system:

-   PHP 8.2 or higher
-   Composer
-   Node.js (with npm)
-   MySQL

## Database Setup

There are two ways to set up the database:

### Option 1: Import existing database

The database has been exported and is included in the root directory as `fts.sql`. You can import this file into your MySQL server before running the application.

```bash
# Import the database
mysql -u your_username -p your_database_name < fts.sql
```

### Option 2: Use migrations and seeders

Alternatively, you can set up the database from scratch using Laravel's migration and seeding features:

1. Configure your database connection in the `.env` file
2. Run migrations to create tables:
    ```bash
    php artisan migrate
    ```
3. Run seeders to populate the database with initial data:
    ```bash
    php artisan db:seed
    ```

Make sure to update your `.env` file with the correct database credentials in either case.

## Installation Steps

Follow these steps to set up and run the project:

1. Clone the repository (if you haven't already):

    ```bash
    git clone [https://github.com/edo6661/FTS]
    cd [FTS]
    ```

2. Install PHP dependencies using Composer:

    ```bash
    composer install
    ```

3. Install Node.js dependencies:

    ```bash
    npm install
    ```

4. Build assets using Tailwind CSS:

    ```bash
    npm run build
    ```

5. Set up your database using one of the methods described in the Database Setup section:

    If setting up from scratch:

    ```bash
    php artisan migrate
    php artisan db:seed
    ```

6. Run the development server:
    ```bash
    php artisan serve
    ```

## Development

For active development, you can use the following command:

```bash
composer dev
```

This will start the development server and watch for any changes in your files.

## Features

-   Built with Laravel 12 framework
-   Interactive UI with Livewire 3
-   Styled with Tailwind CSS
-   MySQL database for data storage
-   Blog functionality

## Authentication

The system comes with a pre-configured admin account that you can use to log in:

-   Email: admin@gmail.com
-   Password: 12345678
