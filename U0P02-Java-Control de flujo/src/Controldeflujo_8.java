import java.util.Scanner;


public class Controldeflujo_8 {

	public static void main(String args[]) {

		int opcion,opcion1;
		int perimetro;
		int area;
		int lado,altura;
		double circulo;
		Scanner leer = new Scanner(System.in);
	
		do {
		System.out.println("Seleccione entre las siguientes opciones: \n 1ºTriangulo \n 2ºCuadrado \n 3ºCirculo");
		opcion = comprobar();
		
		switch (opcion) {
		case 1: 
			do {
				System.out.println("Seleccione entre\n 1.area \n 2.perimetro \n 3.Salir");
				opcion1 = comprobar();
				switch (opcion1) {
				case 1: {
					System.out.println("Introduce el lado");
					lado=comprobar();
					lado=(lado*lado)/2;
					System.out.println("El area es "+lado);
					break;
				}

				case 2: {
					System.out.println("Introduce el lado");
					lado=comprobar();
					lado=(lado*3);
					System.out.println("El perimetro es "+lado);
					break;
				}
				case 3:{
					break;
				}
				}
				
			}while(opcion1!=3);
			break;
		

		case 2: 
					do {
					System.out.println("Seleccione entre\n 1.area \n 2.perimetro \n 3.Salir");
					opcion1 = comprobar();
					switch (opcion1) {
					case 1: {
						System.out.println("Introduce el lado");
						lado=comprobar();
						lado=lado*lado;
						System.out.println("El area es "+lado);
						
						break;
					}
		
					case 2: {
						System.out.println("Introduce el lado");
						lado=comprobar();
						lado=(lado*4);
						System.out.println("El perimetro es "+lado);
						break;
					}
					}
				}while(opcion1!=3);
				
		case 3: {
					do {
					System.out.println("Seleccione entre\n 1.area \n 2.perimetro \n 3.Salir");
					opcion1 = comprobar();
					switch (opcion1) {
					case 1: {
						System.out.println("Introduce el radio");
						lado=comprobar();
						
						circulo=(lado*lado)*3.14;
						System.out.println("El area es "+circulo);
						
						break;
					}
		
					case 2: {
						System.out.println("Introduce el radio");
						lado=comprobar();
						circulo=2*(lado*3.14);
						System.out.println("El perimetro es "+circulo);
						break;
					}
					}
				}while(opcion1!=3);
				}
		}
		}while(opcion!=4);
		
	}

	public static int comprobar() {
		Scanner leer = new Scanner(System.in);
		boolean correcto = false;
		String numero;
		int n = 0;
		do {
			try {
				
				System.out.println("Introduzca un numero");
				numero = leer.nextLine();
				n = Integer.parseInt(numero);
				correcto = true;

			} catch (NumberFormatException e) {
				System.out.println("Numero incorrecto");
			}

		} while (correcto == false);
		return n;
	}

}
