/*
1-Escribe una función que haga una solicitud a la PokeAPI para obtener
información sobre un Pokémon específico y muestre su nombre y tipo en la consola.
*/

/*
2-Crea una función que solicite a la PokeAPI una lista de los primeros 
10 Pokémon y muestre sus nombres en la consola.

3-Diseña una función que consulte la PokeAPI para obtener la 
imagen de un Pokémon según su nombre y la muestre en una página web.

4-Desarrolla una función que realice una solicitud a la 
PokeAPI para obtener la lista de tipos de Pokémon disponibles 
y muestre los nombres de los tipos en la consola.

5-Escribe una función que solicite a la PokeAPI la información 
de un Pokémon por su número de identificación y 
muestre su altura y peso en la consola.

6-Crea una función que consulte la PokeAPI para obtener 
los movimientos de un Pokémon específico 
y los muestre en una página web.

7-Diseña una función que haga una solicitud a la PokeAPI 
para obtener una lista de Pokémon que pertenezcan a un 
tipo específico y muestre sus nombres en la consola.

8-Desarrolla una función que solicite a la PokeAPI la información 
de evolución de un Pokémon y muestre los nombres de los 
Pokémon relacionados en la consola.

9-Escribe una función que consulte la PokeAPI para obtener 
información sobre la habilidad de un Pokémon y 
muestre su descripción en la consola.

10-Crea una función que haga una solicitud a la PokeAPI para 
obtener la lista de regiones disponibles y muestre los nombres 
de las regiones en la consola.
*/

// Ejercicio 1
function obtenerPokemonInfo(nombre) {
  fetch(`https://pokeapi.co/api/v2/pokemon/${nombre}`)
    .then(response => response.json())
    .then(data => {
      console.log(`Nombre del Pokémon: ${data.name}`);
      console.log(`Tipo(s) del Pokémon: ${data.types.map(type => type.type.name).join(', ')}`);
    })
    .catch(error => console.error(`Error: ${error}`));
  return "salida ejercicio 1"
}

// Ejercicio 2
function obtenerPrimeros10Pokemon() {
  fetch('https://pokeapi.co/api/v2/pokemon?limit=10')
    .then(response => response.json())
    .then(data => {
      const pokemonNames = data.results.map(pokemon => pokemon.name);
      console.log(`Nombres de los primeros 10 Pokémon: ${pokemonNames.join(', ')}`);
    })
    .catch(error => console.error(`Error: ${error}`));
  return "salida ejercicio 2"
}

// Ejercicio 3
function mostrarImagenPokemon(nombre) {
  fetch(`https://pokeapi.co/api/v2/pokemon/${nombre}`)
    .then(response => response.json())
    .then(data => {
      const imageUrl = data.sprites.front_default;
      // Código para mostrar la imagen en una página web
      // Aquí deberíamos buscar o crear la etiqueta img para pasarle la url
    })
    .catch(error => console.error(`Error: ${error}`));
  return "salida ejercicio 3"
}

// Ejercicio 4
function obtenerTiposPokemon() {
  fetch('https://pokeapi.co/api/v2/type')
    .then(response => response.json())
    .then(data => {
      const typeNames = data.results.map(type => type.name);
      console.log(`Nombres de los tipos de Pokémon: ${typeNames.join(', ')}`);
    })
    .catch(error => console.error(`Error: ${error}`));
  return "salida ejercicio 4"
}

// Ejercicio 5
function obtenerAlturaYPesoPokemon(id) {
  fetch(`https://pokeapi.co/api/v2/pokemon/${id}`)
    .then(response => response.json())
    .then(data => {
      console.log(`Nommbre del Pokémon: ${data.name}`);
      console.log(`Altura del Pokémon: ${data.height}`);
      console.log(`Peso del Pokémon: ${data.weight}`);
    })
    .catch(error => console.error(`Error: ${error}`));
  return "salida ejercicio 5"
}

// Ejercicio 6
function mostrarMovimientosPokemon(nombre) {
  fetch(`https://pokeapi.co/api/v2/pokemon/${nombre}`)
    .then(response => response.json())
    .then(data => {
      const moves = data.moves.map(move => move.move.name);
      // Código para mostrar los movimientos en una página web
    })
    .catch(error => console.error(`Error: ${error}`));
  return "salida ejercicio 6"
}

// Ejercicio 7
function obtenerPokemonPorTipo(tipo) {
  fetch(`https://pokeapi.co/api/v2/type/${tipo}`)
    .then(response => response.json())
    .then(data => {
      console.log(data)
      const pokemonNames = data.pokemon.map(pokemon => pokemon.pokemon.name);
      console.log(`Nombres de Pokémon de tipo ${tipo}: ${pokemonNames.join(', ')}`);
    })
    .catch(error => console.error(`Error: ${error}`));
}


// Ejercicio 8: Obtener información de evolución de un Pokémon
function obtenerInfoEvolucionPokemon(nombre) {
  // Paso 1: Obtener la especie del Pokémon
  fetch(`https://pokeapi.co/api/v2/pokemon-species/${nombre}`)
    .then(response => response.json())
    .then(speciesData => {
      // Paso 2: Obtener la URL de la cadena de evolución
      const evolutionChainUrl = speciesData.evolution_chain.url;

      // Paso 3: Realizar una nueva solicitud para obtener la cadena de evolución
      fetch(evolutionChainUrl)
        .then(response => response.json())
        .then(evolutionData => {
          // Paso 4: Procesar y mostrar la información de evolución
          const evolutionChain = parseEvolutionChain(evolutionData.chain);
          console.log(`Información de evolución de ${nombre}:`);
          displayEvolutionChain(evolutionChain);
        })
        .catch(error => console.error(`Error en la solicitud de evolución: ${error}`));
    })
    .catch(error => console.error(`Error en la solicitud de especie: ${error}`));
}

// Función para analizar la cadena de evolución de un Pokémon
function parseEvolutionChain(chain) {
  const evolutionChain = [];
  parseEvolution(chain, evolutionChain);
  return evolutionChain;
}

// Función recursiva para analizar la cadena de evolución
function parseEvolution(node, evolutionChain) {
  const name = node.species.name;
  evolutionChain.push(name);

  if (node.evolves_to.length > 0) {
    for (const evolution of node.evolves_to) {
      parseEvolution(evolution, evolutionChain);
    }
  }
}

// Función para mostrar la cadena de evolución en la consola
function displayEvolutionChain(evolutionChain) {
  for (let i = 0; i < evolutionChain.length; i++) {
    console.log(`Nivel ${i + 1}: ${evolutionChain[i]}`);
  }
}



// Ejercicio 9
function obtenerDescripcionHabilidad(nombre) {
  // Realiza una solicitud para obtener los detalles de la habilidad
  fetch(`https://pokeapi.co/api/v2/ability/${nombre}`)
    .then(response => response.json())
    .then(abilityData => {
      // Obtiene la descripción de la habilidad
      const description = abilityData.effect_entries[0].effect;
      console.log(`Descripción de la habilidad ${nombre}:`);
      console.log(description);
    })
    .catch(error => console.error(`Error: ${error}`));
}

// Ejercicio 10
function obtenerRegiones() {
  // Realiza una solicitud para obtener la lista de regiones
  fetch('https://pokeapi.co/api/v2/region')
    .then(response => response.json())
    .then(regionData => {
      // Extrae los nombres de las regiones
      const regionNames = regionData.results.map(region => region.name);
      console.log('Regiones disponibles:');
      console.log(regionNames.join(', '));
    })
    .catch(error => console.error(`Error: ${error}`));
}