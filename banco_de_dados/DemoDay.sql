use demoday;
CREATE TABLE if not exists usuario(
    id integer,
    nome varchar(100),
    sobrenome varchar(100)
);
CREATE TABLE if not exists autonomo(
    id int,
    nome varchar(100),
    sobrenome varchar(100)
);
show tables