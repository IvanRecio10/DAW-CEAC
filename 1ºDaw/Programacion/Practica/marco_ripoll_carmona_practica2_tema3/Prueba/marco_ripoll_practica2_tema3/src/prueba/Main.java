package prueba;
import java.nio.file.FileSystemNotFoundException;
import java.util.*;
public class Main {

	public static void main(String[] args) {
		fibonacci fibonacci = new fibonacci();
		area area = new area();
		volumen volumen = new volumen();
		
		int posicion = 0;
		Scanner sc = new Scanner(System.in);
		try {
			System.out.println("Pasame una posición de Fibonacci y te daré el valor");
			posicion = sc.nextInt();
		} catch (Exception e) {
			System.out.println("Tienes que introducir un número entero");
			sc.nextLine();
		}
			
		
		System.out.println("El resultado es: " + fibonacci.fibo(pos));
		
		System.out.println("-------------------------");
		System.out.printlm();
		
		int base = 0;
		int altura = 0;
		System.out.println("Ahora vamos a calcular el área de un triángulo");
		try {
			System.out.println("Introduce la base del trinángulo");
			base = sc.nextInt();
		}catch (Exception e) {
			System.out.println(-1);
			sc.nextLine();
		}
		
		
		
		try {
			System.out.println("Introduce la altura del trinángulo");
			altura = sc.nextInt();
		}catch (Exception e) {
			System.out.println(-1);
			sc.nextLine();
		}
		
		
		System.out.println("El área del triángulo es: " +  area.ar(base, altura));
	
		
	
		System.out.println("Ahora vamos a calcular el volumen de una esfera");
		try {
			System.out.println("Introduce el rádio de la esfera");
			double radio = sc.nextDouble();
			System.out.println("El volumen de la esfera es: " +  volumen.vol(radio));
		}catch(Exception e){
			System.out.println("Eso no es un numero");
			sc.nextLine();
		}
	}

}