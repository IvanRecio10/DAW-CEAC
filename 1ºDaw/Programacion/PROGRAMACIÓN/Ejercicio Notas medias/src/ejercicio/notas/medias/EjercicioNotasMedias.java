/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Classes/Main.java to edit this template
 */
package ejercicio.notas.medias;
import java.util.Scanner;
        
 /**
 *
 * @author Ivan
 */
public class EjercicioNotasMedias {

    /**
     * @param args the command line arguments
     */
    public static void main(String[] args) {
        // TODO code application logic here
        //Variables
        double nota1, nota2, nota3, notaFinal;
        Scanner sc=new Scanner(System.in);
        
        System.out.println("Introduce la nota del 1º Trimestre: ");
        nota1 =sc.nextDouble();
        
        System.out.println("Introduce la nota del 2º Trimestre: ");
        nota2 =sc.nextDouble();
        
        System.out.println("Introduce la nota del 3º Trimestre: ");
        nota3 =sc.nextDouble();
        
        notaFinal =((nota1+nota2+nota3)/3);
        System.out.println("Su nota media es; "+notaFinal);
        
        notaFinal =((nota1+nota2+nota3)/3);
        System.out.println("Su nota en el expediente es: " +Math.floor(notaFinal));
        //No he encontrado nada para redondear a la baja con algo que no sea Math.etc
        
        notaFinal =((nota1+nota2+nota3)/3);
        System.out.println("Su nota en el expediente generoso es: " +Math.round(notaFinal)); 
        
    }
    
}
