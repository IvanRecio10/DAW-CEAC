const Serie = ({serie}) => {
    return(<>
        <img src={serie.imagen}></img>
        <h1>{serie.titulo}</h1>
        <h3>{serie.temporada} - {serie.capitulo}</h3>
        <p>{serie.fecha}</p>
    </>)
}
export default Serie