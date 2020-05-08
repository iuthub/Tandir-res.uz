<p align="center"><img src="./assets/tandir.png" width="800"></p>
<p align="center">
	<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
	<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
	<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
	<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>


## About Tandir

Tandir is a software solution for cafe and restourant businesses made in Laravel framework and made with love by Techieland<sup>tm</sup>
- Simple
- Powerful
- User-friendly
- Open source

## How to use it as a Client

- It's really easy! 
- Reserve a table and pre-order dishes righ away from site!
- You can do it in 3 steps!

1. Open Home page, click red "Order Now" button
2. Fill the form for reservation and go down.
3. If you want, you can pre-order dishes for a reserved day or just click "Comlete" button and complete reservation process!

## How to use it as an Administrator

1. Open "./admin" route
2. Log-in.
3. View and analyse all tables about your business.
4. Create/edit/delete some features from your products list.
5. Create/edit/delete users and admins.
6. Approve the order and send email service.

## How to clone and work on your local machine or use it on your host?

- Pre-requirements:
1. Install <a href="https://www.apachefriends.org/ru/index.html">XAMPP</a>
2. Install <a href="https://getcomposer.org/">Composer</a>
3. Install <a hreg="https://git-scm.com/">GIT</a>

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


## Migrations

<p align="center"><img src="./assets/resto.png"></p>

<h3>Tools used</h3>
<ol>
	<li><a href="https://dbdiagram.io/">dbdiagram.io - web-site for drawing EER Diagrams</a></li>
	<li><a href="https://phpMyAdmin.net">phpMyAdmin</a></li>
	<li><a href="dev.mysql.com">MariaDB | MySQL</a></li>
	<li><a href="https://Mockgaroo.com/">Mockgaroo - generator of dump information</a></li>
</ol>


<h3>Tables</h3>

<table>
<caption>Roles</caption>
    <tbody>
        <tr>
            <td><b>id</b></td>
        </tr>
        <tr>
            <td>role</td>
        </tr>
        <tr>
            <td>is_admin</td>
        </tr>
    </tbody>
</table>

<table>
    <caption>users</caption>
    <tbody>
        <tr>
            <td><b>id</b></td>
        </tr>
        <tr>
            <td>image</td>
        </tr>
        <tr>
            <td>role_<b>id</b></td>
        </tr>
        <tr>
            <td>username</td>
        </tr>
        <tr>
            <td>password</td>
        </tr>
        <tr>
            <td>first_name</td>
        </tr>
        <tr>
            <td>last_name</td>
        </tr>
        <tr>
            <td>phone_number</td>
        </tr>
        <tr>
            <td>email</td>
        </tr>
    </tbody>
</table>

<table>
    <caption>category</caption>
    <tbody>
        <tr>
            <td><b>id</b></td>
        </tr>
        <tr>
            <td>name</td>
        </tr>
        <tr>
            <td>description</td>
        </tr>
        <tr>
            <td>portion_units</td>
        </tr>
    </tbody>
</table>

<table>
    <caption>meals</caption>
    <tbody>
        <tr>
            <td><b>id</b></td>
        </tr>        
        <tr>
            <td>name</td>
        </tr>
        <tr>
            <td>image</td>
        </tr>
        <tr>
            <td>category_<b>id</b></td>
        </tr>
        <tr>
            <td>price</td>
        </tr>
        <tr>
            <td>portion</td>
        </tr>
        <tr>
            <td>is_available</td>
        </tr>
        <tr>
            <td>ingredients</td>
        </tr>
    </tbody>
</table>

<table>
    <caption>orders</caption>
    <tbody>
        <tr>
            <td><b>id</b></td>
        </tr>
            <td>first_name</td>
        </tr>
        <tr>
            <td>email</td>
        </tr>
        <tr>
            <td>phone_number</td>
        </tr>
        <tr>
            <td>number_of_people</td>
        </tr>
        <tr>
            <td>date</td>
        </tr>
        <tr>
            <td>time</td>
        </tr>
        <tr>
        <tr>
            <td>total_price</td>
        </tr>
            <td>is_approved</td>
        </tr>
        <tr>
            <td>approved_by</td>
        </tr>
    </tbody>
</table>

<table>
    <caption>meal_orders</caption>
    <tbody>
        <tr>
            <td><b>id</b></td>
        </tr>
        <tr>
            <td>order_<b>id</b></td>
        </tr>
        <tr>
            <td>meal_<b>id</b></td>
        </tr>
        <tr>
            <td>quantity</td>
        </tr>
        <tr>
            <td>order_time</td>
        </tr>
        <tr>
            <td>total_price</td>
        </tr>
    </tbody>
</table>