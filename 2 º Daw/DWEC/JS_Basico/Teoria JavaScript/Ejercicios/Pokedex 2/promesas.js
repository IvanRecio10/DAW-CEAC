/*
0- Crea un bucle de 1 a 200000, cuando termine devuelve la promesa con un "He terminado"
*/

  function ej1(){
    return new Promise((resolve, reject)=>{
        for(var i = 1; i < 200000; i++){
        }
        resolve("He terminado")
    })
  }

  ej1().then(x=> console.log(x))

/*
1-Crea una promesa que simule la carga de una imagen en un div
y se resuelva cuando la imagen haya terminado de cargar.
*/
  function ej2(){
    return new Promise((resolve, reject)=>{
      var divImagen = document.querySelector(".ejc2")
      divImagen.innerHTML += "<img src='https://img.freepik.com/foto-gratis/pintura-lago-montana-montana-al-fondo_188544-9126.jpg?w=1380&t=st=1704965879~exp=1704966479~hmac=e3c42237a3df374cc017c2e94d9d71ccaa3b2a935339f3d092b1845110c76c68'>"
      resolve("La imagen ha cargado")
    })
  }

  ej2().then(x=>console.log(x))
/*
2-Implementa una función que devuelva una 
promesa para simular una solicitud HTTP a un servidor 
ficticio y que se resuelva con datos simulados.
*/
  function ej3(){
    return new Promise((resolve,reject)=>{
      setTimeout(() =>{
        const datosSimulados = "Hola muy buenas"
        resolve(datosSimulados)
      },2000)
    })
  }
/*
3-Escribe una función que reciba un número y 
devuelva una promesa que se resuelva con el 
número multiplicado por 2 después de 1 segundo.
*/
  function ej4(){
    return new Promise((resolve, reject)=>{
      var resultado = 0
      setTimeout(() => {
        resultado= 2*2
        resolve(resultado)
      }, 1000);
    })
  }

/*
4-Define una función que realice dos solicitudes 
HTTP en paralelo a dos URLs diferentes y devuelva 
una promesa que se resuelva con los resultados de ambas solicitudes.
*/

/*
5-Crea una promesa que se resuelva después de 3 segundos 
con un mensaje de "Éxito" y que se rechace después de 5 
segundos con un mensaje de "Error". ¿Se mostrarán los 2 mensajes o solo 1?
*/
  function ej5(){
    return new Promise((resolve, reject)=>{
      setTimeout(() => {
        resolve("Exito")
      }, 2500);
      setTimeout(() => {
        reject("Error")
      }, 5000);
    
    })
  }
/*
6-Implementa una función que reciba un array de 
promesas y utilice Promise.all() para resolver todas 
las promesas y devolver un array con los resultados.
*/
  function ej6(array){
    return new Promise.all(array)
  }
/*
7-Escribe una función que realice una solicitud HTTP 
y que maneje errores utilizando .catch() para mostrar 
un mensaje de error en caso de que la solicitud falle.
*/

  function ej7(url){
    return new Promise((resolve, reject) => {
      try {
        if(!url.ok){
          throw new Error("Error")
        }
        resolve("Esta bien")
      } catch (error) {
        reject("Ha habido un error")
      }
    })
  }
 
