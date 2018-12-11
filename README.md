# Math Express
A great app to learn math.

## How to run

***Note:*** *Make sure you have PHP 7.2, mysql, git and composer installed on your system.*

1. Open a terminal where you want to have your project in this case I assume it is: `~/Projects/`

2. Clone repository using:

   ```bash
   git clone https://github.com/IIINIII/MathExpress.git
   ```

3. Run following commands:

   ```bash
   cd MathExpress
   cp .env.example .env
   mysql -u root -p < db.sql
   php artisan key:generate
   composer update && composer install
   php artisan migrate
   php artisan db:seed
   ```

4. Run `php artisan serve` and go to: [http://localhost:8000](http://localhost:8000)

5. Enjoy!