CREATE DATABASE secovi;

USE secovi;

/* CRIAÇÃO DA TABELA PESSOAS */
DROP TABLE IF EXISTS tb_pessoas;
CREATE TABLE tb_pessoas (
  ID_Pessoa int(11) NOT NULL AUTO_INCREMENT,
  Nome varchar(255) DEFAULT NULL,
  DT_Insercao datetime DEFAULT NULL,
  PRIMARY KEY (ID_Pessoa));

insert  into tb_pessoas(ID_Pessoa,Nome,DT_Insercao) values 
(1,'Marco','2021-06-21 00:00:00'),
(2,'Barbara','2021-06-21 00:00:00'),
(3,'Secovi','2021-06-21 00:00:00');

/* **************************** */


/* CRIAÇÃO DA TABELA CONTATOS */

DROP TABLE IF EXISTS tb_contatos;
CREATE TABLE tb_contatos (
  ID_Contato int(11) NOT NULL AUTO_INCREMENT,
  ID_Pessoa int(11) DEFAULT NULL,
  Email varchar(255) DEFAULT NULL,
  PRIMARY KEY (ID_Contato),
  KEY FK_PESSOA_CONTATO (ID_Pessoa),
  CONSTRAINT FK_PESSOA_CONTATO FOREIGN KEY (ID_Pessoa) REFERENCES tb_pessoas (ID_Pessoa));

insert  into tb_contatos(ID_Contato,ID_Pessoa,Email) values (1,2,'barbara@email.com');
insert  into tb_contatos(ID_Contato,ID_Pessoa,Email) values (2,1,'marco@email.com');

/* **************************** */



/* CRIAÇÃO DA TABELA ENDERECOS */


DROP TABLE IF EXISTS tb_enderecos;

CREATE TABLE tb_enderecos (
  ID_Endereco int(11) NOT NULL AUTO_INCREMENT,
  ID_Pessoa int(11) DEFAULT NULL,
  Endereco varchar(500) DEFAULT NULL,
  PRIMARY KEY (ID_Endereco),
  KEY FK_PESSOA_ENDERECO (ID_Pessoa),
  CONSTRAINT FK_PESSOA_ENDERECO FOREIGN KEY (ID_Pessoa) REFERENCES tb_pessoas (ID_Pessoa));

insert  into tb_enderecos(ID_Endereco,ID_Pessoa,Endereco) values 
(1,1,'Santo Andre'),
(2,3,'São Paulo');

/* **************************** */