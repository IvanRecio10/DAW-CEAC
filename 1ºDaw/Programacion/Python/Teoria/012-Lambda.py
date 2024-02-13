'''
Funciones lambda o anonimas que normalmente se definen 
en una sola linea ya que no abarcan una gran complejidad

Las funciones lambda se definen de la siguiente forma:
    lambda parametros: logica
Esta funcion se va a guardar en una variable que luego puede ser llamada con una funcion
'''

def suma(x,y):
    return x+y

verLambdaSuma = lambda x,y : x+y

print(suma(3,2), "Funcion Normal Suma")
print(verLambdaSuma(1,2), "Funcion Lambda")

verLambdaElevar = lambda base, exponente : base**exponente

print(verLambdaElevar(5,2), "Funcion Lambda Elevar")

def funcion(x,y):
    print("Estoy dentro de la funcion")
    print(verLambdaSuma(x,y),"--",verLambdaElevar(x,y))
    print("Estoy fuera de la funcion")
    
print(funcion(2,3))

verLambdaNumeroPar = lambda x : x % 2 == 0
print(verLambdaNumeroPar(5))

