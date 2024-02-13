package prueba;

import static org.junit.jupiter.api.Assertions.*;

import org.junit.jupiter.api.Test;

class Prueba {
	fibonacci fibonacci = new fibonacci();
	area area = new area();
	volumen volumen = new volumen();
	
	@Test
	void area() {
		//Con esto aparte de comprobar que el resultado es el esperado vemos que nos lo devuelve como String
		assertEquals("12,50", area.ar(5, 5));
		assertNotEquals(49.50, area.ar(7, 7));
		
		//Con esto comprobamos la función del "0" en el DecimalFormat, que siempre nos devuelve dos decimales
		assertEquals("5,00", area.ar(2, 5));
		assertNotEquals("6", area.ar(2, 6));
		
		//Comprobamos que si la base o la altura es negativa o igual a 0 devolver -1
		assertEquals("-1,00", area.ar(0, 5));
		assertEquals("-1,00", area.ar(-23, 5));
	}
	
	@Test
	void fibonacci() {
		//Comprovamos si de el resultado que debe dar
		assertEquals(55, fibonacci.fibo(10));
		assertEquals(1030332487, fibonacci.fibo(1234));
		
		//Comprobamos que si la posición es negativa se devuelve -1
		assertEquals(-1, fibonacci.fibo(-23));
		
		//Comprobamos que el valor que devuelven las posiciones 0, 1 y 2 son correctas
		assertEquals(1, fibonacci.fibo(1));
		assertEquals(1, fibonacci.fibo(2));
		assertEquals(0, fibonacci.fibo(0));
	}
	
	@Test
	void volumen() {
		//Comprobamos que con un radio que valga 0 o menos el resultado sea -1, ya no comrobamos que el decimalformat devuelve string porque ya lo hemos comprobado anteriormente
		assertNotEquals("0", volumen.vol(0));
		assertEquals("-1", volumen.vol(-23));
		
		//Comprobamos que el resultado es el esperado y que solo devuelve 3 decimales
		assertEquals("268,083", volumen.vol(4));
		assertNotEquals("268,082573106329", volumen.vol(4));
	}

}
