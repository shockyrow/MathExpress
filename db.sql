create schema mx_db;
create user mx@'localhost' identified by 'secret';
grant all on mx_db.* to mx@'localhost';
flush privileges;