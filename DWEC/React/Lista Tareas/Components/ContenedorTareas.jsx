import Tarea from "./Tarea.jsx"
import "../Styles/contenedorTarea.css"

const ContenedorTareas = ({tareas, fModTareas}) => {
    
    return(<>
        <div>
            {
                tareas.map( (tarea, index) => 
                    <div key={index} className="tarea">
                        <Tarea indice={index} fModTareas={fModTareas} tarea={tarea} tareas={tareas}/>
                    </div>
                )
            }
        </div>
    </>)
}
export default ContenedorTareas