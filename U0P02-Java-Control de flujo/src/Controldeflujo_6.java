import java.util.Scanner;

public class Controldeflujo_6 {

	public static void main(String[] args) {

		int a,b;
		
		a=comprobar();
		b=comprobar();
		
		if(a>b) {
		while(a>b) {
			System.out.print("*");
			b++;
		}}
		else {
			while(a<b) {
				System.out.print("*");
				a++;
			}
		}
		
	}
	
	public static int comprobar() {
		Scanner leer = new Scanner(System.in);
		boolean correcto=false;
		String numero;
		int n=0;
		do {
			try {
				do {
				System.out.println("Introduzca un numero");
				numero = leer.nextLine();
				n = Integer.parseInt(numero);
				correcto = true;
				}while(n<1||n>10);
				
			} catch (NumberFormatException e) {
				System.out.println("Numero incorrecto");
			}

		} while (correcto == false );
	return n;}
}

