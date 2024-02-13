package prueba;

import java.text.DecimalFormat;

public class volumen {
	public static String vol(double radio) {
		double resultado;
		if (radio > 0) {
			resultado = ((double) 4/3) * Math.PI * Math.pow(radio, 3);
		}else {
			resultado = -1;
		}
		DecimalFormat formateador = new DecimalFormat("#.###");
		
		return formateador.format (resultado);
	}
}