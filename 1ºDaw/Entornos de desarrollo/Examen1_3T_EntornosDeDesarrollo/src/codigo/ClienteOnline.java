package codigo;

import java.util.ArrayList;
import java.util.List;
import java.util.Map;
import java.util.Scanner;
/**
 * 
 * @author IvanRecio-AlumnoCEAC
 *
 * @param id: Es la variavle del ID del cliente.
 * @param dni: Es la variable para el DNI del cliente.
 * @param nombre: Es la variable para el Nombre del cliente.
 * @param apellidos: es la variable para los apellidos del cliente.
 * @param edad: Es la variable para la edad del cliente.
 * @param enPosesion: Es la variable para saber si el cliente tiene un coche en posesion o no.
 * @param password: Es la variable para saber la contraseña del cliente.
 * @param username: Es la variable para saber el nombre de usuario del cliente.
 */
public class ClienteOnline{

	public int id;
	public int dni;
	public String nombre;
	public String apellidos;
	public int edad;
	public List<Coche> enPosesion;
	public String password;
	public String username;
	
	/**
	 * Esta funcion lo que va a a hacer va a ser recoger los valores que le pasemos por parametros sobre la informacion del cliente.
	 */
	public clienteOnline(int id, int dni, String nombre, String apellidos, int edad, String pass, String username) {
		this.id=id;
		this.dni=dni;
		this.nombre=nombre;
		this.apellidos = apellidos;
		this.enPosesion= new ArrayList<Coche>();
		this.edad=edad;
		this.password=pass;
		this.username=username;
	}
	/**
	 * Esta funcion lo que va a hacer va a ser que si el cliente se quiere cambiar de nombre por parametro se le pase el nuevo nombre que quiere ponerse.
	 */
	public void cambiarNombreCliente() {
		Scanner sc = new Scanner(System.in);
		String nombreNuevo= sc.nextLine();
		this.NOMBRE=nombreNuevo;
	}
	/**
	 * Esta funcion lo que va a hacer va a ser comparar el coche que queramos comprar para saber si tiene propietario y en caso de que no lo tenga asociarselo al cliente que lo quiere comprar
	 */
	public boolean comprarCocheOnline(Coche i) {
		if(i.tienePropietario) {
			return false;
		}
		this.enPosesion.add(i);H
	}
	/**
	 * Esta funcion va a comprobar si la edad del cliente es mayor o igual a 18 para que te devuelva un valor True or False en caso de que pueda o no comprar el coche.
	 */
	public boolean puedeComprarCoche() {
		if(this.edad>=18) {
			return true;
		}
		return false;
	}
	/**
	 * Esta Funcion va a comprobar si tienes coches en posesion y te va a devolver los coches en posesion que tengas con su respactiva matricula.
	 */
	public List<String> verCoches(){
		List<String> var1= new ArrayList<String>();
		for(Coche qwe: this.enPosesion) {
			for(Map.Entry<String,String> incidencia: qwe.CodigoIncidencia.entrySet()) {
				var1.add("El coche con matrícula:"+qwe.matricula+" tiene la siguiente incidencia:("+ incidencia.getKey()+")"+incidencia.getValue());				
			}
		}
		return var1;
	}
}

