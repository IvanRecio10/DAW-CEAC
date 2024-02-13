package test;

import clases.*;


public class Test {
    
    public static void main(String[] args) {
        Persona persona = new Persona("Juan", 30);
        System.out.println("Persona: " + persona.getNombre() + ", " + persona.getEdad() + " años.");

        Empleado empleado = new Empleado("Pedro", 25, 1, 1500.0);
        System.out.println("Empleado: " + empleado.getNombre() + ", " + empleado.getEdad() + " años, ID " + empleado.getId() + ", salario " + empleado.getSalario() + " euros.");

        Cliente cliente = new Cliente("Ana", 35, 100, 5000.0);
        System.out.println("Cliente: " + cliente.getNombre() + ", " + cliente.getEdad() + " años, ID " + cliente.getId() + ", saldo " + cliente.getSaldo() + " euros.");
    }
}