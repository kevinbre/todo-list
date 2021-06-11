
1- Download and Install XAMPP
Xampp Windows 64bits
https://www.apachefriends.org/xampp-files/8.0.7/xampp-windows-x64-8.0.7-0-VS16-installer.exe

Xampp Linux 64bits
https://www.apachefriends.org/xampp-files/8.0.7/xampp-linux-x64-8.0.7-0-installer.run

Other Options
https://www.apachefriends.org/download.html

2- Execute XAMPP and start Apache & MySQL

3- Download proyect and rename the folder to todo-list 

4- Paste todo-list folder in C:/Xampp/htdocs

5- Open CMD and paste this commands

@echo off
echo Installing DataBases..

cd c:/

cd C:/Xampp/mysql/bin

mysql -u root -p 

create database to_do_list;

exit

mysql -u root -p to_do_list < C:/Xampp/htdocs/todolist/db/to_do_list.sql

echo "Database created successfully!"
exit



6- Open the application from this link

http://localhost/todo-list/index.php
