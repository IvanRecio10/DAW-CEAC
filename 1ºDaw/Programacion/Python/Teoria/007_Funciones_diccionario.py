dictionary = {"elem1": 7, "elem2": "perro", "elem3": [1,2,3], "elem4": (1,2,3,4)}
print("Tipo del objeto dictionary", type(dictionary))

print("Para acceder a una clave concreta del diccionario", dictionary["elem3"])
dictionary["ElemNuevo"] = "Nuevo Elemento"
print("Para añadir un elemento nuevo", dictionary)

dictionary.update({"elem8": 8})
print("Para actualizar el diccionario con funcion", dictionary)

print("Para saber las claves que pertenecen al dictionary", dictionary.keys())
print("Para saber los valores que pertenecen al dictionary", dictionary.values())

for elemento in dictionary.keys():
    print(elemento, dictionary[elemento])
    
print("los pares de la clave valor", dictionary.items())

#print("Buscamos la clave concreta, la cual no esta", dictionary["1234"])
print("Buscamos la clave concreta, la cual si esta", dictionary.get("1234", "Esta clave no esta presente"))
print("Buscamos la clave concreta, la cual si esta", dictionary.get("elem1", "Esta clave no esta presente"))

d1={"elem1": 1}
d2=d1
print(d1, d2)
d1.update({"elem2" : 2})
print(d1, d2)
d3 = d1.copy()
print(d1,d2,d3)
d1.update({"elem3": 3})
print(d1,d2,d3)
print(id(d1),id(d2),id(d3))

d1.pop("123", "ESTA CLAVE NO EXISTE")
print(d1)
print(d1.pop("elem1", "ESTA CLAVE NO EXISTE"))
print(d1)