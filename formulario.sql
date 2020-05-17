create database formulario;

use formulario;

create table pessoa(
id int auto_increment primary key,
nome varchar(60) not null,
nascimento char(16) not null,
profissao varchar(45) not null,
email varchar(60) not null,
telefone char(15) not null,
endereco varchar(80) not null,
objetivo varchar(200) not null,
faculdades varchar(50) not null,
experiencias varchar(70) not null
);


