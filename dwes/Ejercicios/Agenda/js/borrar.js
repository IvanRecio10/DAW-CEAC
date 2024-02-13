function borrarContacto(cod_contacto, nombre){
    if(confirm("¿Quieres borrar este contacto " + cod_contacto + ": " + nombre + "?")){
        window.location="borrarContacto.php?borrar&cod_contacto="+ cod_contacto;
    }else{

    }
}