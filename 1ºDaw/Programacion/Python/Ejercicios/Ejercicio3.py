def ejercicio3():
    lista = ['hola','adios','hasta mañana','hola']
    listaNueva = []
    list(filter(lambda x : listaNueva.append(x) if x not in listaNueva else True, lista))
    print(listaNueva)
    
ejercicio3()