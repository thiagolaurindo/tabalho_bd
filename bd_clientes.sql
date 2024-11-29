CREATE DATABASE bd_clientes;
USE bd_clientes;
CREATE TABLE clientes(
id int not null primary key auto_increment,
nome varchar(50) not null,
email varchar(50) not null,
telefone char(50) not null
);
INSERT INTO clientes(nome, email, telefone) VALUES
('João', 'joao@gmail.com', '985761585'),
('Maria', 'maria@gmail.com', '983547056');