package prueba;
import java.text.DecimalFormat;
public class area {
	public static String ar(int base, int altura) {
		double resultado;
		if (base > 0 && altura > 0) {
			resultado = (double) (base * altura) / 2 ;
		}else {
			resultado = -1 ;
		}
		DecimalFormat formateador = new DecimalFormat("#.00");
		return formateador.format(resultado);
	}
}