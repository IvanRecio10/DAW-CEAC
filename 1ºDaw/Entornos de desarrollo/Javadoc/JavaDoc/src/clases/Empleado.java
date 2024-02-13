package clases;


public class Empleado extends Persona {
    
    private int id;
    private double salario;
    
   
    public Empleado(String nombre, int edad, int id, double salario) {
        super(nombre, edad);
        this.id = id;
        this.salario = salario;
    }
    
   
    public int getId() {
        return id;
    }
    
    
    public double getSalario() {
        return salario;
    }
    
    
    
}