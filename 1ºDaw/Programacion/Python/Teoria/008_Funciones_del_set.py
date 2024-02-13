set1 = {1,2,3,1,2,3,1,2,3}
print(type(set1))
'''
Un set puede contener numeros cadenas y tuplas
'''
print(set1)
set1.add("1")
print(set1)

set2 = {4,5,6,7,"a",7}
set1.update(set2)
print(set1)

set1.discard(1)
print(set1)

print("la cantidad de elementos del set es", len(set1))