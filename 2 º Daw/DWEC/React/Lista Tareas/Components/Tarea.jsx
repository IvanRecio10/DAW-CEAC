import "../Styles/tarea.css"

const Tarea = ({tarea, fModTareas, tareas, indice}) => {
    function borrar(){
        var NwTareas = [...tareas]
        NwTareas.splice(indice, 1)
        fModTareas(NwTareas);
    }
    function completar() {
        var NwTareas = [...tareas]
        NwTareas[indice].completado = !NwTareas[indice].completado
        fModTareas(NwTareas)
    }
    return (
        <div className="tarea" id={tarea.id}>
            <div className="botones">
                <button onClick={borrar} className="rojo boton">BORRAR</button>
                <button onClick={completar} className="azul boton">{tarea.completado?"REACTIVAR":"COMPLETAR"}</button>
            </div>
            <div className={tarea.completado?"texto completado":"texto"}>
                <p>{tarea.texto}</p>
            </div>
        </div>
    )
}
export default Tarea