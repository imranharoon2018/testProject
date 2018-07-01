# testProject
testProject
Implemented in the following Platform:
LaraveL:5.6
PHP:7.2.6
Database: mysql
OS:Windows

To run the project:
1. Install PHP 7.2.6, Mysql & Composer
2. Add the path of php and composer bin to the environmental variable
3. From command prompt create a laravel project using a command like this
 composer create-project laravel/laravel projectFolder
5. Copy files from this repository to your projectFolder. If prompted Replace existing file in projectFolder 
6. Set database,host,user name and pass in projectFolder/.env file
7. From a command prompt navigate to your project folder and run the following command
 composer update
 php artisan migrate
 php artisan db:seed --class=UsersTableSeeder
 composer dump-autoload
8. Make sure your database server is running.
9. The following command will start a development server 
>php artisan serve
10. copy the url(something like 127.0.0.1:8000) and paste in broser window to see the project
11. use the following user to create video
user/pass: yt.admin.2018@gmail.com/secret
12. use the following user to view video
user/pass yt.viewer.2018@gmail.com/viewer


