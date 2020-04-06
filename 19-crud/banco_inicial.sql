create database crud;
use crud;
create table clientes (
	id int not null primary key auto_increment,
    nome varchar(255),
    sobrenome varchar(255),
    email varchar(255),
    idade int(3)
)default charset utf8;
insert into clientes (nome, sobrenome, email, idade) values ("Caio Rolando", "Da Rocha", "caiorolando@gmail.com", 25);