import { useState } from "react"
import Stats from "./Stats.jsx"
import Titulo from "./Titulo.jsx"
import Imagen from "./Imagen.jsx"

const Carta = () => {
    var generarPokemon = () => {
    const [listaPokemons, setListaPokemon] = useState([])
    fetch("https://pokeapi.co/api/v2/pokemon?limit=151")
    .then(response => response.json()).then(data => {
        for (var nombre of data.results){
            fetch("https://pokeapi.co/api/v2/pokemon/" + nombre.name).then(response => response.json()).then(data => {
                setListaPokemon([...listaPokemons,{nombre: data.name, stats: data.stats, imagen: data.sprites.other.dream_world.front_default}])
            })
            
        }
    })  
}

    return (<>
        <div>
            {
                listaPokemons.map(pokemon => {
                    <div>
                        <Titulo nombre={pokemon.nombre}></Titulo>
                        <Stats stats={pokemon.stats}></Stats>
                        <Imagen foto={pokemon.imagen}></Imagen>
                    </div>
                })
            }
        </div>
    </>)
}
export default Carta