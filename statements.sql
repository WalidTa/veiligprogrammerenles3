create database brokenauth;
use brokenauth;
create table user (
id int(60) auto_increment primary key,
email varchar(255) not NULL,
password varchar(255) not null
);

ALTER TABLE user ADD COLUMN(
	IP_adrress VARCHAR(80),
	datum DATETIME DEFAULT CURRENT_TIMESTAMP
)

