# Laravel BMS
This web application is a blog management system that allows for creation of blog posts and categories.
There are three roles in this system which are Admin, Users and Writers. For non-registered users, they are only
able to see the ‘Home’ page which contains blog posts, popular categories and archives. After registering or
logging in, the user is prompted to a dashboard that allows for CRUD function.

All three roles are able to access the backend dashboard, however each role has their own specific functions
available:

i) Users can only search and view blog posts without any permission to edit or delete them
ii) Writers can search, view and even add new blog posts along with editing or deleting their own blogs
iii) Admins have full functions of users and writers and the ability to create new categories and publish
or draft blog posts.

Gates is the main authorization of this application. Each time a user is trying to access
CRUD functions, gates will be called to verify the current role of the user using ‘isAdmin’, ‘isUser’ or
‘isWriter’. The gates will check the database for the role of the current user. Each role has their own function as
stated above

Admin Login Credentials:
E-mail: bruh@gmail.com
Password: 123

Database Seeding:
The project contains dummy data that can be seeded if needed by running:
php artisan database:seed

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
# Misc.

![image](https://user-images.githubusercontent.com/52448621/123912171-47151400-d9af-11eb-86a8-773b4ea15dd9.png)

All CRUD Operations has data validation for inputs as demonstrated when adding a new blog post below;


Field validation has been added to all relevant categories:

![image](https://user-images.githubusercontent.com/52448621/123912004-1634df00-d9af-11eb-9432-ec13e66d6997.png)

Blog Management System is seeded by random data
![image](https://user-images.githubusercontent.com/52448621/123912062-2482fb00-d9af-11eb-91c5-a1d5bb1f0874.png)

User Authentication

Users will be greeted in the login page when chosen, and will be prompted to sign up if they have not done so.
The role of the user is shown in the dashboard:

![image](https://user-images.githubusercontent.com/52448621/123912125-395f8e80-d9af-11eb-850c-682e6275158b.png)

![image](https://user-images.githubusercontent.com/52448621/123912210-54320300-d9af-11eb-8df2-b041904d8213.png)

Gates is the main authorization of this application. Each time a user is trying to access
CRUD functions, gates will be called to verify the current role of the user using ‘isAdmin’, ‘isUser’ or ‘isWriter’.

![image](https://user-images.githubusercontent.com/52448621/123912247-5f852e80-d9af-11eb-8a1f-a12f1ad3cf16.png)



