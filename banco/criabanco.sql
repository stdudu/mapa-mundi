drop database if exists	jetpunk;
create database if not exists jetpunk;
use jetpunk;

create table pais(
id int primary key auto_increment,
continente varchar(50),
nome varchar(50),
capital varchar(50),
foto varchar(100)
);