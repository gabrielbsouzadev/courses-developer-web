/* alter table - add - adicionando coluna id_genero na tabela filmes */
alter table filmes add id_genero int(11);

/* alter table - add foreign key - adicionando uma chave estrangeira
a um campo ja existente , ou seja, estamos efetuando relacionamento
entre a coluna id_genero da tabela filmes e a coluna id da tabela generos*/
alter table filmes add foreign key (id_genero) references generos(id);

/* criando tabela que tera o relacionamento NxN entre a tabela filmes e atores
e adicionando chave estrangeira no momento da criacao da tabela */
create table filmes_atores(
	id int(11) primary key auto_increment not null,
    id_filme int(11),
    id_ator int(11),
    foreign key (id_filme) references filmes(id),
    foreign key (id_ator) references atores(id)
);

/* describe - descreve informacoes da tabela */
describe filmes_atores;


/* insert into - inserindo valores em uma tabela
inserindo um unico valor por vez */
insert into generos (descricao) values ('Aventura');

/* insert into - inserindo valores em uma tabela
inserindo mais de um valor de uma vez */
insert into generos (descricao) values ('Comédia'), ('Ação'), ('Drama');

/* insert into - inserindo valores em uma tabela
inserindo valores sem indicar colunas, mas, desta forma, temos que preencher todas colunas
com os values seguindo a ordem da colunas dentro da tabela 
---------------------------------------------------------
por exemplo no caso abaixo a tabela generos tem a ordem das colunas id e descricao, portanto,
temos que passar como primeiro parametro no values um valor para a coluna id
 e como segundo parametro um valor para a coluna descricao */
insert into generos values (NULL, 'Romance');

/* select - selecionando resgistros da tabela generos
trazendo todas colunas utilizando o * antes do from */
select * from generos;

/* select - selecionando apenas uma coluna especifica da tabela generos */
select descricao from generos;

/* insert into - inserindo registros na tabela atores */
insert into atores (nome, sobrenome) values ('Ator', 'Um'), ('Ator', 'Dois'), ('Ator', 'Tres'), 
('Ator', 'Quatro'), ('Ator', 'Cinco');

/* insert into - inserindo registros na tabela filmes */
insert into filmes (titulo, sinopse, id_genero) values ('Harry Potter', 'Aventuras de um bruxo', 1),
('Harry Potter 2', 'Aventuras de um bruxo', 1), ('Harry Potter 3', 'Aventuras de um bruxo', 1),
('Velozes e Furiosos', 'Aventuras de pessoas que curtem automobilismo', 2),
('Velozes e Furiosos 2', 'Aventuras de pessoas que curtem automobilismo', 2),
('Velozes e Furiosos 3', 'Aventuras de pessoas que curtem automobilismo', 2),
('Minha Mae e uma Peca', 'Aventuras de uma mãe e seus filhos', 3),
('Minha Mae e uma Peca 2', 'Aventuras de uma mãe e seus filhos', 3),
('Minha Mae e uma Peca 3', 'Aventuras de uma mãe e seus filhos', 3);

/* select - selecionando registros da tabela atores */
select * from atores;

/* select - selecionando registros da tabela filmes */
select * from filmes;

/* insert into - inserindo valores na tabela filmes_atores */
insert into filmes_atores (id_ator, id_filme) values (1, 2), (2, 2), (3, 2), (4, 2), 
(5, 2), (6, 2), (1, 3), (3, 3), (5, 3), (2, 4), (4, 4), (6, 4), (1, 5), (2, 5), (4, 5),
(2, 6), (3, 6), (5, 6), (4, 7), (2, 7), (3, 7), (1, 8), (2, 8), (3, 8), (5, 9), (6, 9), (4, 9);

/* consulta utilizando where, operadores como like, between, in - e operadores logicos =, >=, <=, != */

/* where - traduzido ao pe da letra significa onde - logo podemos pensar que iremos criar condicoes
na qual desejamos 
no exemplo abaixo iremos exibir na consulta apenas os registros ONDE (where) o id seja maior (>) que 2 */
select * from filmes where id > 2;

