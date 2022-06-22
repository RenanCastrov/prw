create database prova2;

use prova2;

drop table if exists fluxo_caixa;
create table fluxo_caixa(
id int not null auto_increment,
data date not null,
tipo varchar(10) not null,
valor decimal(10,2) not null,
historico varchar(50) not null,
cheque varchar(3) not null,
primary key(id)
);
-- Por Renan Castro --

SELECT * FROM fluxo_caixa;