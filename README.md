<p align="center"><img src="./assets/Techieland3.svg" width="400"></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

## About Techieland

Techieland is a software solution for cafe and restourant businesses.

- Simple
- Powerful
- User-friendly 
- Free

## Migrations

<p align="center"><img src="./database/db-for-project/ip-project-restourant.png" width="400"></p>

<h4></h4>
<ul></ul>
<ul></ul>
<ul></ul>
<ul></ul>

<h4>roles</h4>
<ul>id</ul>
<ul>role</ul>
<ul>edit_privilege</ul>
<ul>is_admin</ul>


<h4>staff</h4>
<ul>id</ul>
<ul>role_id</ul>
<ul>username</ul>
<ul>password</ul>
<ul>first_name</ul>
<ul>last_name</ul>
<ul>phone_number</ul>
<ul>email</ul>


<h4>clients</h4>
<ul>id</ul>
<ul>first_name</ul>
<ul>last_name</ul>
<ul>phone_number</ul>
<ul>email</ul>


<h4>board_type</h4>
<ul>id</ul>
<ul>type</ul>
<ul>description</ul>
<ul>capacity</ul>
<ul>price</ul>


<h4>boards</h4>
<ul>id</ul>
<ul>type_id</ul>
<ul>is_available</ul>
<ul>added_by</ul>
<ul>added_time</ul>
<ul>edited_by</ul>
<ul>edited_time</ul>



<h4>category</h4>
<ul>id</ul>
<ul>name</ul>
<ul>description</ul>
<ul>portion_units</ul>


<h4>meals</h4>
<ul>id</ul>
<ul>name</ul>
<ul>category_id</ul>
<ul>price</ul>
<ul>portion</ul>
<ul>is_available</ul>
<ul>ingredients</ul>
<ul>ready_time</ul>
<ul>added_by</ul>
<ul>added_time</ul>
<ul>edited_by</ul>
<ul>edited_time</ul>


<h4>orders</h4>
<ul>id</ul>
<ul>client_id</ul>
<ul>is_approved</ul>
<ul>approved_by</ul>
<ul>date</ul>
<ul>total_price</ul>


<h4>board_orders</h4>
<ul>id</ul>
<ul>order_id</ul>
<ul>board_id</ul>
<ul>order_time</ul>


<h4>meal_orders</h4>
<ul>id</ul>
<ul>order_id</ul>
<ul>board_order_id</ul>
<ul>meal_id</ul>
<ul>quantity</ul>
<ul>total_price</ul>
<ul>order_time</ul>
<ul>ready_time</ul>












