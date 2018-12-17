# Math Express
A great app to learn math.

## How to run

***Note:*** *Make sure you have PHP 7.2, mysql, [git](https://git-scm.com/download/win) and [composer](https://getcomposer.org/download/) installed on your system.*

### First installation

1. Open a terminal where you want to have your project in my case `~/Projects/`

2. Clone repository using:

   ```bash
   git clone https://github.com/IIINIII/MathExpress.git
   ```

3. Run following commands:

   ```bash
   cd MathExpress
   cp .env.example .env // copy .env.example .env for Windows users
   mysql -u root -p < db.sql
   php artisan key:generate
   composer update && composer install
   php artisan migrate
   php artisan db:seed
   ```

4. Run `php artisan serve` and go to: [http://localhost:8000](http://localhost:8000)

5. Enjoy!

### Update

1. Open a terminal where you downloaded project in my case `~/Projects/MathExpress/`
2. Run following commands:

   ```bash
   composer update && composer install
   php artisan migrate:fresh --seed
   ```

3. Run `php artisan serve` and go to: [http://localhost:8000](http://localhost:8000)

4. Enjoy!
