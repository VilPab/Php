package figuras;

public class Cuadrado  extends Figura {

	private double lado;
	private double area;
	private double perimetro;
	
	public double getLado() {
		return lado;
	}
	public void setLado(double lado) {
		this.lado = lado;
	}
	public Cuadrado() {
		
	}
	public Cuadrado(double lado ,Color color, String titulo) {
		super.setColor(color);
		super.setTitulo(titulo);
		this.lado=lado;
	}

	public double calcularPerimetro() {
		
		perimetro=4*lado;
		
		return perimetro;
	}
	
	public double calcularArea() {
		
		area = lado*lado;
		
		return area;
	}
	@Override
	public String toString() {
		return super.toString()+"Cuadrado [lado=" + lado + ", perimetro()=" + calcularPerimetro() + ", area()=" + calcularArea() + "]";
	}
}
