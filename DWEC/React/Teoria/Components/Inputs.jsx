const Inputs = (props) => {
    return (<>
        <label> {props.input.label} </label>
        <input type={props.input.type} name={props.input.label}></input>
    </>)
}
export default Inputs