const Imagen = ({src, over, sal})=> {
    return (
        <>
            <div onMouseOut={sal} onMouseOver={over}><img className={'imagen'} src={src}></img></div>
        </>
        )
}
export default Imagen