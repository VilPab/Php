import java.util.Scanner;

public class Controldeflujo_4 {
	public static void main(String[] args) {

		Scanner leer = new Scanner(System.in);
		String numero;
		int n = 0;
		boolean correcto = false;
		do {
			try {
				do {
				System.out.println("Introduzca un numero");
				numero = leer.nextLine();
				n = Integer.parseInt(numero);
				}while(n<1||n>10);
				correcto = true;
			} catch (NumberFormatException e) {
				System.out.println("Numero incorrecto");
			}

		} while (correcto == false );
		leer.close();
	}

}
