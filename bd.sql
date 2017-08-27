-- drop database codeigniter;
-- drop user codeigniter@localhost;

create database codeigniter;
CREATE USER 'codeigniter'@'localhost' IDENTIFIED BY 'codeigniter';
GRANT ALL ON codeigniter.* TO 'codeigniter'@'localhost';

use codeigniter;

create table clientes(
	id int AUTO_INCREMENT,
	nombre varchar(30),
	apellido varchar(30),
	correo varchar(30),
    PRIMARY KEY(id)
);

 insert into clientes values
 (null, 'Wes', 'Anderson', 'wes@mail.com'),
 (null, 'Danny', 'Boyle', 'danny@mail.com'),
 (null, 'Pak', 'Chan-uk', 'pak@mail.com'),
 (null, 'Darren', 'Aronofsky', 'darren@mail.com'),
 (null, 'Alexander', 'Payne', 'alexander@mail.com');
