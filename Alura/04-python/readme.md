# Veremos um pouco das diferenças entre o Python 3 e o Python 2, porque o Python 2 ainda é muito utilizado. Para esse vídeo, não é necessário instalar o Python 2, já que aqui só veremos as diferenças, a menos que você queira utilizá-lo.

# A função print
A primeira diferença que podemos ver é que no Python 2, não precisamos colocar os parênteses na função print, eles são opcionais:

>>> print "python2"
python2
>>> print("python2")
python2

Já no Python 3, os parênteses são obrigatórios. Ainda na função print, no Python 2 não há os parâmetros sep e end, ao contrário do Python 3, e quando a função recebe mais de um valor, sua saída é diferente:

>>> print("python", "2")
('python', '2')

# A função input
Outra diferença que podemos ver é na função input. Sabemos que no Python 3, essa função sempre retornará uma string. Já no Python 2, ela automaticamente converte o tipo da variável. Por exemplo:

>>> chute = input("Digite o seu número: ")
Digite o seu número: 42
>>> type(chute)
<type 'int'>

Isso foi considerado má prática, porque pode ou não ser a intenção do desenvolvedor converter o tipo da variável. Por isso é bem comum encontrar a função raw_input sendo utilizada no Python 2:

>>> chute = raw_input("Digite o seu número: ")
Digite o seu número: 42
>>> type(chute)
<type 'str'>

O retorno dessa função será sempre uma string, equivalente à função input do Python 3, mas ela não existe nessa versão.