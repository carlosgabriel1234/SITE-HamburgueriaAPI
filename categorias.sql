drop database dbMafiaBurguer;
/*Cria um novo database */
create database dbMafiaBurguer;

/* Permite vizualizar ps databases existentes*/
show databases;

/*Permite selecionar o database que sera utilizado */
use dbMafiaBurguer;

drop table tblcategoria;
 
/*Permite criar uma tabela */
/*Permite criar uma tabela */
create table tblcategoria
(
idcategoria int not null auto_increment primary key,
categoria varchar (50) not null,
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

create table tblproduto
(
idproduto int not null auto_increment primary key,
nome varchar (100) not null,
valor varchar (15) not null,
descricao text not null,
foto varchar (50) not null,
destaque tinyint,
desconto varchar(50),
unique index(idproduto)
);




insert into tblproduto ( nome, valor, descricao, foto, destaque, desconto, idcategoria ) values ( 'batata', '213', '213', 'da06b4ad292ce6edf18709d743042496.png', 1, 1, '' );



/*Edita na tabela categoria o nome e colocar categoria 8/12/21*/
alter table tblproduto
add column idcategoria int not null,
add constraint FK_categoria_produtos
foreign key (idcategoria)
references tblcategoria(idcategoria);

select tblproduto.*, tblcategoria.categoria from tblproduto
inner join tblcategoria
on tblcategoria.idcategoria = tblproduto.idcategoria;

drop table tblproduto;

select * from tblProdutos;
 insert into tblprodutos ( nome, imagem, valor, promocao, destaques, descricao ) values ( 'vcagsg', '', '121', '131', '', '1312' );

show tables ;

use dbcontatos20212t;

alter table tblcliente
	add column foto varchar(40);
 insert into tblusuario ( nome, senha ) values ( 'vcagsg', '22222' )
