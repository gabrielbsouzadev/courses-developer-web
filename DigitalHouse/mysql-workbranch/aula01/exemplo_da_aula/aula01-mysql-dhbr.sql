/*
Como eram armazenadas as informações antes de utilizarmos Banco de Dados:
Antigamente tinha-se o costume de armazenar as informações de forma física, ou seja, em papéis que eram entitulados de documento.

Agora vamos pensar no caso de uma organização, ou, até mesmo um comércio.
Podemos pensar em algumas desvantagens principais que são: 
	o espaço físico que acabamos perdendo a medida que as informações crescem.
	dificuldade no momento de analisar essas informações devido ter que olhar documento por documento para uma análise mais específica.
	o documento corre o risco de deteriorar e assim deixamos de ter a informação.

Agora, vamos pensar no caso de essa organização, ou, até mesmo um comércio migrar para utilização de Banco de Dados.
Podemos pensar em algumas vantagens principais que são: 
	Não terá mais espaço físico sendo ocupado para documentos (armários, etc...)
    Análise mais rápida e eficaz das informações.
    Segurança da informação, onde, teremos as informações alocadas em um servidor / nuvem sempre nos possibilitando um backup.
    
    
 Vamos entender agora a arquitetura que trabalhamos dentro do Banco de Dados, fazendo alusão a como era antes dele exisitr.
 Como era Antes sem Banco de Dados | Como é com Banco de Dados
 Tinhamos um armário e dentro      |  Temos um banco de dados (podemos considerar como o armário) e dentro do banco de dados
 deste armário tinhamos gavetas e  |  temos tabelas (podemos considerar como as gavetas do armário) e dentro das tabelas
 dentro dessas gavetas tinhamos os |  temos os registros (podemos considerar como os documentos).
 documentos.                       |
 
Podemos pensar desta forma em relação a banco de dados.
Banco De Dados > Tabelas do Banco de Dados > Registros das Tabelas
   
DER - Diagrama Entidade Relacionamento 
Dentro de um DER temos 4 itens primoridiais para pensarmos: Entidade, Atributos, Relaciomamentos e Chaves
E também podemos fazer alusão de forma que uma:
Entidade futuramente será uma tabela.
Atributos futuramente será uma colunas de uma tabela.
Relacionamentos serão os relacionamentos entre as tabelas.
Chaves podemos pensar que sempre serão dois tipos: chave primário (Primary Key) e chave estrangeira (Foreign Key)

DER - Cardinalidade
Dentro de cardinalidade podemos separar em três formas de relacionamento: 1:1, 1:N , N:N.
 
1:1 => CPF pertence apenas a uma Pessoa e uma Pessoa possui apenas um CPF

1:N => Um Cartão de Crédito pertence apenas a uma Pessoa, mas uma Pessoa pode ter mais de um Cartão de Crédito

N:N => Um Produto pode pertencer a mais de uma Categoria e uma Categoria pode ter mais de um Produto
Por exemplo: Produto Vodka e Produto Cachaça pertecem as categorias Bebidas Alcoólicas e Destilados. 
E em contrapartida as categorias Bebidas Alcoólicas e Destilados podem ter mais outros N produtos relacionados a elas.

Constraints - Chaves (Primárias PK e Estrangeiras FK)

Chave primária (PK) é algo que ajuda no momento de saber qual é o identificador único de uma tabela. No caso costuma ser sempre a coluna ID.
Chave estrangeira (FK) ocorre quando referenciamos a chave primária de uma tabela com uma coluna em outra tabela, 
tornando a mesma uma chave estrangeira dentro da tabela que foi relacionada.

Vamos a um exemplo, temos duas tabelas: professores e cursos. 
A tabela professores com as colunas ID, Nome e ID_CURSO e a tabela cursos com as colunas ID e DESCRICAO.

Como sabemos, a tabela professores tem relacionamento com a tabela cursos para sabermos em qual curso cada professor leciona.
Logo, iremos utilizar o ID da tabela de cursos dentro da tabela de professores, visando efetuar um relacionamento de Banco de Dados.

Exemplo:
Professores
id
nome
id_curso

Tenho este valor inserido na tabela professores
id - 1, nome - Marcelo, id_curso - 1

Cursos
id
descricao

Tenho este valor inserido na tabela cursos
id - 1, descricao - Desenvolvimento Web Full Stack

Quando relacionamos o registro de id 1 na tabela professores com o id_curso 1, quer dizer que aquele professor irá ser relacionado 
com o curso de id 1 na tabela cursos, logo, será um professor de Desenvolvimento Web Full Stack.
*/

/* creata database - criando banco de dados */
create database db_blockbuster;

/* use - indicando qual banco de dados que iremos trabalhar */
use db_blockbuster;

/* create table - criando tabela filmes */
create table filmes (
	id int primary key not null auto_increment,
    titulo varchar(80),
    sinopse varchar(200)
);

/* create table - criando tabela generos */
create table generos (
	id int primary key not null auto_increment,
    descricao varchar(50)
);

/* create table - criando tabela atores */
create table atores (
	id int primary key not null auto_increment,
    nome varchar(60),
    sobrenome varchar(60)
);

/* describe - descrevendo detalhadamente a tabela - exemplo abaixo com a tabela filmes */
describe filmes;

/* create table - criando tabela teste para aprender comandos relacionados a alteracao de tabela */
create table funcionarios (
	id int primary key not null auto_increment,
    nome varchar(50)
);

/* alter table com ADD - adiciona coluna em uma tabela existente */
/* adicionando coluna sobrenome na tabela funcionarios */
alter table funcionarios add sobrenome varchar(50);

/* alter table com MODIFY - altera o tipo primitivo de uma coluna dentro da tabela */
/* alterando o tipo primitivo da coluna sobrenome de varchar(50) para char(55) */
alter table funcionarios modify sobrenome char(55);

/* alter table com CHANGE - altera o nome da coluna e o tipo primitivo da mesma */
/* alterando o nome da coluna sobrenome para email e o tipo primitivo de char(55) para varchar(50) */
alter table funcionarios change sobrenome email varchar(50);

/* alter table com RENAME - altera o titulo da tabela */
/* alterando o nome da tabela funcionarios para tb_funcionarios */
alter table funcionarios rename to tb_funcionarios;

/* alter table com DROP - remove uma coluna dentro de uma tabela */
/* remover a coluna email da tabela tb_funcionarios */
alter table tb_funcionarios drop email;

/* drop table - excluindo uma tabela do banco de dados */
/* removendo a tabela tb_funcionarios */
drop table tb_funcionarios;

/* drop database - excluindo um banco de dados */
/* removendo o banco de dados db_blockbuster */
/* esta ultima query ficara comentada para nao nos atrapalhar nas proximas aulas */
/* drop database db_blockbuster; */