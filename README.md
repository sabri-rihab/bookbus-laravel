# BookBus

## Description
BookBus is a web application built with Laravel for online bus ticket reservation.  
It allows users to search for bus trips, select seats, and book tickets easily.

## Installation Instructions

```bash
# 1. Clone the repository
git clone https://github.com/your-username/bookbus-laravel.git
cd bookbus-laravel

# 2. Install dependencies
composer install

# 3. Create the environment file
cp .env.example .env

# 4. Configure the environment
# Open .env and set your database credentials, for example:
# DB_DATABASE=bookbus
# DB_USERNAME=root
# DB_PASSWORD=

# 5. Generate application key
php artisan key:generate

# 6. Run database migrations
php artisan migrate

# 7. Start the development server
php artisan serve
