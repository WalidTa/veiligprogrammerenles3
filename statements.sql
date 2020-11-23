create database brokenauth;
use brokenauth;
create table user (
id int(60) auto_increment primary key,
email varchar(255) not NULL,
password varchar(255) not null
)
