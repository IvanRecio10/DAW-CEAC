#Ejercicio 1
print("Ejercicio 1")
lista = [1,5,3,7,8,2,9]
lista.sort()
print(lista)

#Ejercicio 2
print("Ejercicio 2")
num1 = 18
num2 = 24
def maxComunDivisor(num1, num2):
    divisor = 1
    mcd = 0
    while (divisor <= num1 or divisor <= num2):
        if (num1%divisor == 0 and num2%divisor == 0):
            if (divisor > mcd):
                mcd = divisor
        divisor += 1
    return mcd
print(maxComunDivisor(num1, num2))

#Ejercicio 3
print("Ejercicio 3")
lista = [1,2,3,1,2,3,1,2,3,4,6]
listaSinRepetidos = []
for i in lista:
    if i not in listaSinRepetidos:
        listaSinRepetidos.append(i)
print(listaSinRepetidos)

#Ejercicio 4
print("Ejercicio 4")
pal1 = "somos"
inicio = 0
fin = len(pal1) -1
while (pal1[inicio] == pal1[fin]):
    if (inicio >= fin):
        print("La palabra ", pal1, " es un palíndramo")
        break
    inicio += 1
    fin -= 1 

#Ejercicio 5
print("Ejercicio 5")
frase = "el dia que el mas payaso de clase deje de venir sera el dia que mas aplaudiremos"
print("En la frase", frase, "la palabra el aparece", frase.count("el"), "veces")

#Ejercicio 6
print("Ejercicio 6")
lista= [1,5,8,24,84,11,45,3243,213,56,884]
lista.sort(reverse = True)
print("El segundo numero mas grande de la lista es", lista[1])

#Ejercicio 7
print("Ejercicio 7")
lista1 = [2,7,5,3,9]
lista2 = [1,4,10,6,8]
lista1.extend(lista2)
lista1.sort()
print(lista1)

#Ejercicio 8
lista = ['hola', 'ivan', 'dia', 'si', 'no', 'patata']