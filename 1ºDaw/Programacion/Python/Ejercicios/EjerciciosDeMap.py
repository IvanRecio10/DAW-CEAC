'''
map(funcion, parametro)

La funcion map() devuelve un objeto map() que es un iterador que aplica a cada elemento la funcion indicada
'''

param1 = list((1,2,3,4,5,6,7,"buenos dias"))
def multiplicar2(p):
    return p*2
    
resultado = map(multiplicar2, param1)

for i in resultado:
    print(i)
    
param2 = ["anDreS", "RAul", "SARA", "FeRnaNDo"]

ordenarLista = lambda x : x.lower().capitalize()

resultado2 = map(ordenarLista, param2)

listaOredenadaAlfabeticamente = list(resultado2)
sorted(listaOredenadaAlfabeticamente)
print(listaOredenadaAlfabeticamente)
def cuadrado(x):
    return x**2
def cubo(x):
    return x**3

l = [1,2,3,4,5,100]
funciones = lambda x : print(cuadrado(x), "//", cubo(x))

resultado3 = map(funciones, l)

for i in resultado3:
    print(i)
    
lista = [[1,2,3], [4,5,6], [7,8,9]]
suma = lambda x : sum(x)
resultado4 = map(suma, lista)
for i in resultado4:
    print(i)