'''
    Queremos un afuncion que nos genere una sigla de un texto
        Filtrar aquellas palabras que no den sentido como los articulos, pronombres, numeros
        Filtrar palabras muy cortas como menos de 4 letras
    Tenemos 
        Libreria string sonde tienes los digitos y los simbolos
        El texto
        Filtrado de palabras cortas
        Separador de palabras
    No Tenemos
        Lista de articulos, determinantes, pronombres y prepoosiciones

    Un acronimo

'''
'''
texto="En un lugar de la Mancha, de cuyo nombre no quiero acordarme, no ha mucho tiempo que vivía un hidalgo de los de lanza en astillero, adarga antigua, rocín flaco y galgo corredor. Una olla de algo más vaca que carnero, salpicón las más noches, duelos y quebrantos los sábados, lentejas los viernes, algún palomino de añadidura los domingos, consumían las tres partes de su hacienda. El resto della concluían sayo de velarte, calzas de velludo para las fiestas con sus pantuflos de lo mismo, los días de entre semana se honraba con su vellori de lo más fino. Tenía en su casa una ama que pasaba de los cuarenta, y una sobrina que no llegaba a los veinte, y un mozo de campo y plaza, que así ensillaba el rocín como tomaba la podadera. Frisaba la edad de nuestro hidalgo con los cincuenta años, era de complexión recia, seco de carnes, enjuto de rostro; gran madrugador y amigo de la caza. Quieren decir que tenía el sobrenombre de Quijada o Quesada (que en esto hay alguna diferencia en los autores que deste caso escriben), aunque por conjeturas verosímiles se deja entender que se llama Quijana; pero esto importa poco a nuestro cuento; basta que en la narración dél no se salga un punto de la verdad."\
"Es, pues, de saber, que este sobredicho hidalgo, los ratos que estaba ocioso (que eran los más del año) se daba a leer libros de caballerías con tanta afición y gusto, que olvidó casi de todo punto el ejercicio de la caza, y aun la administración de su hacienda; y llegó a tanto su curiosidad y desatino en esto, que vendió muchas hanegas de tierra de sembradura, para comprar libros de caballerías en que leer; y así llevó a su casa todos cuantos pudo haber dellos; y de todos ningunos le parecían tan bien como los que compuso el famoso Feliciano de Silva: porque la claridad de su prosa, y aquellas intrincadas razones suyas, le parecían de perlas; y más cuando llegaba a leer aquellos requiebros y cartas de desafío, donde en muchas partes hallaba escrito: la razón de la sinrazón que a mi razón se hace, de tal manera mi razón enflaquece, que con razón me quejo de la vuestra fermosura, y también cuando leía: los altos cielos que de vuestra divinidad divinamente con las estrellas se fortifican, y os hacen merecedora del merecimiento que merece la vuestra grandeza. Con estas y semejantes razones perdía el pobre caballero el juicio, y desvelábase por entenderlas, y desentrañarles el sentido, que no se lo sacara, ni las entendiera el mismo Aristóteles, si resucitara para sólo ello. No estaba muy bien con las heridas que don Belianis daba y recibía, porque se imaginaba que por grandes maestros que le hubiesen curado, no dejaría de tener el rostro y todo el cuerpo lleno de cicatrices y señales; pero con todo alababa en su autor aquel acabar su libro con la promesa de aquella inacabable aventura, y muchas veces le vino deseo de tomar la pluma, y darle fin al pie de la letra como allí se promete; y sin duda alguna lo hiciera, y aun saliera con ello, si otros mayores y continuos pensamientos no se lo estorbaran."\
"Tuvo muchas veces competencia con el cura de su lugar (que era hombre docto graduado en Sigüenza), sobre cuál había sido mejor caballero, Palmerín de Inglaterra o Amadís de Gaula; mas maese Nicolás, barbero del mismo pueblo, decía que ninguno llegaba al caballero del Febo, y que si alguno se le podía comparar, era don Galaor, hermano de Amadís de Gaula, porque tenía muy acomodada condición para todo; que no era caballero melindroso, ni tan llorón como su hermano, y que en lo de la valentía no le iba en zaga."
"En resolución, él se enfrascó tanto en su lectura, que se le pasaban las noches leyendo de claro en claro, y los días de turbio en turbio, y así, del poco dormir y del mucho leer, se le secó el cerebro, de manera que vino a perder el juicio. Llenósele la fantasía de todo aquello que leía en los libros, así de encantamientos, como de pendencias, batallas, desafíos, heridas, requiebros, amores, tormentas y disparates imposibles, y asentósele de tal modo en la imaginación que era verdad toda aquella máquina de aquellas soñadas invenciones que leía, que para él no había otra historia más cierta en el mundo."
'''

import string as st

palabrasNoPermitidas = {}

palabrasNoPermitidas["articulos"] = ['el', 'la', 'los', 'las','un','una','unos','unas']
palabrasNoPermitidas["determinantes"] = ['este', 'ese', 'aquel', 'esta', 'esa', 'aquella','estos', 'esos', 'aquellos', 'estas', 'esas', 'aquellas', 'mi', 'tu', 'su', 'nuestro', 'vuestro', 'su', 'uno', 'dos', 'tres', 'medio', 'ambos', 'sendos', 'varias', 'muchos', 'pocos', 'bastantes', 'numerosos', 'escasos', 'ciertos', 'otros', 'varios', 'algún', 'ninguno', 'cualquiera', 'todo', 'cada', 'otro', 'bastante', 'suficiente', 'demasiado', 'tanto', 'poco', 'mucho', 'algunos', 'pocos', 'cualquier', 'ninguno', 'varios', 'cualquieras', 'todas', 'qué', 'cuál', 'quiénes', 'cuánto', 'cómo', 'dónde']
palabrasNoPermitidas["preposiciones"] = ['a', 'ante', 'bajo', 'cabe', 'con', 'contra', 'de', 'desde', 'en', 'entre', 'hacia', 'hasta', 'mediante', 'para', 'por', 'según', 'sin', 'sobre', 'tras']
palabrasNoPermitidas["numero"] = list(st.digits)
palabrasNoPermitidas["caracteres"] = list(st.punctuation)
palabrasNoPermitidas["espaciosEnBlanco"] = list(st.whitespace)

def generadorSiglas(palabrasNoPermitidas, texto, separadorDePalabra):
    textoSeparado = texto.split(separadorDePalabra)
    palabrasCorrectas = ""
    siglas = ""
    for palabras in textoSeparado:
        if palabras != palabrasNoPermitidas:
            palabrasCorrectas += palabras + " "
    
    palabrasCorrectas.capitalize()
    
    for i in palabrasCorrectas:
        if i == st.ascii_uppercase:
            siglas += i
    
    return siglas

print(generadorSiglas(palabrasNoPermitidas, texto, " "))
    