create database cellij;

use cellij;

create table user (
    email varchar(200),
    name varchar (60),
    password VARCHAR (60),

);


create table notice(
    title varchar(255),
    subtitle varchar(255),
    imgpath varchar (900),
    text varchar (5000)
);