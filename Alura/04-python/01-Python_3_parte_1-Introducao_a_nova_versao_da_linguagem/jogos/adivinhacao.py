print("********************************")
print("bem vindo ao jogo de adivinhacao")
print("********************************")

numero_secreto = 43;

chute_str = input("Digite seu numero: ")
chute_int = int(chute_str)

print("Voce digitou ", chute_int)

acertou = numero_secreto == chute_int
maior = chute_int > numero_secreto
menor = chute_int < numero_secreto

if (acertou):
    print("Você acertou")
else:
    if (maior):
        print("Você errou! Seu chute foi maior que o número secreto")
    #Ou poderia usar o else     
    elif(menor):
        print("Você errou! Seu chute foi menor que o número secreto")

print("********************************")
print("Comparando a idade do casal")
print("********************************")
minha_idade = 25
idade_namorada = 19
if(minha_idade == idade_namorada):
    print('temos idades iguais')
else:
    print('temos idades diferentes')
