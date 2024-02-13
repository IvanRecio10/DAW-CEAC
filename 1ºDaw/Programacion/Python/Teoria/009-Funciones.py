def funcionMultiplesRetornos():
    return 1,2,3,4
print(funcionMultiplesRetornos())
obj1, obj2, obj3, obj4 = funcionMultiplesRetornos()
print(obj1, obj2, obj3, obj4)
obj1, obj2,_, obj4 = funcionMultiplesRetornos()
print(obj1, obj2, obj4)

d = {"item1": 1, "item2": 2, "item3": 3}
for elementos in d.items():
    print(elementos)
