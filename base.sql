create table producto(
    id int primary key auto_increment not null,
    nombre varchar(50) not null,
    descripcion text not null,
    codigo varchar(10) not null,
    valor_unitario bigint not null
);