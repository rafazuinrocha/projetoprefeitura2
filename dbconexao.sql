create database dbconexao;
use dbconexao;
create table tbUsuarios (
    id int(10) auto_increment,
    usuario varchar(255) NOT NULL,
    senha varchar(255) NOT NULL,
    nivel int(5) NOT NULL,
    PRIMARY KEY (id),
    UNIQUE id (id)
);

create table tbNoticias (
    id int(10) auto_increment,
    data date NOT NULL,
    hora time NOT NULL,
    titulo char(200) NOT NULL,
    subtitulo char(200),
    texto text,
    status int (2) NOT NULL,
    PRIMARY KEY (id),
    UNIQUE id (id)
);