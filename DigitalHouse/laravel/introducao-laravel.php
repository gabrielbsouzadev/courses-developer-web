O laravel é um framework que trabalha no padrão de arquitetura MVC,
o que seria MVC ? 

São iniciais para Model, View e Controller.


Qual o intuito e vantagem de trabalhar com um framework ?

Basicamente as coisas ficam mais organizadas, temos algumas bibliotecas / pacotes
pré-definidos que nos auxiliam no desenvolvimento, facilitando a agilidade
do desenvolvimento da aplicação.


O que é o conceito de arquitetura MVC (Model, View, Controller) ?

Podemos simplificar focando nosso pensamento em três pontos, ou seja:

um Model é a representação de uma tabela do nosso banco de dados.

Um Controller é onde as regras de negócio ficam, ou seja, as funções que 
por exemplo manipulam informações, e até mesmo, nos permitem efetuar um CRUD,
todas estas, devemos criar dentro do Controller. 

Uma View vai ser simplesmente uma tela, ou, o frontend da nossa aplicação, lembrando
que independente do framework que você esteja seguindo que utilize a arquitetura MVC,
caso, esteja desenvolvendo uma API, ele não terá a utilização das Views 
(afinal de contas, será um serviço como um WebService, que apenas se comunica ou recebendo
uma informação a manipulando e dando um retorno (cadastro),
ou, já nos oferecendo a informação logo de início (listando registros))