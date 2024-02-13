// Generar Correos

    function generarCorreos(){
        
        var correo = "<tr><td class='correoElegido'>"
        correo += "<div class='cabeceraCorreo'>"+ contador 
        correo += "<i class='fa-solid fa-user usr'></i><input type='checkbox' class='chbox'>"
        correo += "Nombre del Correo"
        correo += "<i class='fa-regular fa-envelope sobre'></i>"
        correo += "<i class='fa-regular fa-bookmark marca'></i>" //fa-solid para cuando este marcado
        correo += "<i class='fa-solid fa-thumbtack chincheta'></i>"
        correo += "<i class='fa-solid fa-trash-can papelera'></i></div>"
        correo += "<div class='textoCorreo'><p>Texto del correo</p></div></td></tr>"
        
        return correo;
        
    }

    var contador = 0
    $("#añadirEmail").on("click", function(){
        contador++
        var correo = generarCorreos()
        $(".correosRecibidos").append(correo)
        $(".chbox").hide()
        $(".sobre").hide()
        $(".marca").hide()
        $(".chincheta").hide()
        $(".papelera").hide()
    })

//Modificador de correo

    $(".correosRecibidos").on("mouseenter", "tr", function(){
        $(this).find(".usr").hide()
        $(this).find(".chbox").show()
        $(this).find(".sobre").show()
        $(this).find(".marca").show()
        $(this).find(".chincheta").show()
        $(this).find(".papelera").show()
    })

    $(".correosRecibidos").on("mouseleave", "tr", function(){
        $(this).find(".usr").show()
        $(this).find(".chbox").hide()
        $(this).find(".sobre").hide()
        $(this).find(".marca").hide()
        $(this).find(".chincheta").hide()
        $(this).find(".papelera").hide()
    })

//Anclar correos
    $("tbody").on("click", "tr td .marca", function(){
        if($(this).hasClass("fa-regular")){
            $(this).removeClass("fa-regular")
            $(this).addClass("fa-solid")
        }else{
            $(this).removeClass("fa-solid")
            $(this).addClass("fa-regular") 
        }
    })

//Borrar correos
    function borrarCorreo(html){
        if($(html).find(".marca").hasClass("fa-regular")){
            html.remove()
        }
    }
    $("#eliminarEmail").on("click", function(){
        for(etiqueta of $(":checked").closest("tr")){
            borrarCorreo(etiqueta)
        }
    })

    $("tbody").on("click", "tr td .papelera", function(){
        borrarCorreo(this.closest("tr"))
    })

//Seleccionar todo
    $("#seleccionarTodo").on("click", function(){
        $("input").attr("checked", "true");
    })