import random as rd

def generarCarton():
    #Esta funcion va a generar los cartones de cada jugador.
    carton = []
    contadorIntervalo = 0
    inicioIntervalo = 1
    finIntervalo = 9
    contadorNumeros = 0
    while contadorIntervalo < 9:
        numerosPosibles = 0
        while numerosPosibles != 2:
            numeroRandom = rd.randint(inicioIntervalo, finIntervalo)
            if numeroRandom in carton:
                continue
            if numeroRandom == 91:
                carton.append(90)
            else:
                carton.append(numeroRandom)
            numerosPosibles+=1
        contadorIntervalo +=1
        if inicioIntervalo != 8:
            inicioIntervalo +=10
            finIntervalo+=10
        else:
            inicioIntervalo +=10
            finIntervalo+=12

    return sorted(carton)


def generadorDeNumerosAleatorios(numerosComprobados):
    #Esta funcion generara numeros aleatorios que se usaran para el bingo
    numeroAComprobar = rd.randint(1,90)
    if numeroAComprobar in numerosComprobados:
        return generadorDeNumerosAleatorios(numerosComprobados)
    else: 
        return numeroAComprobar

def comprobarBingo(cartonActual, numerosComprobados):
    #Esta funcion va a devolver un valor True o False en caso de que los numeros que ya hayan salido esten todos en nuesto carton
    numerosCorrectos = []
    for numeroActual in numerosComprobados:
        if numeroActual in cartonActual:
            numerosCorrectos.append(numeroActual)
            if len(numerosCorrectos) == 18:
                return True
            else: 
                continue
    return False

#Variables
numerosComprobados = []
cartonesJugadores = {"Jugador1": [generarCarton(), generarCarton(), generarCarton()], "Jugador2": [generarCarton(), generarCarton()], "Jugador3": [generarCarton()]}
ganar = False
cartonGanador = []
aciertos = []

print("--------------------------------------Bienvenido al BINGO-------------------------------------------------")
print("")
#Primero creamos un bucle que nos va a servir para mostrar al usuario los cartones que va a tener cada jugador, los cartones se rellenaran el la funcion de generarCarton
for jugadorActual in cartonesJugadores.keys():
    if jugadorActual == "Jugador1":
        for cartonJugador in range(len(cartonesJugadores["Jugador1"])):
            print("El Jugador ->", jugadorActual, "Tiene los siguientes numero", cartonesJugadores["Jugador1"][cartonJugador])
    elif jugadorActual == "Jugador2":
        for cartonJugador in range(len(cartonesJugadores["Jugador2"])):
            print("El Jugador ->", jugadorActual, "Tiene los siguientes numero", cartonesJugadores["Jugador2"][cartonJugador])
    else:
        for cartonJugador in range(len(cartonesJugadores["Jugador3"])):
            print("El Jugador ->", jugadorActual, "Tiene los siguientes numero", cartonesJugadores["Jugador3"][cartonJugador])

#Ahora creamos un bucle que va a ser lo que recorra nuestras funciones que nos va a permitir poder jugar, estas funciones seran la de generadorDeNumerosAleatorios y la de comprobarBingo que generaran numeros de manera aleatoria que se iran comprobando en todos los cartones
while ganar == False:
    
    #Generador de Numeros
    numeroAComprobar = generadorDeNumerosAleatorios(numerosComprobados)
    numerosComprobados.append(numeroAComprobar)

    #Comprobar el numero generado en los cartones
    for cartonDeJugador in cartonesJugadores.values():
        for cartonActual in cartonDeJugador:
            if comprobarBingo(cartonActual, numerosComprobados):
                cartonGanador = cartonActual.copy()
                ganar = True

#Por ultimo pintamos el resultado de nuestro juego
print("--------------------------------------------------------------------------------")
print("Los numeros que han salido son: ", numerosComprobados)
print("--------------------------------------------------------------------------------")
for jugadorActual in cartonesJugadores.keys():
    if jugadorActual == "Jugador1":
        for cartonJugador in range(len(cartonesJugadores["Jugador1"])):
            if cartonesJugadores["Jugador1"][cartonJugador] == cartonGanador:
                print("El ganador ha sido el", jugadorActual, "con el carton", cartonGanador)
    elif jugadorActual == "Jugador2":
        for cartonJugador in range(len(cartonesJugadores["Jugador2"])):
             if cartonesJugadores["Jugador2"][cartonJugador] == cartonGanador:
                print("El ganador ha sido el", jugadorActual, "con el carton", cartonGanador)
    else:
        for cartonJugador in range(len(cartonesJugadores["Jugador3"])):
             if cartonesJugadores["Jugador3"][cartonJugador] == cartonGanador:
                print("El ganador ha sido el", jugadorActual, "con el carton", cartonGanador)
print("--------------------------------------------------------------------------------")
for posicionesAcertadas in numerosComprobados:
    if posicionesAcertadas in cartonGanador:
        aciertos.append(posicionesAcertadas)

print("Los numeros ganadores han salido en las siguientes posiciones", aciertos)
