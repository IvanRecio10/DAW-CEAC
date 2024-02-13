import Serie from "./Serie"

var series = []

series.push(
    {imagen: "https://cdn-images.motor.es/image/m/800w.webp/fotos-noticias/2022/11/razon-fernando-alonso-acertado-fichando-aston-martin-f1-202291410-1669277836_4.jpg", titulo: "Hola", temporada: 1, capitulo: 3, fecha:"11/10/2004"},
    {imagen: "https://cdn-images.motor.es/image/m/800w.webp/fotos-noticias/2022/11/razon-fernando-alonso-acertado-fichando-aston-martin-f1-202291410-1669277836_4.jpg", titulo: "Adios", temporada: 1, capitulo: 3, fecha:"11/10/2004"},
    {imagen: "https://cdn-images.motor.es/image/m/800w.webp/fotos-noticias/2022/11/razon-fernando-alonso-acertado-fichando-aston-martin-f1-202291410-1669277836_4.jpg", titulo: "No", temporada: 1, capitulo: 3, fecha:"11/10/2004"},
    {imagen: "https://cdn-images.motor.es/image/m/800w.webp/fotos-noticias/2022/11/razon-fernando-alonso-acertado-fichando-aston-martin-f1-202291410-1669277836_4.jpg", titulo: "Me", temporada: 1, capitulo: 3, fecha:"11/10/2004"},
    {imagen: "https://cdn-images.motor.es/image/m/800w.webp/fotos-noticias/2022/11/razon-fernando-alonso-acertado-fichando-aston-martin-f1-202291410-1669277836_4.jpg", titulo: "Sale", temporada: 1, capitulo: 3, fecha:"11/10/2004"},
    {imagen: "https://cdn-images.motor.es/image/m/800w.webp/fotos-noticias/2022/11/razon-fernando-alonso-acertado-fichando-aston-martin-f1-202291410-1669277836_4.jpg", titulo: "La", temporada: 1, capitulo: 3, fecha:"11/10/2004"},
    {imagen: "https://cdn-images.motor.es/image/m/800w.webp/fotos-noticias/2022/11/razon-fernando-alonso-acertado-fichando-aston-martin-f1-202291410-1669277836_4.jpg", titulo: "Aea", temporada: 1, capitulo: 3, fecha:"11/10/2004"},
    {imagen: "https://cdn-images.motor.es/image/m/800w.webp/fotos-noticias/2022/11/razon-fernando-alonso-acertado-fichando-aston-martin-f1-202291410-1669277836_4.jpg", titulo: "Del", temporada: 1, capitulo: 3, fecha:"11/10/2004"},
    {imagen: "https://cdn-images.motor.es/image/m/800w.webp/fotos-noticias/2022/11/razon-fernando-alonso-acertado-fichando-aston-martin-f1-202291410-1669277836_4.jpg", titulo: "Puto", temporada: 1, capitulo: 3, fecha:"11/10/2004"},
    {imagen: "https://cdn-images.motor.es/image/m/800w.webp/fotos-noticias/2022/11/razon-fernando-alonso-acertado-fichando-aston-martin-f1-202291410-1669277836_4.jpg", titulo: "Tiempo", temporada: 1, capitulo: 3, fecha:"11/10/2004"})



const ContenedorSerie = () => {
    return(<>
        {
            series.map((serie, index) => (
                <div key={index}>
                    <Serie  serie={serie} />
                </div>
            ))
        }
    </>)
}
export default ContenedorSerie