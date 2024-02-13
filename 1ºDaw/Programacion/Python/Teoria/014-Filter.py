''' 
Las funciones filter() filtran una lista de elementos para los que una funcion devuelve True
La funcion filter() -> filter(funcion, elemento a recorrer)
Se usa normalmente conjunto al map y al lambda.
'''
import string as st

#Ejemplo 1
tuplaValores = (1,2,3,4,5,6,7,8,9)
print(list(filter(lambda x : x % 2 == 0, tuplaValores)))

#Ejemplo2
listaProgramacion = ["Python", 'java', 'c', 'c++', 'swift', 'javascript']
print(list(filter(lambda x : x[0] == 'j', listaProgramacion)))

#Ejemplo3
listaProgramacion = ["Python", 'java', 'c', 'c++', 'swift', 'javascript']
print(list(map(lambda x : x.upper() ,(list(filter(lambda x : x[0] == 'j', listaProgramacion))))))

#Ejemplo4
def numerosPrimos(numero, n = 2):
    if n >= numero:
        print("Es primo")
        return True
    elif numero % n != 0:
        return numerosPrimos(numero, n + 1)
    else:
        return False

print (list(filter(numerosPrimos, list(range(1,20)))))

#Ejemplo5
print(list(map(lambda x : x**2, filter (lambda x : x%2 == 1, list(range(1,20))))))

#Ejemplo6
letras = ['a', 'c', 'd', 'e', 'f', 'h', 'i']
print(list(filter (lambda x : x == 'a' or x == 'e' or x == 'i' or x == 'o' or x == 'u', letras)))

