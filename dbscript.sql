create database cellij;

use cellij;

create table user (
    id INTEGER AUTO_INCREMENT PRIMARY KEY,
    email varchar(200) NOT NULL,
    name varchar (60) NOT NULL,
    password VARCHAR (60) NOT NULL,
    created_at DATETIME default CURRENT_TIMESTAMP,
    updated_at DATETIME default CURRENT_TIMESTAMP

);


create table notice(
    id INTEGER AUTO_INCREMENT PRIMARY KEY,
    title varchar(255),
    subtitle varchar(255),
    imgpath varchar (900),
    text varchar (5000),
    created_at DATETIME default CURRENT_TIMESTAMP,
    updated_at DATETIME default CURRENT_TIMESTAMP
);