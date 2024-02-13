def verListaRecursivaConTipoDatos(estructura, numEspacios, tipoObjeto):
    indice = 0
    for elemento in estructura:
        separador = ""
        print(numEspacios*3*" " + str(indice) + ":", end="")
        if tipoObjeto == list:
            separador = "->"
        elif tipoObjeto == tuple:
            separador = "_>"
        elif tipoObjeto == set:
            separador = "=>"
        elif tipoObjeto == dict:
            separador = ".>"
        if isinstance(elemento, (list, set, tuple)):
            print (separador, type(elemento))
            verListaRecursivaConTipoDatos(elemento, numEspacios+1, type(elemento))
        elif type(elemento) == dict:
            if isinstance(elemento, (list, set, tuple)):
                print(separador, elemento, "-->", type(estructura[elemento]))
                verListaRecursivaConTipoDatos(estructura[elemento], numEspacios +1, type(estructura[elemento]))
            else:
                print(elemento, "-->", estructura[elemento])
        else:
            print(separador, elemento)
        indice+=1



l = [1,2,3,(1,2,3),4,5,6,[1,{"key1":1,"key2":2,"key3":{"Alumno1","Alumno2",True}},{1,2,3}]]
verListaRecursivaConTipoDatos(l,0,type(l))