package figuras;

public class Problema {

	public static void main(String[] args) {
		
		double areatotal;
		double perimetrototal;
		
	
		
		
		Cuadrado c= new Cuadrado(4.2,Color.AZUL,"Cuadrado1");
		Triangulo t = new Triangulo(8,15,Color.ROJO,"Triangulo1");
		Circulo c1 = new Circulo(4.8,Color.NEGRO,"Circulo1");
		Circulo c2 = new Circulo(1.5,Color.VERDE,"Circulo2");
		
		
		
		areatotal=((c1.calcularArea()/2)+(c2.calcularArea()*0.75)+c.calcularArea()+t.calcularArea());
		perimetrototal=(c.calcularPerimetro()*0.75+c2.calcularPerimetro()*0.75+c1.calcularPerimetro()*0.5)+
				(t.calcularPerimetro()-(c.getLado()+c1.getRadio()*2+c2.getRadio()*2));
		
		System.out.println(c.toString());
		System.out.println(c1.toString());
		System.out.println(c2.toString());
		System.out.println(t.toString());
		
		System.out.println("El perimetro total es:"+perimetrototal+" y el area total es:"+areatotal);
	}

}
