import { useEffect, useState } from "react";

const ComponenteEffect = () => {
    const [contador, setContador] = useState(0)
    
    useEffect(() => {
        console.log("Hola")
    }, [contador])
    return (<>
        <button onClick={() => setContador(contador + 1)} >{contador}</button>
    </>)
}
export default ComponenteEffect