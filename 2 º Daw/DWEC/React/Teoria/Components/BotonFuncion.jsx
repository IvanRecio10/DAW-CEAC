import Boton from "./Boton";
import "../Styles/Boton.css"


function decirHola(){
    console.log("Hola")
}

const BotonFuncion = () => {
    return (
    <>
    <Boton />
    
    <button className="botonFuncion" onClick={decirHola}>Púlsa Aquí</button>  
    </>
    
    )
}

export default BotonFuncion