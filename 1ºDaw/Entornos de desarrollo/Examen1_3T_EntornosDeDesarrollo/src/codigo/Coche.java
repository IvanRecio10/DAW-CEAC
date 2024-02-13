package codigo;

import java.util.HashMap;

/**
 * 
 * @author IvanRecio-AlumnoCEAC
 * @param cocheEnPropiedad: Es la variable que va a saber si tiene un coche en propiedad.
 * @param codigoIncidencia: Es un diccionario de PYTHON.
 * @param matricula: Es la variable con la matricula del coche.
 */

public class Coche {
	public boolean cocheEnPropiedad;
	public HashMap<String, String> CodigoIncidencia;//ESTO ES UN DICCIONARIO(PYTHON) O ARRAY ASOCIATIVO(PHP) 
	public String matricula;
	
	/**
	 * Esta funcion nos va a devolver la matricula del coche que le pasemos por parametro.
	 */
	public Coche(String e) {
		cocheEnPropiedad=false;
		this.matricula=e;
	}
	/**
	 * 
	 * @param puntoOrigenX: Es el punto de origen del eje x del coche.
	 * @param puntoOrigenY: Es el punto de origen del eje Y del coche.
	 * @param lugarDestinoX: Es el punto del destino en el eje x del coche.
	 * @param lugarDestinoY: Es el punto del destino en el ehe Y del coche.
	 * 
	 * Esta Funcion va a llamar tambien a la funcion comprobarCordenadas
	 */
	public boolean iniciarTrayecto(String puntoOrigenX, String puntoOrigenY, String lugarDestinoX, String lugarDestinoY) {
		double puntoX1= Double.parseDouble(puntoOrigenX);
		double puntoY1= Double.parseDouble(puntoOrigenY);
		double puntoX2= Double.parseDouble(lugarDestinoX);
		double puntoY2= Double.parseDouble(lugarDestinoY);
		if(comprobarCoordenadas(puntoX1, puntoY1) && comprobarCoordenadas(puntoX2, puntoY2)) {
			return true;
		}
		return false;
	}
	/**
	 * Esta funcion va a comprobar las cordenadas para ver si son correctas o no.
	 */
	public boolean comprobarCoordenadas(double x, double y) {
		
		/*
		 Hacemos una comprobación de las coordenadas
		 */
		return true;
	}
}
