create database projeto01;

use projeto01;

CREATE TABLE usuario(
id_usuario int not null auto_increment,
nome_usuario varchar(100) not null,
email_usuario varchar(100) not null,
fone_usuario varchar(30) not null,
primary key(id_usuario)
);

select * from usuario;