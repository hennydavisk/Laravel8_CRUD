LARAVEl version 8 - CRUD 

# Connecting to MySQL server & Create DATABASE 'Products'
> mysql -u root
> create database Products;
> exit

# Create Table vehicles - using Migrate
> php artisan make:migration create_vehicles_table

# Edit .env file - database = Products

# Create columns in table vehicles
open database > migrations > create_vehicles_table.php
Add columns
> php artisan migrate



