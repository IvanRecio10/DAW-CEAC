package prueba;
public class fibonacci {

	public static int fibo(int num) {
		int num1 = 1;
		int num2= 1;
		int aux = 0;
		if (num < 0) {
    		aux = -1;
    	}else {
                if (num == 0){
                    aux=0;
                }else if(num == 1 || num == 2){
                    aux=1;
                }else{
                    for (int i=0; i<num - 2; i++) {
                            aux = num1 + num2;
                            num1 = num2;
                            num2 = aux;
                    }
                }
    	}
		return aux;
	}
}