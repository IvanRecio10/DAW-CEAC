import { useEffect } from "react";
import { useState } from "react";
import "../Styles/api_amor.css";

const ContenedorInputs = () => {
    const[nombre1, setNombre1] = useState("")
    const[nombre2, setNombre2] = useState("")
    const[buscar, setBuscar] = useState(false)
    const[resultado, setFuncion] = useState([])

    useEffect( ()=>{
        var nBuscar = buscar
        nBuscar = false
        setBuscar(nBuscar)
    }, [nombre1, nombre2])

    useEffect(() => {
        const url = 'https://love-calculator.p.rapidapi.com/getPercentage?sname=' + nombre1 + '&fname=' + nombre2;
        const options = {
            method: 'GET',
            headers: {
                'X-RapidAPI-Key': '7abe070ae7mshee26ad357e354e8p1c804ejsn999d4d1ffa4b',
                'X-RapidAPI-Host': 'love-calculator.p.rapidapi.com'
            }
        };

        if (buscar){
            fetch(url, options).then(response => response.json()).then(data => {
                debugger
                var NwResultado = []
                NwResultado.push(data.percentage)
                NwResultado.push(data.result)
                setFuncion(NwResultado)
            })
        }

    }, [buscar])

    return (<>
        <div className="contenedor-formulario">
            <h2>Introduce 2 nombres que quieras comparar:</h2>
            <input type="text" name="primerNombre" onBlur={(e) => setNombre1(e.target.value)} required></input>
            <input type="text" name="segundoNombre" onBlur={(e) => setNombre2(e.target.value)} required></input>
            <input type="submit" value="Buscar" name="enviar" onClick={() => setBuscar(!buscar)}></input>
        </div>
        {buscar && <div className="feedback"><p>Tienes un {resultado[0]}% de compatibilidad entre tus nombres. <br></br>Mensage: {resultado[1]}</p></div>}
    </>
    )
}
export default ContenedorInputs