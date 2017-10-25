import java.util.Scanner;

public class Controldeflujo_3 {
public static void main (String[]args) {
		
		Scanner leer= new Scanner(System.in);
		int numero,acum=0;
		
		do {
			System.out.println("Introduzca un numero, para parar escriba un numero mayor de 50");
			numero=leer.nextInt();
			acum=numero+acum;
		}while (numero<50);

		System.out.println("La suma total es "+acum);

}

}
