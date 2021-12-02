drop database dbMafiaBurguer;
/*Cria um novo database */
create database dbMafiaBurguer;

/* Permite vizualizar ps databases existentes*/
show databases;

/*Permite selecionar o database que sera utilizado */
use dbMafiaBurguer;

drop table tblcategoria;
 
/*Permite criar uma tabela */
create table tblcategoria
(
    idcategoria int not null auto_increment primary key,
    nome varchar (50) not null,
     unique index (idcategoria)
);
select * from tblusuario;
create table tblusuario
(
    idusuario int not null auto_increment primary key,
    usuario varchar (25) not null,
    senha varchar (15) not null,
    nome varchar (45) not null,
     unique index (idusuario)
);
drop table tblcontatos;
create table tblcontatos
(
    idcontatos int not null auto_increment primary key,
    nome varchar (45) not null,
    email varchar (100) not null,
    celular varchar (18) not null,
     unique index (idcontatos)
);

create table tblprodutos
(
    idprodutos int not null auto_increment primary key,
    nome varchar (45) not null,
    imagem varchar (100) not null,
    valor varchar (15) not null,
    promocao varchar (15) not null,
    destaques boolean not null,
    descricao text (1000) not null,
     unique index (idprodutos)
);

select * from tblProdutos;
 insert into tblprodutos ( nome, imagem, valor, promocao, destaques, descricao ) values ( 'vcagsg', '', '121', '131', '', '1312' );

show tables ;

use dbcontatos20212t;

alter table tblcliente
	add column foto varchar(40);
 insert into tblusuario ( nome, senha ) values ( 'vcagsg', '22222' )
