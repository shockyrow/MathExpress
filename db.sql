create schema mx_db;
create user mx@'localhost' identified with mysql_native_password by 'secret';
grant all on mx_db.* to mx@'localhost';
flush privileges;

