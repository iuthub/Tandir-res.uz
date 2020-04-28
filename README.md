<p align="center"><img src="./assets/Techieland3.svg" w<b>id</b>th="800"></p>
<p align="center">
	<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
	<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
	<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
	<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>


## About Techieland

Techieland is a software solution for cafe and restourant businesses.
- Simple
- Powerfli
- User-friendly
- Free

## Migrations

<p align="center"><img src="./database/db-for-project/ip-project-restourant.png"></p>


<h3>Tools used</h3>
<ol>
	<tr><td><a href="https://dbdiagram.io/">dbdiagram.io</a> - web-site for drawing EER Diagrams</td></tr>
	<tr><td><a href="https://phpMyAdmin.net">phpMyAdmin</a></td></tr>
	<tr><td><a href="dev.mysql.com">MariaDB | MySQL</a></td></tr>
	<tr><td><a href="https://Mockgaroo.com/">Mockgaroo - generator of dump information</a></td></tr>
</ol>


<h3>Tables</h3>

<table>
    <caption>Roles</caption>
</table>
<table>
    <tbody>
        <tr>
            <td><b>id</b></td>
        </tr>
        <tr>
            <td>role</td>
        </tr>
        <tr>
            <td>edit_privilege</td>
        </tr>
        <tr>
            <td>is_admin</td>
        </tr>
    </tbody>
</table>




<table>
    <caption>staff</caption>
</table>
<table>
    <tbody>
        <tr>
            <td><b>id</b></td>
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
    <caption>clients</caption>
</table>
<table>
    <tbody>
        <tr>
            <td><b>id</b></td>
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
    <caption>board_type</caption>
</table>
<table>
    <tbody>
        <tr>
            <td><b>id</b></td>
        </tr>
        <tr>
            <td>type</td>
        </tr>
        <tr>
            <td>description</td>
        </tr>
        <tr>
            <td>capacity</td>
        </tr>
        <tr>
            <td>price</td>
        </tr>
    </tbody>
</table>

<table>
    <caption>boards</caption>
</table>
<table>
    <tbody>
        <tr>
            <td><b>id</b></td>
        </tr>
        <tr>
            <td>type_<b>id</b></td>
        </tr>
        <tr>
            <td>is_available</td>
        </tr>
        <tr>
            <td>added_by</td>
        </tr>
        <tr>
            <td>added_time</td>
        </tr>
        <tr>
            <td>edited_by</td>
        </tr>
        <tr>
            <td>edited_time</td>
        </tr>
    </tbody>
</table>


<table>
    <caption>category</caption>
</table>
<table>
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
</table>
<table>
    <tbody>
        <tr>
            <td><b>id</b></td>
        </tr>
        <tr>
            <td>name</td>
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
        <tr>
            <td>ready_time</td>
        </tr>
        <tr>
            <td>added_by</td>
        </tr>
        <tr>
            <td>added_time</td>
        </tr>
        <tr>
            <td>edited_by</td>
        </tr>
        <tr>
            <td>edited_time</td>
        </tr>
    </tbody>
</table>


<table>
    <caption>orders</caption>
</table>
<table>
    <tbody>
        <tr>
            <td><b>id</b></td>
        </tr>
        <tr>
            <td>client_<b>id</b></td>
        </tr>
        <tr>
            <td>is_approved</td>
        </tr>
        <tr>
            <td>approved_by</td>
        </tr>
        <tr>
            <td>date</td>
        </tr>
        <tr>
            <td>total_price</td>
        </tr>
    </tbody>
</table>

<table>
    <caption>board_orders</caption>
</table>
<table>
    <tbody>
        <tr>
            <td><b>id</b></td>
        </tr>
        <tr>
            <td>order_<b>id</b></td>
        </tr>
        <tr>
            <td>board_<b>id</b></td>
        </tr>
        <tr>
            <td>order_time</td>
        </tr>
    </tbody>
</table>

<table>
    <caption>meal_orders</caption>
</table>
<table>
    <tbody>
        <tr>
            <td><b>id</b></td>
        </tr>
        <tr>
            <td>order_<b>id</b></td>
        </tr>
        <tr>
            <td>board_order_<b>id</b></td>
        </tr>
        <tr>
            <td>meal_<b>id</b></td>
        </tr>
        <tr>
            <td>quantity</td>
        </tr>
        <tr>
            <td>total_price</td>
        </tr>
        <tr>
            <td>order_time</td>
        </tr>
        <tr>
            <td>ready_time</td>
        </tr>
    </tbody>
</table>