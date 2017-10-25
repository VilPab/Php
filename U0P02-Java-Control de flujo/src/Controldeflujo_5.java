import java.util.Scanner;

public class Controldeflujo_5 {
	public static void main(String[] args) {

		Scanner leer = new Scanner(System.in);
		int m=0;
		String mes;
		String bisiesto;
		
		System.out.println("Introduzca el mes(1-12)");
		
		m=comprobar();
		
		System.out.println("¿Es bisiesto?");
		bisiesto=leer.nextLine();

		switch(m) {
		case 1:
		{
			System.out.println("31 dias");
			break;
		}
		case 2:
		{
			if(bisiesto.startsWith("s")) {
				System.out.println("29 dias");
			}else 
				System.out.println("28 dias");
			break;
		}
		case 3:
		{
			System.out.println("31 dias");
			break;
		}
		case 4:
		{
			System.out.println("30 dias");
			break;
		}
		case 5:
		{
			System.out.println("31 dias");
			break;
		}
		case 6:
		{
			System.out.println("30 dias");
			break;
		}
		case 7:
		{
			System.out.println("31 dias");
			break;
		}
		case 8:
		{
			System.out.println("31 dias");
			break;
		}
		case 9:
		{
			System.out.println("30 dias");
			break;
		}
		case 10:
		{
			System.out.println("31 dias");
			break;
		}
		case 11:
		{
			System.out.println("30 dias");
			break;
		}
		case 12:
		{
			System.out.println("31 dias");
			break;
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
				numero = leer.nextLine();
				n = Integer.parseInt(numero);
				correcto = true;
				}while(n<1||n>13);
				
			} catch (NumberFormatException e) {
				System.out.println("Numero incorrecto");
			}

		} while (correcto == false );
	return n;}
}
