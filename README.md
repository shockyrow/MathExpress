# Math Express
A great app to learn math.

## How to run

### With Docker

***Note:*** *Make sure you have [Docker](https://www.docker.com/) and [Docker Compose](https://docs.docker.com/compose/install/) installed on your system.*

1. Open a terminal where you downloaded project in my case `~/Projects/MathExpress/`

2. Run following commands:

   ```bash
   docker-compose up -d --build
   ```

3. Now go to: [http://localhost:8080](http://localhost:8080)

4. Enjoy!

### Without Docker

***Note:*** *Make sure you have [PHP 7.2](http://php.net/), [mysql](https://www.mysql.com/), [git](https://git-scm.com/) and [composer](https://getcomposer.org/) installed on your system.*

#### First installation

1. Open a terminal where you want to have your project in my case `~/Projects/`

2. Clone repository using:

   ```bash
   git clone https://github.com/IIINIII/MathExpress
   ```

3. Run following commands:

   ```bash
   cd MathExpress/code
   cp .env.example .env # copy .env.example .env for Windows users
   mysql -u root -p < db.sql
   php artisan key:generate
   composer update && composer install
   php artisan migrate
   php artisan db:seed
   ```

4. Run `php artisan serve` and go to: [http://localhost:8000](http://localhost:8000)

5. Enjoy!

#### Update

1. Open a terminal where you downloaded project in my case `~/Projects/MathExpress/`
2. Run following commands:

   ```bash
   git pull
   composer update && composer install
   php artisan migrate:fresh --seed
   ```

3. Run `php artisan serve` (if you are not using docker).

4. Go to: [http://localhost:8000](http://localhost:8000)

5. Enjoy!
