package figuras;

public class Circulo extends Figura {
	
	private double radio;
	private double area;
	private double perimetro;
	
	public double getRadio() {
		return radio;
	}
	public void setRadio(double radio) {
		this.radio = radio;
	}
	public Circulo() {
		
	}
	public Circulo(double radio, Color color, String titulo) {
		super.setColor(color);
		super.setTitulo(titulo);
		this.radio=radio;
	}
	
	public double calcularPerimetro() {
		
		perimetro=2*3.14*radio;
		
		return perimetro;
	}	
	public double calcularArea() {
		
		area = 3.14*radio*radio;
		
		return area;
	}
	
	@Override
	

	public String toString() {
		return super.toString()+"Circulo [radio=" + radio + ", perimetro()=" + calcularPerimetro() + ", area()=" + calcularArea() + "]";
	}
	
}
