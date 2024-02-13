import random as rd
def probabilidadSucesos(probabilidad):
    while True:
        yield rd.random() < probabilidad

s = probabilidadSucesos(0.5)
for i in range(10):
    print(next(s))