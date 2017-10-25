import java.util.Scanner;

public class Controldeflujo_2 {
	public static void main (String[]args) {
		
		Scanner leer= new Scanner(System.in);
		
		String cadena1,cadenatotal="";
		
		System.out.println("Introduzca la 1º cadena:");
		cadena1=leer.nextLine();
		cadenatotal+=cadena1;
		System.out.println("Introduzca la 2º cadena:");
		cadena1=leer.nextLine();

		System.out.println("Introduzca la 3º cadena:");
		cadena1=leer.nextLine();
		
		System.out.println("Introduzca la 4º cadena:");
		cadena1=leer.nextLine();
		
		System.out.println("Introduzca la 5º cadena:");
		cadena1=leer.nextLine();
		
		
		System.out.println(cadenatotal);
		
		leer.close();
		
	}
}
