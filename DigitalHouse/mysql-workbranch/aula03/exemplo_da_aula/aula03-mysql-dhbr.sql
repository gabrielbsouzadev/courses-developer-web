/* update - altera algum valor de um registro - nao esqueca de aplicar clausula where
caso contrario, ira aplicar o mesmo valor para todos os registros  */
update atores set nome = 'Arnold' where id = 6;

/* update com mais de uma coluna tendo seu valor alterado - nao esqueca de aplicar clausula where
caso contrario, ira aplicar o mesmo valor para todos os registros  */
update atores set nome = 'Ator', sobrenome = 'Muito Bom' where id = 6;

/* criando nova tabela para trabalhar com delete e truncate */
create table teste (
	id int(11) primary key not null auto_increment,
    nome varchar(30)
);
insert into teste (nome) values ('Teste 1'), ('Teste 2'), ('Teste 3');

/* delete - excluindo todos os registros
exclui todos os registros mas nao zera a tabela, portanto se voce tinha uma tabela com 3
registros e deu um delete em todos eles, caso insira um novo valor nesta tabela ela ira partir
com o novo registro tendo o valor 4 para a coluna id */
delete from teste;

/* delete - excluindo um unico registro - nao esqueca de aplicar clausula where
caso contrario, ira aplicar o mesmo valor para todos os registros  */
delete from teste where id = 3;

/* truncate - excluindo todos os registros e zerando a tabela 
exclui todos os registros e zera a tabela, portanto se voce tinha uma tabela com 3
registros e deu um truncate em todos eles, caso insira um novo valor nesta tabela ela ira partir
com o novo registro tendo o valor 1 para a coluna id */
truncate teste;

/* Consultas com SELECT */

/* order by - orderna a forma de exibir os registros de forma crescente ou decrescente,
e isso vale tambem para ordem alfabetica, ordenando de A a Z ou de Z a A. Para isso
iremos utilizar order by com o prefixo ASC (crescente) e o prefixo DESC (decrescente) */

/* order by - ASC (crescente) - ordenando os registros da tabela filmes de forma crescente 
se baseando na coluna ID - nao notaremos muita diferenca pois os registros ja vem ordenador de forma ASC default */
select * from filmes order by id asc;

/* order by - DESC (decrescente) - ordenando os registros da tabela filmes de forma decrescente 
se baseando na coluna ID */
select * from filmes order by id desc;

/* order by - ASC (crescente) - ordenando os registros da tabela filmes de forma crescente 
se baseando na coluna titulo */
select * from filmes order by titulo asc;

/* order by - DESC (decrescente) - ordenando os registros da tabela filmes de forma decrescente 
se baseando na coluna titulo */
select * from filmes order by titulo desc;

/* limit - limita a nossa consulta uma quantidade especifica de registros 
- limitando aos 5 primeiros registros da tabela filmes */
select * from filmes limit 5;

/* limit - limita a nossa consulta a uma quantidade especifica de registros
- limitando aos 5 ultimos registros da tabela filmes */
select * from filmes order by id desc limit 5;

select * from filmes order by titulo, sinopse asc;

/* criando tabela com valores para trabalhar funcoes de agregacao */
create table salario (
	id int(11) primary key not null auto_increment,
    valor_salario decimal(10,2)
);

insert into salario (valor_salario) values ('10000'), ('2000'), ('3000'), ('4000');

/* funcoes de agregacao - count, min, max, sum, avg */

/* count - retorna o numero de registros de uma determinada tabela */
select count(*) from salario;

/* min - retorna o registro de menor valor de uma determinada coluna */
select min(valor_salario) from salario;

/* max - retorna o registro de maior valor de uma determinada coluna */
select max(valor_salario) from salario;

/* sum - retorna a soma dos valores de uma determinada coluna */
select sum(valor_salario) from salario;

/* avg - retorna uma media entre os valores de uma determinada coluna */
select avg(valor_salario) from salario;

/* group by - agrupa registros em conjuntos atendendo a condicao que aplicarmos */

/* agrupando filmes de acordo com seus generos e retornando quantos filmes cada genero possui 
por enquanto sabemos que ele tem 3 filmes para 3 generos distintos, mas, nao iremos saber
quais sao os generos, pois ainda nao vimos o JOIN */
select count(*) as 'Número de Filmes' from filmes
group by id_genero;

/* alias - as - aplicando apelido para uma coluna 
alterando apenas no momento da consulta a coluna valor_salario para Salario dos Funcionarios */
select valor_salario as 'Salário dos Funcionários' from salario;

/* Join - une mais de uma tabela em uma unica consulta, ou seja, agora podemos exibir os filmes
e buscando relacao entre a coluna ID da tabela generos e a coluna ID_GENERO da tabela filmes
nesse caso ja podemos imaginar uma consulta onde no lugar de exibir id_genero iremos exibir o nome do genero 
que o filme esta relacionado */

/* left join - exibe todas informacoes da tabela A a esquerda na consulta e caso ele 
encontre relacao entre as colunas informadas na consulta do JOIN ele exibe as informacoes da tabela B a direita */
select generos.descricao, count(filmes.id) from generos
left join filmes on (generos.id = filmes.id_genero)
group by generos.id;

/* right join - exibe todas informacoes da tabela B a direita na consulta e caso ele 
encontre relacao entre as colunas informadas na consulta do JOIN ele exibe as informacoes da tabela A a direita */
select generos.descricao, count(filmes.id) from filmes
right join generos on (generos.id = filmes.id_genero)
group by generos.id;

/* inner join - exibe apenas informacoes que tenham cumprido a condicao de ter o relacionamento correto
entre a coluna da tabela A e a coluna da tabela B informadas na clausula ON */
select generos.descricao, count(filmes.id) from generos
inner join filmes on (generos.id = filmes.id_genero)
group by generos.id;

/* Exercicios de Fixacao */

/* criar uma consulta que retorne o titulo e a sinopse do filme e a descricao do genero deste filme */
select f.titulo, f.sinopse, g.descricao from filmes as f
inner join generos as g on (f.id_genero = g.id);

/* criar uma consulta que retorne o titulo do filme e o nome e sobrenome do ator que atuou naquele filme */
select f.titulo, a.nome, a.sobrenome from filmes_atores as fa
join filmes as f on (fa.id_filme = f.id)
join atores as a on (fa.id_ator = a.id);