/* Criar uma consulta que exiba apenas os registros que tenham o id_genero 1 ou 3 */
select * from filmes where id_genero = 1 or id_genero = 3;

/* Criar uma consulta que exiba apenas os atores que tenham o id maior ou igual a 2 e menor ou igual a 6 */
select * from atores where id >= 2 and id <= 6;

/* Criar uma consulta que exiba apenas os generos que tenham o id menor que 4 */
select * from generos where id < 4;

/* Criar uma consulta que exiba apenas os filmes que tenham o id diferente de 1, 2 e 3 */
select * from filmes where id != 1 and id != 2 and id != 3;

/* Criar uma consulta que exiba apenas os filmes que tenham o id iguais de 1,2,3,4 e 5 
utilizando o operador IN */
/* pegando apenas valores que estejam dentro da lista passada como parametro no in */
select * from filmes where id in (1,2,3,4,5);

/* Criar uma consulta que exiba apenas os filmes que tenham o id diferentes de 1,2,3,4 e 5 
utilizando o operador NOT IN */
/* deixa de pegar apenas valores que estejam dentro da lista passada como parametro no not in */
select * from filmes where id not in (1,2,3,4,5);

/* Criar uma consulta que exiba os registros que tenham o id entre 1 e 5
utilizando o operador BETWEEN */
/* pegando um intervalo entre os ids da tabela utilizando o between */
select * from filmes where id between 1 and 5;

/* Criar uma consulta que exiba os registros que nao tenham o id entre 1 e 5
utilizando o operador NOT BETWEEN */
/* deixa de pegar apenas o intervalo entre os ids da tabela utilizando o not between */
select * from filmes where id not between 1 and 5;

/* Criar uma consulta que exiba apenas os registros que tenham o titulo contendo a letra e
entre dois espacos, um antes, e um depois. 

no operador LIKE temos um caracter coringa a nossa disposicao, ou seja, ele e um simbolo de %,
que indica que ira equivaler a alguns caracteres distintos, que na verdade nao sabemos quais sao.

Por exemplo nossa consulta deve pegar a sequencia de caracteres que é ' e ' portanto como nao sabemos
quantos caracteres podem ter antes ou depois desta combinacao indicamos o caracter coringa % */
select * from filmes where titulo like '% e %';


/* Criar uma consulta que exiba apenas os registros que tenham o titulo contendo a a sequencia de caracteres TE

Por exemplo nossa consulta deve pegar a sequencia de caracteres que é 'te' portanto como nao sabemos
quantos caracteres podem ter antes ou depois desta combinacao indicamos o caracter coringa % */
select * from filmes where titulo like '%te%';


/* Criar uma consulta que exiba apenas os registros que tenham o titulo contendo a letra H no inicio

Por exemplo nossa consulta deve pegar a letra 'H' no inicio sem nos importar
com a sequencia de caracteres que vem depois, utilizando o caracter coringa % */
select * from filmes where titulo like 'h%';


/* Criar uma consulta que exiba apenas os registros que tenham o titulo contendo a letra R no inicio

Por exemplo nossa consulta deve pegar a letra 'R' no fim sem nos importar
com a sequencia de caracteres que vem antes, utilizando o caracter coringa % */
select * from filmes where titulo like '%r';


/* Criar uma consulta que exiba apenas os registros que tenham a sinopse contendo a letra A no inicio
e a letra O no final 

Por exemplo nossa consulta deve pegar a letra 'A' no inicio sem nos importar
com a sequencia de caracteres que vem no meio e a letra 'O' no final, utilizando o caracter coringa % */
select * from filmes where sinopse like 'a%o';


/* Criar uma consulta que exiba apenas os registros que tenham a titulo contendo a letra A
na segunda posicao da palavra 

Por exemplo nossa consulta deve pegar a letra 'A' na segunda posicao sem nos importar
com a sequencia de caracteres que vem no fim da palavro, utilizando _ para indicar que tera um caracter
antes da letra 'A' e tambem utilizando o caracter coringa % apos a letra 'A' para indicar que nao iremos
nos importar com quantos caracteres venham apos*/
select * from filmes where titulo like '_a%';