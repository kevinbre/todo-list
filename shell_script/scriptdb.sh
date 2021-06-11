# scriptdb.sh

echo Installing DataBases..

cd 'c:\'

cd 'C:\Xampp\mysql\bin'

mysql -u root -p 

create database to_do_list

exit

mysql -u root -p to_do_list < 'C:\Xampp\htdocs\todolist\db\to_do_list.sql'

echo You can close the windows
cat scriptdb.sh