/*
8-Define una promesa que se resuelva con el resultado 
de una operación asíncrona, como la obtención de la 
ubicación actual del usuario mediante el API de geolocalización del navegador.

9-Crea una función que utilice .then() para encadenar 
tres promesas consecutivas, donde cada una depende del 
resultado de la anterior.

10-Implementa una función asíncrona que utilice await 
para esperar la resolución de una promesa antes de 
realizar una acción posterior, como mostrar el resultado en la consola.

11-Promesa con Uso de Local Storage
Crea una promesa que permita almacenar y recuperar datos en el
Local Storage del navegador de manera asincrónica.

12-Crea una función llamada convertirUnidad que tome una cantidad,
una unidad de medida de entrada y una unidad de medida de salida
como argumentos y devuelva una promesa. Esta promesa debe convertir
la cantidad de una unidad de medida a otra y resolver con un mensaje
que indique la conversión realizada o rechazar con un mensaje de error
si las unidades de medida no son compatibles.

13-Crea una función llamada verificarDisponibilidadUsuario que tome
un nombre de usuario como argumento y devuelva una promesa.
Esta promesa debe simular la verificación de disponibilidad
de un nombre de usuario en una base de datos simulada y resolver
con un mensaje que indique que el nombre de usuario está disponible
o rechazar con un mensaje de error si el nombre de usuario ya está en uso.

14-Crea una función llamada consultarAPI que tome una URL como argumento
y devuelva una promesa. Esta promesa debe realizar una solicitud HTTP a la URL
proporcionada y resolver con los datos obtenidos de la API o
rechazar con un mensaje de error en caso de problemas en la consulta.


*/


//Ejercicio0

function bucle(){
  for(var i=0; i< 20000; i++){
  }
  return Promise.resolve("He terminado\n")
}

function llamarBucle(){
  bucle().then(d=>console.log(d))
  console.log("hago otras cosas ")
}


//Ejercicio1
function cargarImagen(url) {
  const imagen = new Image();
  return new Promise((resolve, reject) => {
    imagen.src = url;
    try {
      document.getElementById("contenedor").append(imagen)
      resolve("La imagen se ha cargado con éxito");
    } catch (error) {
      reject("Error al cargar la imagen");
    }

  });
}
//cargarImagen("https://img.freepik.com/foto-gratis/copas-champan-luces-bokeh_23-2148761511.jpg?w=740&t=st=1704192375~exp=1704192975~hmac=e60dfad83fb1925e2ffaaa4bc17c9dee4ba8c10f855288e14c768d86568de458")
//.then(d=>console.log(d))

//Ejercicio 2
function simularSolicitudHTTP() {
  return new Promise((resolve, reject) => {
    setTimeout(() => {
      const datosSimulados = "Datos de respuesta ficticios";
      resolve(datosSimulados);
    }, 2000);
  });
}
//simularSolicitudHTTP().then(data=>console.log(data))

//Ejercicio 3
function multiplicarPorDos(numero) {
  return new Promise((resolve, reject) => {
    setTimeout(() => {
      if (typeof numero === "number") {
        resolve(numero * 2);
      } else {
        reject("Entrada no válida");
      }
    }, 1000);
  });
}


//Ejercicio 4
function realizarSolicitudesHTTP(urls) {
  const promesas = urls.map(url =>
    fetch(url).then(response => response.json())
  );
  return Promise.all(promesas);
}
/*
var arrayUrls=[
  "https://pokeapi.co/api/v2/pokemon/1",
  "https://pokeapi.co/api/v2/pokemon/2"
]
realizarSolicitudesHTTP(arrayUrls).then(datos=> console.log(datos))
*/

//Ejercicio 5
function promesaResueltaYRechazada() {
  return new Promise((resolve, reject) => {
    setTimeout(() => {
      resolve("Éxito");
    }, 3000);

    setTimeout(() => {
      reject("Error");
    }, 5000);
  });
}


//Ejercicio 6
function resolverPromesas(arrPromesas) {
  return Promise.all(arrPromesas);
}

//Ejercicio 7
function solicitudHTTPConCatch(url) {
  return fetch(url)
    .then(response => {
      if (!response.ok) {
        throw new Error("Error en la solicitud HTTP");
      }
      return response.json();
    })
    .catch(error => {
      console.error("Error:", error);
    });
}


//Ejercicio 8

function obtenerUbicacionActual() {
  return new Promise((resolve, reject) => {
    if ("geolocation" in navigator) {
      navigator.geolocation.getCurrentPosition(
        position => resolve(position),
        error => reject(error)
      );
    } else {
      reject("Geolocalización no disponible en este navegador");
    }
  });
}

