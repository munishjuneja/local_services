<--Queries for creating logindatabase !-->
create database local_services;
use local_services;
create table login(contact int , name nvarchar(20) not null,email nvarchar(10) primary key not null,password nvarchar(10) not null,address nvarchar(100) not null);
describe login;