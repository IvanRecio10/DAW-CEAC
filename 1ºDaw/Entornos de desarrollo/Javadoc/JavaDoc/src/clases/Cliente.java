package clases;
/**
 * @author IvanRecio-AlumnoCEAC
 * */
public class Cliente extends Persona {
	
	/**
	 * Esta clase cliente representa los datos de cada uno de los usuarios.
	 * 
	 * @param nombre: Hace referencia al nombre del cliente.
	 * @param id: Hace referencia al nombre del cliente y es una variable privada.
	 * @param saldo: Hace referencia al saldo del cliente y es una variable privada.
	 * @param edad: Hace referencia a la edad del cliente.
	 * 
	 * */
    
    private int id;
    private double saldo;
    
    public Cliente(String nombre, int edad, int id, double saldo) {
        super(nombre, edad);
        this.id = id;
        this.saldo = saldo;
    }
   /**
    * Esta funcion nos devuelve el ID de cada cliente.
    */
    public int getId() {
        return id;
    }
    
    /**
     * Esta funcion nos devuelve el saldo de cada cliente.
     */
    public double getSaldo() {
        return saldo;
    }
    /**
     * Esta funcion hara un incremento en nuestro saldo en caso de que su actual saldo sea mayor que 0.
     * @param incrementoSaldo: Es la cantidad de saldo que se incrementara
     * 
     */
    public boolean aumentarSaldo(int incrementoSaldo) {
    	this.saldo+=incrementoSaldo;
    	if(this.saldo >= 0) {
    		return true;
    	}
    	return false;
    }
}