'''
Letras
números
caracteres especiales
'''
import string as st
import random as rd

def generarContraseñaSegura(longContraseña):
    if longContraseña< 8:
        yield "La contraseña debe de tener más de 8 caracteres"
    else:
        listaCaracteresValidos = list(set(st.ascii_letters + st.digits + st.punctuation))
        while True:
            listaCaracteresContraseña= rd.choices(listaCaracteresValidos, k= longContraseña)
            contraseñaFinal = "".join(listaCaracteresContraseña)
            caractreresEspecialesPresentes = comprobarCarcteres(contraseñaFinal,st.punctuation)
            digitosPresentes = comprobarCarcteres(contraseñaFinal,st.digits)
            letraMayusculaPresente = comprobarCarcteres(contraseñaFinal,st.ascii_uppercase)
            letraMinusculaPresente = comprobarCarcteres(contraseñaFinal,st.ascii_lowercase)
            
            if caractreresEspecialesPresentes and digitosPresentes and letraMayusculaPresente and letraMinusculaPresente:
                yield contraseñaFinal
            
def comprobarCarcteres(contraseña, caracteresAComprobar):
    for carcaterContraseña in contraseña:
        if caracterContraseña in caracteresAComprobar:
            return True
    return False
            
#iteradorFuncion= generarContraseñaSegura(10)
#print(next(iteradorFuncion))
        
        
        
        
        
        
    
