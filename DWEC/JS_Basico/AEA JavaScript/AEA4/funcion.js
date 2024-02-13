$.ajax({
    url: "https://pokeapi.co/api/v2/ability?offset=0&limit=363",
    method: "get",
    dataType: "json",
    success: function (data) {
        for(habilidad of data.results){
            $("#habilidades").append("<option>"+ habilidad.name +"</option>")
        }
    },
    error: function (xhr, status, error) {
        debugger
    }
})  

/**
 * Ahora cuando pulsemos el boton de Buscar pokemon por habilidad vamos a llamar a una funcion que 
 * nos pase la habilidad elegida. Vamos a crear un ayax que nos recoga todos los pokemons
 * y vaya añadiendo al div solo los que esten.
 */

$("#buscarHabilidad").on("click", function(e){
    e.preventDefault()
    $("#pokemons").html("")
    buscarPokemonsPorHabilidad($("#habilidades").val())
})

function buscarPokemonsPorHabilidad(habilidadElegida){
    $.ajax({
        url: "https://pokeapi.co/api/v2/ability/" + habilidadElegida,
        dataType: "json", 
        success: function(data){
            for (pokemon of data.pokemon){
                generarPokemon(pokemon.pokemon.name)
            }
        },
        error: function(xhr, status, error){
            debugger
        }
    })
}

function generarPokemon(nombre){
    $.ajax({
        url: "https://pokeapi.co/api/v2/pokemon/" + nombre,
        dataType: "json", 
        success: function(data){
            var pokemon = ""
            pokemon += "<div class='pokemonElegido'>"
            pokemon += "<img src="+ data.sprites.other.dream_world.front_default+">"
            pokemon += "<p>"+ data.name +"</p></div>"
            $("#pokemons").append(pokemon)
        },
        error: function(xhr, status, error){
            debugger
        }
    })
}

/**
 * Ahora le vamos a añadir las funciones al modal
 * Primero vamos a crear un evento para cuando pulsemos en el div que contiene 
 * al pokemon y a la imagen
 */

$("#pokemons").on("click", ".pokemonElegido", function(e){
    e.preventDefault()
    generarModal($(this).find("p").text())
    $(".modal").show()
})

$(".close").on("click", function(e){
    e.preventDefault()
    $(".modal").hide()
    $(".iconos").html("")
    $(".contenidoModal").html("")
})

function generarModal(nombre){
    $.ajax({
        url: "https://pokeapi.co/api/v2/pokemon/" + nombre,
        dataType: "json", 
        success: function(data){
            $(".modal-title").text(data.name)
            var iconos = ""
            iconos += "<i class='fa-regular fa-image'></i>"
            iconos += "<i class='fa-solid fa-list'></i>"
            iconos += "<i class='fa-solid fa-star'></i>"
            $(".iconos").append(iconos)
        },
        error: function(xhr, status, error){
            debugger
        }
    }) 
}

$(".iconos").on("click", ".fa-image", function(e){
    e.preventDefault()
    if($(".contenidoModal").html() != ""){
        $(".contenidoModal").html("")
    }
    rellenarModal($(this).closest(".modal-content").find(".modal-header h5").text(), "imagenes")
})
$(".iconos").on("click", ".fa-star", function(e){
    e.preventDefault()
    if($(".contenidoModal").html() != ""){
        $(".contenidoModal").html("")
    }
    rellenarModal($(this).closest(".modal-content").find(".modal-header h5").text(), "stats")
})
$(".iconos").on("click", ".fa-list", function(e){
    e.preventDefault()
    if($(".contenidoModal").html() != ""){
        $(".contenidoModal").html("")
    }
    rellenarModal($(this).closest(".modal-content").find(".modal-header h5").text(), "gen")
})

function rellenarModal (nombre, tipoModal){
    $.ajax({
        url: "https://pokeapi.co/api/v2/pokemon/" + nombre,
        dataType: "json", 
        success: function(data){
            debugger
            switch (tipoModal) {
                case "imagenes":              
                    var imagenes = ""
                    imagenes += "<p>Imagenes</p>"
                    imagenes += "<img src="+data.sprites.front_default+">"
                    imagenes += "<img src="+data.sprites.back_default+">"
                    imagenes += "<img src="+data.sprites.front_shiny+">"
                    $(".contenidoModal").append(imagenes)
                    break;
                case "gen":
                    var gen = ""
                    for (var geneneracion of data.game_indices){
                        gen += "<p>"+ geneneracion.version.name +"</p>"
                    }
                    $(".contenidoModal").append(gen)
                    break;
                case "stats":
                    var stats = ""
                    stats += "<p>Vida: "+ data.stats[0].base_stat + "</p>"
                    stats += "<p>Ataque:"+ data.stats[1].base_stat + "</p>"
                    stats += "<p>Defensa: "+ data.stats[2].base_stat + "</p>"
                    stats += "<p>Ataque Especial: "+ data.stats[3].base_stat + "</p>"
                    stats += "<p>Defensa Especial: "+ data.stats[4].base_stat + "</p>"
                    stats += "<p>Velocidad: "+ data.stats[5].base_stat + "</p>"
                    $(".contenidoModal").append(stats)
                    break;
            }
        },
        error: function(xhr, status, error){
            debugger
        }
    })  
}