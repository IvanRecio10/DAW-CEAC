//Iván Recio Heras
    
    //Primero vamos a crear la funcion que va a hacer que aparezcan los botones o desaparezcan.
    function mostrarBotones(){
        //Si se llama a esta funcion es porque he cambiado el estado del Checkbox
        //Primero vamos a encontrar los botones con un querySelectorAll()
        var btns = document.querySelectorAll("button");
        //Una vez ya tenemos los botones vamos a cambiar su estado
        for(btn of btns){
            //Recorremos todos los botones que tengamos.
            //Si el boton esta visible lo cambiamos a invisible y viceversa
            if(btn.style.display == "block"){
                btn.style.display = "none";
            }else{
                btn.style.display = "block";
            }
        }  
    }


    //Ahora vamos a crear la funcion de abrir una ventana
    function abrirVentana(){
        //Primero buscamos el input que tenga la url.
        var textoUrl = document.querySelector("input[name='url']")
        //Comprobamos si en el input hemos escrito algo.
        if(textoUrl.value.lenght != 0 ){
            //Si hay algo escrito abrimos la nueva pestaña
            window.open(textoUrl.value)
        }
    }

    //Ahora vamos a cambiar el color de los parrafos.
    function cambiarColorParrafo(html){
        //Primero queremos saber que color vamos a cambiar las letras, para eso buscamos el texto que esta dentro del parrafo.
        colorElegido = html.innerText
        //Una vez ya tenemos el color, buscamos todas las etiquetas p
        var parrafos = document.querySelectorAll("p")
        //Recorremos las etiquetas parrafo y le cambiamos el color
        for(parrafo of parrafos){
            parrafo.style.color = colorElegido
        }
    }

    //Ahora vamos a crear la funcionalidad de la tabla, primero vamos a crear una variable que es el indice que se lo vamos a pasar a la funcion para que vaya controlando esto.
    
    function añadirFila(){
        //Primero vamos a comprobar si la tabla ya se ha creado, si no se ha creado ps la crearemos nosotros.
        if (document.querySelector("table") == null){
            //Si no esta creado ahora encontramos el ultimo div y añadimos la tabla
            var divTabla = document.querySelector("main").lastElementChild
            divTabla.innerHTML += "<table><thead><th>Indice</th><th>Input 1</th><th>Input 2</th><th>Guardar</th><th>Borrar</th></thead><tbody><tr><td>1</td><td><input type='text' name='textoTabla1'></td><td><input type='text' name='textoTabla2'></td><td><button style='display: block;' onclick='guardarDatos(this)'>Guardar Datos</button></td><td><button style='display: block;' onclick='borrarDatos(this)'>Borrar Datos</button></td></tr></tbody></table>";
        }else{
            //Si la tabla ya se ha creado, buscamos el tbody y añadimos mas elementos
            var tabla = document.querySelector("tbody")
            var tamañoTabla = document.querySelectorAll("tr").length
            tabla.innerHTML+="<tr><td>"+(tamañoTabla) +"</td><td><input type='text' name='textoTabla1'></td><td><input type='text' name='textoTabla2'></td><td><button style='display: block;' onclick='guardarDatos(this)'>Guardar Datos</button></td><td><button style='display: block;' onclick='borrarDatos(this)'>Borrar Datos</button></td></tr>"
        }
    }

    //Ahora vamos a crear las funciones de guardar datos o borrar datos.
    function guardarDatos(html){
        //Primero vamos a comprobar si los inputs estan vacios
        var trSeleccionado = html.closest("tr")
        var textosTabla = trSeleccionado.querySelectorAll("td input[type='text']")
        for(input of textosTabla){
            if (input.value == ""){
                alert("No has introducido nada")
                return
            }
        }
        for(input of textosTabla){
            alert("Has ingresado este valor: \n" + input.value)
        }
        trSeleccionado.style.background = "green";
    }

    function borrarDatos(html){
        //Primero vamos a comprobar si los inputs estan vacios
        var trSeleccionado = html.closest("tr")
        var textosTabla = trSeleccionado.querySelectorAll("td input[type='text']")
        for(input of textosTabla){
            if (input.value == ""){
                alert("No has introducido nada")
                return
            }
        }
        for(input of textosTabla){
            alert("Has borrado este valor: \n" + input.value)
        }
        trSeleccionado.style.background = "red";
    }
    
