import { useState } from "react";
import Hijo from "./BotonHijo";
const Padre = () => {
    const [contador, setContador] = useState(0)
    return (<>
        <Hijo valor={contador} fCambio={setContador}></Hijo>
        <Hijo valor={contador} fCambio={setContador}></Hijo>
    </>
    )
}
export default Padre