import java.util.Scanner;
public class Controldeflujo_1 {
	public static void main (String[]args) {
		
		Scanner leer= new Scanner(System.in);
		String dia;
		
		System.out.println("Introduzca el dia de la semana");
		
		dia=leer.nextLine();
		
		switch(dia){
		
		case "lunes":
		{
			System.out.println("Es laborable");
			break;
		}
		case "martes":
		{
			System.out.println("Es laborable");
			break;
		}
		case "miercoles":
		{
			System.out.println("Es laborable");
			break;
		}
		case "jueves":
		{
			System.out.println("Es laborable");
			break;
		}
		case "viernes":
		{
			System.out.println("Es laborable");
			break;
		}
		case "sabado":
		{
			System.out.println("No es laborable");
			break;
		}
		case "domingo":
		{
			System.out.println("No es laborable");
			break;
		}
			
		}
		leer.close();
	}
	

}
