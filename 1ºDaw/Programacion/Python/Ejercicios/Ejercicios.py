from functools import reduce

def ejercicio1():
    dinero = [35000,35000,35000,35000]
    rango = [0,10000,20000,30000]
    impuesto = [0.1,0.15,0.2,0.25]
    
    print(reduce(lambda x,y : x+y, list(map(lambda x,y,z : ((x-y)*z), dinero, rango, impuesto))))
    
ejercicio1()

def ejercicio2():
    lista = [("Pablo"),("Marcos"),("Marta")]