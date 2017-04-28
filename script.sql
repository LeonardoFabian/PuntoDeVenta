create database ventas;

use ventas;

create table producto(
    id int auto_increment,
    nombre varchar(100),
    precio int, 
    stock int, 
    primary key(id)
);

insert into producto values
(null, 'NESCAFE CAFE CORTO', 35, 50),
(null, 'NESCAFE CAFE LARGO', 35, 50),
(null, 'NESCAFE CORTADO', 35, 50),
(null, 'NESCAFE CAFE CON LECHE', 35, 50),
(null, 'NESCAFE CAPUCCINO', 35, 50),
(null, 'NESCAFE MOCACCINO', 35, 50),
(null, 'NESCAFE CHOCOLATE', 35, 50),
(null, 'NESCAFE CHOCOLECHE', 35, 50),
(null, 'NESCAFE TE', 35, 50),
(null, 'NESCAFE TE CON LECHE', 35, 50);

create table venta(
    id int auto_increment,
    fecha datetime, 
    total int,
    primary key(id)
);

create table detalle(
    id int auto_increment,
    venta int,
    producto int,
    cantidad int, 
    subTotal int, 
    primary key(id)
);

select * from producto;
select * from venta;
select * from detalle;