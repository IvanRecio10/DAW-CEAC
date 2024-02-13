print("-------------Ejercicio 1---------------")

l = ["perro", "gato", "elefante", "ardilla"]
verListaOrdenadaAlfabeticamente = lambda lista : sorted(lista)
print(verListaOrdenadaAlfabeticamente(l))

print("--------------Ejercicio 2---------------")

lista = [10,20,30,40,50,60,70,80,90,100]
verPorcentajes = lambda porcentaje : [i / 100 for i in porcentaje]
print(verPorcentajes(lista))

print("--------------Ejercicio 3---------------")

verFactorial = lambda x : 1 if x == 0 else x * verFactorial(x-1)
print(verFactorial(5))