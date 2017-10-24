import java.util.Scanner;

public class Controldeflujo_7 {
	public static void main(String[] args) {
		
		int a,numero,factorial=1;
		
		a=comprobar();
		numero=a;
		while(a!=1) {
			factorial*=a;
			a--;
		}
		a=numero;
		System.out.println("Factorial de "+a+"->"+factorial);
		factorial=1;
		
		
		do {
			factorial*=a;
			--a;
		}while(a!=1);
		a=numero;
		System.out.println("Factorial de "+a+"->"+factorial);
		factorial=1;
		
		for(int i=a;i>0;i--) {
			factorial*=i;
		}
		a=numero;
		System.out.println("Factorial de "+a+"->"+factorial);
	}
	
	public static int comprobar() {
		Scanner leer = new Scanner(System.in);
		boolean correcto=false;
		String numero;
		int n=0;
		do {
			try {
				
				System.out.println("Introduzca un numero");
				numero = leer.nextLine();
				n = Integer.parseInt(numero);
				correcto = true;
				
				
			} catch (NumberFormatException e) {
				System.out.println("Numero incorrecto");
			}

		} while (correcto == false );
	return n;}
}

