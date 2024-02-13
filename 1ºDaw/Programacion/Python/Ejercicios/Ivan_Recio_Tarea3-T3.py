from functools import reduce
import math

def ejercicio1():
    dinero = [35000,35000,35000,35000]
    rango = [0,10000,20000,30000]
    impuesto = [0.1,0.15,0.2,0.25]
    
    print("Ejercicio 1:",reduce(lambda x,y : x+y, list(map(lambda x,y,z : ((x-y)*z), dinero, rango, impuesto))))
    
ejercicio1()

def ejercicio3():
    lista = ['hola','adios','hasta mañana','hola']
    listaNueva = []
    list(filter(lambda x : listaNueva.append(x) if x not in listaNueva else True, lista))
    print("Ejercicio 3:", listaNueva)
    
ejercicio3()

def ejercicio4():
    dict1 = {"a": 1, "b": 2, "c": 3}
    dict2 = {"b": 3, "c": 4, "d": 5}
    for llave, valor in dict1.items():
        if llave not in dict2:
            dict2[llave] = (valor)    
            dict1[llave] = 0
    print("Ejercicio 4:",dict(map(lambda x : (x,dict1[x] + dict2[x]) if x in dict1 else (x,dict2[x]), dict2)))

ejercicio4()

def ejercicio5():
    poligonos = [(3, 2), (4, 3), (5, 4), (6, 5)]
    print("Ejercicio 5:", list(map(lambda x: round((x[0] * x[1]**2) / (4 * math.tan(math.pi / x[0])), 3), poligonos)))
    
ejercicio5()

def ejercicio6():
    palabras = ['ana', 'payaso','faaf','tolllot','perro']
    print("Ejercicio 6:",list(filter(lambda x: x == x[::-1], palabras)))
    
ejercicio6()

def ejercicio7():
    puntos1 = [(0, 0), (1, 2), (3, 4)]
    puntos2 = [(2, 2), (2, 3), (5, 5)]
    print("Ejercicio 7:",list(map(lambda x : round(math.sqrt((x[0][0]-x[1][0])**2 + (x[0][1]-x[1][1])**2), 3), zip(puntos1, puntos2))))
    
ejercicio7()

def ejercicio8():
    vector1 = [1, 2, 3]
    vector2 = [4, 5, 6]
    vector3 = [7, 8, 9]
    print("Ejercicio 8:",reduce(lambda x, y: x+y, list(map(lambda x, y, z: x*y*z, vector1, vector2, vector3))))

ejercicio8()

def ejercicio9():
    temperaturas = [32, 64, 80, 100, 128]
    print("Ejercicio 9:", list(map(lambda x : "La temperatura " + str(x) + " en grados celsius es ->" + str(round((x - 32) * (5/9), 2)) 
    + " y en grados kelvin son " + str(round((x + 459.67) * (5/9), 2)), temperaturas)))
    
ejercicio9()