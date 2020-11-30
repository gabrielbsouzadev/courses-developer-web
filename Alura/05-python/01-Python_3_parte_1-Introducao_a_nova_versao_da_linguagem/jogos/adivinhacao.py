def jogar():

    import random
        
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

    numero_secreto = (random.randrange(1, 101))
    total_de_tentativas = 3
    rodada = 1

    # print(numero_secreto)

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
        

    print("Utilizando o FOR")

    import random

    print("*********************************")
    print("Bem vindo ao jogo de Adivinhação!")
    print("*********************************")

    numero_secreto = random.randrange(1, 101)
    total_de_tentativas = 0
    pontos = 1000

    print("Qual o nível de dificuldade?")
    print("(1) Fácil (2) Médio (3) Difícil")

    nivel = int(input("Defina o nível: "))

    if(nivel == 1):
        total_de_tentativas = 20
    elif(nivel == 2):
        total_de_tentativas = 10
    else:
        total_de_tentativas = 5

    for rodada in range(1, total_de_tentativas + 1):
        print("Tentativa {} de {}".format(rodada, total_de_tentativas))

        chute_str = input("Digite um número entre 1 e 100: ")
        print("Você digitou ", chute_str)
        chute = int(chute_str)

        if(chute < 1 or chute > 100):
            print("Você deve digitar um número entre 1 e 100!")
            continue

        acertou = chute == numero_secreto
        maior = chute > numero_secreto
        menor = chute < numero_secreto

        if(acertou):
            print("Você acertou e fez {} pontos!".format(pontos))
            break
        else:
            pontos_perdidos = abs(numero_secreto - chute)
            pontos = pontos - pontos_perdidos
            if(maior):
                print("O seu chute foi maior que o número secreto")
                if (rodada == total_de_tentativas):
                    print("O número secreto era {}. Você fez {}".format(
                        numero_secreto, pontos))
            elif(menor):
                print("Você errou! O seu chute foi menor do que o número secreto.")
                if (rodada == total_de_tentativas):
                    print("O número secreto era {}. Você fez {}".format(
                        numero_secreto, pontos))

    print("Fim do jogo")

if(__name__ == "__main__"):
    jogar()