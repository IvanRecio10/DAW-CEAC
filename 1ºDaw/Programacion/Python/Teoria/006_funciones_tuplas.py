tupla = (1,2,3)
print ("Tipo de un objeto tupla", type(tupla))
print("Representacion visual de una tupla", tupla)
print("Numero de elementos de una tupla", len(tupla))
print("Saber el elemento de una posicion de una tupla", tupla[0])
print("Saber el elemento de una posicion negativa de una tupla", tupla[-3])

lista =[1,2,3,1,1,1,1]
print(type(lista))
tupla1 = tuple(lista)
print(type(tupla1), tupla1)

print("Para saber cuantos elementos iguales hay en una tupla", tupla1.count(1))