//Ejercicio 9
function encadenarPromesas() {
  // Primera promesa que simplemente resuelve con un valor inicial
  let primeraPromesa = Promise.resolve(1);

  primeraPromesa
      .then(valor => {
          // Primera operación: incrementa el valor
          return valor + 1;
      })
      .then(nuevoValor => {
          // Segunda operación: multiplica el valor
          return nuevoValor * 2;
      })
      .then(resultadoFinal => {
          // Tercera operación: imprime el resultado
          console.log("Resultado final:", resultadoFinal);
      })
      .catch(error => {
          // Manejo de errores
          console.error("Error en la cadena de promesas:", error);
      });
}

//Ejercicio 10
async function esperarPromesa() {
  try {
    const resultado = await simularSolicitudHTTP();
    console.log(resultado);
  } catch (error) {
    console.error(error);
  }
}

// Ejercicio 11
function almacenarEnLocalStorage(clave, valor) {
  return new Promise((resolve, reject) => {
    try {
      localStorage.setItem(clave, valor);
      resolve(`Valor '${valor}' almacenado en Local Storage con clave '${clave}'`);
    } catch (error) {
      reject(`Error al almacenar en Local Storage: ${error.message}`);
    }
  });
}

function obtenerDeLocalStorage(clave) {
  return new Promise((resolve, reject) => {
    const valor = localStorage.getItem(clave);
    if (valor !== null) {
      resolve(`Valor recuperado de Local Storage: '${valor}'`);
    } else {
      reject(`Clave '${clave}' no encontrada en Local Storage`);
    }
  });
}

// Llamada de prueba
almacenarEnLocalStorage('nombre', 'Juan')
  .then((resultado) => {
    console.log(resultado);
    return obtenerDeLocalStorage('nombre');
  })
  .then((resultado) => {
    console.log(resultado);
  })
  .catch((error) => {
    console.error(error);
  });

//ejecicio 12

function convertirUnidad(cantidad, unidadDeEntrada, unidadDeSalida) {
  const conversiones = {
    metro: {
      pie: 3.28084,
      pulgada: 39.3701,
    },
    litro: {
      galon: 0.264172,
    },
    // Agrega más conversiones según sea necesario
  };

  return new Promise((resolve, reject) => {
    if (conversiones[unidadDeEntrada] && conversiones[unidadDeEntrada][unidadDeSalida]) {
      const resultado = cantidad * conversiones[unidadDeEntrada][unidadDeSalida];
      resolve(`${cantidad} ${unidadDeEntrada} es igual a ${resultado.toFixed(2)} ${unidadDeSalida}`);
    } else {
      reject('Unidad de conversión no válida');
    }
  });
}

// Llamada de prueba
convertirUnidad(5, 'metro', 'pie')
  .then((resultado) => {
    console.log(resultado);
  })
  .catch((error) => {
    console.error(error);
  });


//Ejercicio 13

const usuariosRegistrados = ['usuario1', 'usuario2', 'usuario3'];

function verificarDisponibilidadUsuario(nombreUsuario) {
  return new Promise((resolve, reject) => {
    setTimeout(() => {
      if (!usuariosRegistrados.includes(nombreUsuario)) {
        resolve('Nombre de usuario disponible');
      } else {
        reject('Nombre de usuario ya está en uso');
      }
    }, 2000);
  });
}

// Llamada de prueba
verificarDisponibilidadUsuario('nuevoUsuario')
  .then((resultado) => {
    console.log(resultado);
  })
  .catch((error) => {
    console.error(error);
  });

//ejercicio 14
function consultarAPI(url) {
  return new Promise((resolve, reject) => {
    fetch(url)
      .then((response) => response.json())
      .then(resolve)
      .catch(reject);
  });
}

// Llamada de prueba
const urlAPI = 'https://pokeapi.co/api/v2/pokemon/ditto';
consultarAPI(urlAPI)
  .then((datos) => {
    console.log('Datos obtenidos:', datos);
  })
  .catch((error) => {
    console.error('Error en la consulta API:', error);
  });
