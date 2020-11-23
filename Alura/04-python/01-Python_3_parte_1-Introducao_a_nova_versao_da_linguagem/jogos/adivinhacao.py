# print("********************************")
# print("Comparando a idade do casal")
# print("********************************")
# minha_idade = 25
# idade_namorada = 19
# if(minha_idade == idade_namorada):
#     print('temos idades iguais')
# else:
#     print('temos idades diferentes')


print("********************************")
print("bem vindo ao jogo de adivinhacao")
print("********************************")

numero_secreto = 42
total_de_tentativas = 3
rodada = 1

while( True ):
    print("tentativa {} de {}".format(rodada, total_de_tentativas))
    chute_str = input("Digite seu numero: ")
    chute_int = int(chute_str)

    print("Voce digitou ", chute_int)

    if (chute_int < 1 or chute_int > 100) :
        
        print ("Você deve digitar um número entre 1 e 100")
        continue

    acertou = numero_secreto == chute_int
    maior = chute_int > numero_secreto
    menor = chute_int < numero_secreto

    if (acertou):
        print("Você acertou")
        break;
    else:
        if (maior):
            print("Você errou! Seu chute foi maior que o número secreto")
        #Ou poderia usar o else     
        elif(menor):
            print("Você errou! Seu chute foi menor que o número secreto")

    if (rodada == total_de_tentativas):
        break

    rodada = rodada + 1
    

#Utilizando o FOR

numero_secreto = 42
total_de_tentativas = 3

for rodada in range(1, total_de_tentativas + 1):
    print("Tentativa {} de {}".format(rodada, total_de_tentativas))
    chute_str = input("Digite um número de 1 a 100: ")
    print("Você digitou: ", chute_str)
    chute = int(chute_str)

    if (chute < 1 or chute > 100) :
        rodada = rodada - 1
        print ("Você deve digitar um número entre 1 e 100")
        continue

    acertou = numero_secreto == chute
    maior = chute > numero_secreto
    menor = chute < numero_secreto

    if (acertou):
        print("Você acertou!")
        break
    else:
        if (maior):
            print("Você errou! O seu chute foi maior que o número secreto.")
        elif (menor):
            print("Você errou! O seu chute foi menor que o número secreto.")

print("Fim do jogo")