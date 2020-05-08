## How to clone and work on your local machine or use it on your host?

- Pre-requirements:
1. Install <a href="https://www.apachefriends.org/ru/index.html">XAMPP</a>
2. Install <a href="https://getcomposer.org/">Composer</a>
3. Install <a href="https://git-scm.com/">GIT</a>

- Steps to run the software on your local machine:
1. Clone this repository to "xampp/htdocs" directory.
2. Open PowerShell and run commands below step by step. 
1. php -r "file_exists('.env') || copy('.env.example', '.env');"
2. composer install -q --no-ansi --no-interaction --no-scripts --no-suggest --no-progress --prefer-dist
3. php artisan key:generate
4. Run MySQL server via XAMPP
5. Create Data Base and name it "laravel"
6. Change properties in .env file as follows<br>
          DB_CONNECTION=mysql<br>
          DB_HOST=127.0.0.1 (or alternative host)<br>
          DB_PORT=3306<br>
          DB_DATABASE=laravel<br>
          DB_USERNAME=root (by default, but if you have another username write it)<br>
          DB_PASSWORD= (by default empty, if you have password write it there)<br>
7. On PowerShell run "php artisan migrate"
8. Run Apache and MySQL Servers and enjoy!


- <b>We are planning to do a Docker image for that app, so in the near future new version will be available on DockerHub also.</b> 
- After release you will need to just pull the image and run container.
- <a href="https://www.docker.com/">Learn more about Docker there!</a>

