import { useState } from "react"
import ContenedorTareas from "./ContenedorTareas.jsx"
import "../Styles/contenedorPadre.css"
var contador = 0
const ContenedorPadre = () => {
    const [tareas, setTareas] = useState([])
    function sumarTarea(){
        contador++
        var mensaje = document.getElementById("mensaje").value
        if(mensaje != "" && mensaje.trim() != ""){
            setTareas([...tareas, {id: contador, completado: false, texto: mensaje}])
        }
        document.getElementById("mensaje").value = ""
    }

    function ordenarTareas(array){

        var nArray = [...array].sort((a,b) => {
            return a.texto.localeCompare(b.texto)
        })
        return nArray
    }

    function ordenar(){
        var NwTareas = [...tareas]
        var NwTareasCompletadas = ordenarTareas(NwTareas.filter(x => x.completado))
        var NwTareasNoCompletadas = ordenarTareas(NwTareas.filter(x => !x.completado))
        var NwTareasOrdenadas = []
        debugger
        NwTareasOrdenadas = NwTareasOrdenadas.concat(NwTareasNoCompletadas)
        NwTareasOrdenadas = NwTareasOrdenadas.concat(NwTareasCompletadas)
        setTareas(NwTareasOrdenadas)
    }
    return (
    <div className="container">
        <h1>To-Do-List</h1>
        <button onClick={ordenar} className="botonOrdenar">Ordenar Tareas</button>
        <textarea id="mensaje"></textarea>
        <button onClick={sumarTarea} className="añadirTarea">Añadir Tareas</button>
        <ContenedorTareas tareas={tareas} fModTareas={setTareas}></ContenedorTareas>
    </div>
    )
}
export default ContenedorPadre