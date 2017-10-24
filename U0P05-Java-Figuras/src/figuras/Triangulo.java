package figuras;

public class Triangulo  extends Figura{

	private double altura;
	private double base;
	
	private double area;
	private double perimetro;
	
	
	public double getAltura() {
		return altura;
	}
	public void setAltura(double altura) {
		this.altura = altura;
	}
	public double getBase() {
		return base;
	}
	public void setBase(double base) {
		this.base = base;
	}
	
	public Triangulo() {
		
	}
	public Triangulo(double base, double altura, Color color,String titulo) {
		this.base=base;
		this.altura=altura;
		
		super.setColor(color);
		super.setTitulo(titulo);
	}
	
	public double calcularPerimetro() {
		
		perimetro=altura+(Math.sqrt(base*base+altura*altura))+base;
		
		return perimetro;
	}
	
	public double calcularArea() {
		
		area = (base*altura)/2;
		
		return area;
	}
	@Override
	public String toString() {
		return super.toString()+"Triangulo [altura=" + altura + ", base=" + base  + ", perimetro()=" + calcularPerimetro()
				+ ", area()=" + calcularArea() + "]";
	}

	
	
	
}


