#!/usr/bin/env python
# coding: utf-8

# In[1]:


import pandas as pd
import matplotlib.pyplot as plt
import datetime
from datetime import datetime
from functools import reduce


# In[2]:


df=pd.read_csv("Examen.csv")


# In[3]:


''' Ejercicio 1
Dime la fecha más temprana y la más tardía del rellenado de formulario.
    'La fecha más temprana es:FECHA'
    'La fecha más tardia es:'
De esas fechas dime a continuación el día, mes y año.
    'De la fecha más temprana -> dia: DIA, -> mes: MES, -> año: AÑO'
    'De la fecha más tardia -> dia: DIA, -> mes: MES, -> año: AÑO'
Dime cuanto tiempo ha pasado entre una fecha y otra.
    'Entre las dos fechas ha pasado: TIEMPO'
No vale suponer que la primera entrada es la fecha más temprana y la última entrada la fecha más tardia.
'''


# In[4]:


lst_MarcaTemporal_str=list(df["Marca temporal"])
lst_MarcaTemporal_dt=[]
list(map(lambda f: lst_MarcaTemporal_dt.append(datetime.strptime(f,"%d/%m/%Y %H:%M:%S")) ,lst_MarcaTemporal_str))

fechaMin= min(lst_MarcaTemporal_dt)
fechaMax= max(lst_MarcaTemporal_dt)
print("La fecha más temprana es:",fechaMin)
print("La fecha más tardia es:",fechaMax)
print("De la fecha más temprana el día es:",fechaMin.day," y el mes es:",fechaMin.month," y el año es",fechaMin.year)
print("De la fecha más temprana el día es:",fechaMax.day," y el mes es:",fechaMax.month," y el año es",fechaMax.year)
print("Entre una fecha y otra ha pasado:",fechaMax-fechaMin)


# In[5]:


''' Ejercicio 2
Renómbrame la columna "¿Qué tipo de acciones sueles realizar justo antes de acostarte o de dormir?" por "ActividadesAntesDormir"
Crear un gráfico de barras horizontales donde el eje Y sea cada uno de las acciones independientes("Uso del móvil", "Estudiar", "Leer un libro"...) de la columna "ActividadesAntesDormir" y el eje X sea cuantas veces se repite.
El ejeX tiene que tener la siguiente etiqueta: "Núm. veces que se repite la actividad".
El ejeY tiene que tener la siguiente etiqueta: "Actividades".
El gráfico tiene que tener el siguiente título: "Actividades antes de irse a dormir".
'''


# In[6]:


df.rename(columns={"¿Qué tipo de acciones sueles realizar justo antes de acostarte o de dormir?":"ActividadesAntesDormir"},inplace=True)
dictActividades={}
for actividades in df["ActividadesAntesDormir"]:
    for actividad in str(actividades).split(","):
        if actividad in dictActividades:
            dictActividades[actividad]+=1
        else:
            dictActividades[actividad]=1

plt.barh(list(dictActividades.keys()),list(dictActividades.values()))
plt.xlabel("Num. veces que se repite cada actividad")
plt.ylabel("Actividades")
plt.title("Actividades antes de acostarse")


# In[7]:


''' Ejercicio 3
Crea una columna nueva llamada "SumaValores". Cada una de las entradas de esta columna será la suma de las columnas que empiecen por "Puntúa las siguientes frases"
Una vez rellenada esa columna querremos obtener aquellas entradas cuyos valores de la columna "SumaValores" sea igual o superior a la media de todos los valores de "SumaValores"
Despues de filtrar los datos se quiere cambiar el sexo de 2 de las entradas disponibles a "Prefiero no decirlo"
Por último se quiere hacer un gráfico de tarta donde se vea la suma total de "SumaValores" diferenciado por sexo.
'''


# In[8]:


df["SumaValores"]=df.iloc[:,11:21].sum(axis=1)
valorMedio=df["SumaValores"].mean()
#valorMedio=df.agg({"SumaValores":"mean"})
#valorMedio=df["SumaValores"].sum()/len(df["SumaValores"])
df[df["SumaValores"]>=valorMedio]
df.at[0,"¿Cuál es tu sexo?"]="Prefiero no decirlo"
df.at[1,"¿Cuál es tu sexo?"]="Prefiero no decirlo"
dfAgrupado=df.groupby("¿Cuál es tu sexo?").sum().reset_index()
dfAgrupado.plot(kind="pie",y="SumaValores", labels=dfAgrupado["¿Cuál es tu sexo?"])


# In[9]:


''' Ejercicio 4
Se quiere unir el siguiente diccionario al dataFrame del Examen.csv manteniendo todas las entradas del dataFrame del Examen.csv
En el dataFrame del Examen.csv se tiene que añadir la columna de ValorSexo.
'''
dictValorSexo={"Sexo":["Masculino","Femenino"],"ValorSexo":[1,2]}


# In[12]:


dfValorSexo=pd.DataFrame(dictValorSexo)
df.rename(columns={"¿Cuál es tu sexo?":"Sexo"}, inplace =True)
dfResultado=pd.merge(df,dfValorSexo,on="Sexo",how="left")
dfResultado


# In[13]:


''' Ejercicio 5
Obligatorio el uso de, al menos 1 vez, las funciones de map, filter, lambda y reduce
Escribe una función calcular_promedio_palabras que tome una lista de frases como entrada y devuelva el promedio de la longitud de las palabras en esas frases. El promedio debe redondearse a 2 decimales
Puedes usar todas las funciones auxiliares que quieras.
Se debe ignorar aquellas palabras de 2 o menos caracteres
Las palabras se separan por " " (espacio). Los signos que queden junto a las palabras se considerarán parte de la palabra
'''
frases = ["Hola, ¿cómo estás?", "Me gusta programar en Python", "Python es genial"]


# In[30]:


def calcular_promedio_palabras(frase):
    palabrasPorFrase=list(map(lambda p: p.split(),frase))
    numPalabras= list(filter(lambda p:len(p)>2,reduce(lambda x,y:x+y,palabrasPorFrase )))
    sumLongitudes=reduce(lambda x,y: x+y,map(len,numPalabras))    
    return round(sumLongitudes/len(numPalabras),2)


# In[31]:


calcular_promedio_palabras(frases)


# In[ ]:


['Hola,', '¿cómo', 'estás?' 'gusta', 'programar',  'Python','Python', 'genial']
[5,6,4,7,3]


# In[32]:





# In[ ]:




