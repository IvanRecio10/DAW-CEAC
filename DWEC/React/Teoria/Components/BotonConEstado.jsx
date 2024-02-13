import { useState } from "react"


const BotonConEstado = ({sumar}) => {
    const [contador, setContador] = useState(0)
    function sumar1(){
        setContador(contador + 1)
    }
    return <>
        <button sumar={sumar1}>Veces pulsadas: {contador}</button>
    </>
}
export default BotonConEstado