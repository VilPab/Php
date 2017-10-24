package figuras;

import java.util.Scanner;

public class Principal {

	public static void main(String[] args) {

		GestionFiguras gestor = new GestionFiguras();
		
		Scanner leer= new Scanner (System.in);
		
		String titulo;
		
		Cuadrado c= new Cuadrado(4.2,Color.AZUL,"Cuadrado1");
		Cuadrado c2= new Cuadrado(23,Color.ROSA,"Cuadrado2");
		Triangulo t = new Triangulo(8,15,Color.ROJO,"Triangulo1");
		Triangulo t2 = new Triangulo(8,11,Color.VERDE,"Triangulo2");
		Circulo c1 = new Circulo(4.8,Color.NEGRO,"Circulo1");
		Circulo c3 = new Circulo(1.5,Color.VERDE,"Circulo2");
		
		gestor.añadirFiguras(c);
		gestor.añadirFiguras(c2);
		gestor.añadirFiguras(t);
		gestor.añadirFiguras(t2);
		gestor.añadirFiguras(c1);
		gestor.añadirFiguras(c3);
		
		gestor.mostrarFiguras();
		
		gestor.calcularSumatorioAreas();
		
		System.out.println("Elimine una, escriba su titulo");
		titulo=leer.nextLine();
		gestor.borrarFiguras(titulo);
		
		gestor.mostrarFiguras();

		
		gestor.calcularSumatorioAreas();

		
	}

}
