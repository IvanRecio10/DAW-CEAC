def ejercicio4():
    dict1 = {"a": 1, "b": 2, "c": 3}
    dict2 = {"b": 3, "c": 4, "d": 5}
    dictFinal = {}
    for llave, valor in dict1.items():
        dict2[llave] = (valor)    
        dict1[llave] = 0
    print(dict2)

ejercicio4()