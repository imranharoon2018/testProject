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
3a. composer create-project laravel/laravel projectFolder
5. Copy files from this repository to your projectFolder. If prompted Replace existing file in projectFolder 
6. Set database,host,user name and pass in projectFolder/.env file
7. From a command prompt navigate to your project folder and run the following command
8. composer update
9. php artisan migrate
10  php artisan db:seed --class=UsersTableSeeder
11. composer dump-autoload
12. Make sure your database server is running.
13. The following command will start a development server 
14. php artisan serve
15. copy the url(something like 127.0.0.1:8000) and paste in broser window to see the project
16. use the following user to create video
user/pass: yt.admin.2018@gmail.com/secret
17. use the following user to view video
user/pass: yt.viewer.2018@gmail.com/viewer


