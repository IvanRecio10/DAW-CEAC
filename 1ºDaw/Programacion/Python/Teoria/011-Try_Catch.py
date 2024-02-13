'''
try:
    codigo a ejecutar
except <tipo de error>:
    para manejar una excepcion concreta
except:
    para manejar todas las excepciones
else:
    bloque de codigo que se ejecuta en caso de que el bloque del try no de error
finally:
    bloque de codigo que se ejecuta siempre
'''

try:
    print (4/0)
except ZeroDivisionError as error:
    print ("El bloque TRY ha dado error --->", error)
else: 
    print ("El bloque TRY no ha dado error")
finally:
    print("Este bloque se ejecuta siempre")