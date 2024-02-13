/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Classes/Main.java to edit this template
 */
package nombre.y.apellidos;
import java.util.Scanner;
/**
 *
 * @author Ivan
 */
public class NombreYApellidos {

    /**
     * @param args the command line arguments
     */
    public static void main(String[] args) {
        // TODO code application logic here
        //Variables.
        String nombre, apellidos;
        Scanner sc=new Scanner(System.in);
        System.out.println("Introduzca su nombre: ");
        nombre =sc.nextLine();
        System.out.println("Introduzca sus apellidos: ");
        apellidos =sc.nextLine();
        System.out.println("Bienvenido " +nombre +" "+ apellidos);    
        
    }
    
}
