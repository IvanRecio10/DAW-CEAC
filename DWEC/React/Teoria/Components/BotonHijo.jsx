const Hijo = ({valor, fCambio}) => {
    function cambio(){
        fCambio(valor +1)
    }
    return(<>
        <button onClick={cambio}>Veces Pulsadas = {valor}</button>
    </>)
}
export default Hijo