import java.util.Scanner;

public class Controldeflujo_2 {
	public static void main (String[]args) {
		
		Scanner leer= new Scanner(System.in);
		
		String cadena1,cadenatotal="";
		
		System.out.println("Introduzca la 1� cadena:");
		cadena1=leer.nextLine();
		cadenatotal+=cadena1;
		System.out.println("Introduzca la 2� cadena:");
		cadena1=leer.nextLine();

		System.out.println("Introduzca la 3� cadena:");
		cadena1=leer.nextLine();
		
		System.out.println("Introduzca la 4� cadena:");
		cadena1=leer.nextLine();
		
		System.out.println("Introduzca la 5� cadena:");
		cadena1=leer.nextLine();
		
		
		System.out.println(cadenatotal);
		
		leer.close();
		
	}
}
