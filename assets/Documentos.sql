#creacion de la base de datos:

create database base1;

#-----------------------------


#creacion de la tabla de usuario:

create table users (
	 username varchar(30),
	 pass varchar(10)
);

insert into users (username, pass) values ('Matias1','bostero22');

#------------------------------------------------------------------

#creacion tabla de clientes:

create table clients(
  id int unsigned auto_increment,
  client_name varchar(40),
  phone varchar(15) ,
  addres varchar(25) ,
  primary key (id)
 );
insert into clients (client_name, phone, addres) values ('Matias','222222', 'asdasd123');

#------------------------------------------------------------------------------------------












