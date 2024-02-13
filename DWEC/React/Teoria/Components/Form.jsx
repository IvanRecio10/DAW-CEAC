import Inputs from "./Inputs.jsx"
var inputs = [];
inputs.push(
  { required: true, type: 'text', label: "Nombre" },
  { required: true, type: 'text', label: "Apellido1" },
  { required: true, type: 'text', label: "Apellido2" },
  { required: true, type: 'number', label: "Edad" },
  { required: false, type: 'number', label: "Teléfono" },
  { required: false, type: 'text', label: "Dirección" },
  { required: false, type: 'date', label: "fecha" },
)

const Form = ({reset}) => {
    return (<>
        <form>
            {
                inputs.map((input, index) => 
                    <div key={index}>
                        <Inputs input={input}/>
                    </div>
                )
            }
            <button type="submit">Enviar</button>
            <button onClick={reset} className={"reset"}>Resetear</button>
        </form>
    </>)
}
export default Form