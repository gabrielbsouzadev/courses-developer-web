O laravel � um framework que trabalha no padr�o de arquitetura MVC,
o que seria MVC ? 

S�o iniciais para Model, View e Controller.


Qual o intuito e vantagem de trabalhar com um framework ?

Basicamente as coisas ficam mais organizadas, temos algumas bibliotecas / pacotes
pr�-definidos que nos auxiliam no desenvolvimento, facilitando a agilidade
do desenvolvimento da aplica��o.


O que � o conceito de arquitetura MVC (Model, View, Controller) ?

Podemos simplificar focando nosso pensamento em tr�s pontos, ou seja:

um Model � a representa��o de uma tabela do nosso banco de dados.

Um Controller � onde as regras de neg�cio ficam, ou seja, as fun��es que 
por exemplo manipulam informa��es, e at� mesmo, nos permitem efetuar um CRUD,
todas estas, devemos criar dentro do Controller. 

Uma View vai ser simplesmente uma tela, ou, o frontend da nossa aplica��o, lembrando
que independente do framework que voc� esteja seguindo que utilize a arquitetura MVC,
caso, esteja desenvolvendo uma API, ele n�o ter� a utiliza��o das Views 
(afinal de contas, ser� um servi�o como um WebService, que apenas se comunica ou recebendo
uma informa��o a manipulando e dando um retorno (cadastro),
ou, j� nos oferecendo a informa��o logo de in�cio (listando registros))