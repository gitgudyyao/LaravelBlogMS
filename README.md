# Laravel BMS
This is simple blog management system

# Setup
First of all copy .env.example to .env
```bash
cp .env.example .env
```
and change database, mail & redis configuration according to your setup

now add require packages with command (hope composer is already installed in your system)
```bash
composer install
```
Run migration with
```bash
php artisan migrate
```
Run seeder with
```bash
php artisan db:seed
```
