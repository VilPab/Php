import java.util.Scanner;

public class Controldeflujo_9 {

	public static void main(String[] args) {
		boolean encontrado;
		
		do{
			System.out.println("Introduzca una cadena sin numeros");
			encontrado=comprobar();
		}while(encontrado);
	}

	public static boolean comprobar() {

		String cadena;
		int contador = 0;
		Scanner leer = new Scanner(System.in);
		cadena = leer.nextLine();
		boolean encontrado = false;
		String numeros = "0123456789";
		String vocales = "aeiou";
		for (int x = 0; x < numeros.length(); x++) {
			for (int i = 0; i < cadena.length(); i++) {

				if (cadena.charAt(i) == numeros.charAt(x)) {
					encontrado = true;
				}

			}
		}

		if (encontrado) {
			System.out.println("Esa cadena tiene numeros");
		} else {
			encontrado=false;
			for (int x = 0; x < vocales.length(); x++) {
				for (int i = 0; i < cadena.length(); i++) {

					if (cadena.charAt(i) == vocales.charAt(x)) {
						contador++;
					}

				}
			}
			System.out.println("La cadena "+cadena+" tiene "+contador+" vocales");
		}
	
	return encontrado;}

}
