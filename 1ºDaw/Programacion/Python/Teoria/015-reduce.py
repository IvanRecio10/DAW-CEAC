'''
La funcion functools.reduce se usa pata aplicar una funcion a los elementos de un objeto a recorrer(un iterador) de forma acumulativa
La funcion reduce() -> functools.reduce(funcion, lista)
'''
import functools as ft

#Ejemplo1
listaNum = [1,2,3,4,5,6,7,8]
print(ft.reduce(lambda x,y : x + y , listaNum))

#Ejemplo2
print(ft.reduce(lambda x,y : x * y, list(range(1,5))))

#Ejemplo3
listaNumeros = [2,5,7,22,23,56,86,333,124,678,321,6795,3324,22,3]
print(ft.reduce(lambda x,y : x if x > y else y, listaNumeros))

#Ejemplo4
l = [1,2,3]
print(ft.reduce(lambda x, y : x * 10 + y, l))

#Ejemplo4
lista = ['hola', 'buenos', 'dias', 'perro']
print(ft.reduce(lambda x, y : x + ' ' + y, lista))