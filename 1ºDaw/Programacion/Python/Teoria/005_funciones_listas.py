#005 Funciones de las Listas
lista = [1,2,3,4,5,6,7,8,"a",[9,10,11]]

print(" La representacion en texto de una lista",lista)
print("Numero de elementos de una lista:", len(lista))
print("Accedemos a una posicion concreta:", lista[5])
print("Accedemos a un rango de una lista:", lista[1:5])
print("Accedemos a un indice negativo de una lista:", lista[-1])
print("Añadimos un elemento al final de la lista:", lista.append("Ultimo elemento"))
print(lista)

lista1 =  ["a", "b", "c"]
lista.append(lista1)
print(lista)
lista.extend("HOLA")

print("Para saber la primera posicion de un elemnto en una lista", lista.index("a"))
print("Para saber el numero de veces que esta un elemnto de la lista", lista.count("a"))
lista.remove("a")
print("Hemos eliminado la primera coincidencia de la variable de la lista ¡", lista)

lista.pop(2)
print("Hemso borrado la posicion 2 de la lista")

lista.reverse()
print("Hemos creado una nueva lista que contiene la anterior de manera reversa", lista)

listaDNI = [48147921, 4786412, 48148175]
listaDNI.sort()
print(listaDNI)
listaDNI.sort(reverse = True)
print(listaDNI)

l = [1]
l1 = l

print (l)
print (l1)

l.append(11)
l2 = l.copy()
l.append(111)

print (l)
print (l1)
print (l2)
print("ID lista l", id(l))
print("ID lista l1", id(l1))
print("ID lista l2", id(l2))

l.clear()
print("Lista vacia:", l)
