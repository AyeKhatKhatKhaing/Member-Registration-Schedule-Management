
## Project Setup and Configuration

This project uses Laravel as the framework, PostgreSQL as the database, Redis for caching and queues.

### Prerequisites

- PHP (>= 8.0)
- Composer
- PostgreSQL
- Redis

### Installation Steps

1. **Clone the repository:**

   ```sh
   git clone https://github.com/your-username/your-repo.git
   cd your-repo

2. **Copy the .env file:**

   ```sh
   cp .env.example .env

3. **Install dependencies:**

   ```sh
   composer install

4. **Set up databases:**

   ```sh
   DB_CONNECTION=pgsql
   DB_HOST=127.0.0.1
   DB_PORT=5432
   DB_DATABASE=peasy_code_test
   DB_USERNAME=postgres
   DB_PASSWORD=your-db-password

   REDIS_HOST=127.0.0.1
   REDIS_PASSWORD=null
   REDIS_PORT=6379
   REDIS_CLIENT=phpredis

5. **Generate an application key:**

   ```sh
   php artisan key:generate

6. **Run database migrations:**

   ```sh
   php artisan migrate

7. **Start the development server:**

   ```sh
   php artisan serve

8. **Run the schedule:**

   ```sh
   php artisan schedule:run

9. **Run the queue workers:**

   ```sh
   php artisan queue:work

10. **Run Tests:**

   ```sh
   php artisan test

