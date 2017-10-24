###### *Desarrollo Web en Entorno Servidor - Curso 2017/2018 - IES Leonardo Da Vinci - Alberto Ruiz*
## U0P02 - Repaso: estructuras de control de flujo
#### Entrega de: *Pablo Villar García*
----
#### 1. Descripción:

Vamos a instalar el Java Develompent Kit (JDK) y el entorno de desarrollo Eclipse. A continuación crearemos un proyecto Java en el que practicaremos las estructuras de control de flujo (tanto de selección como de iteración) a través de diferentes programas.

#### 2. Formato de entrega:

Completa este documento incluyendo tras cada apartado el código necesario para resolver el problema (sin incluir el método `main`, sólo el código correspondiente a la solución) y el resultado de una ejecución.

* Para el código utiliza bloques de código Markdown
* Para el resultado puedes utilizar también bloques, o bien incluir capturas de pantalla de Eclipse

#### 3. Trabajo a realizar:

Antes de comenzar, escribe tu / vuestros nombres en la cabecera de este documento

##### Parte 1: Configuración del espacio de trabajo en la máquina virtual de Windows 

1. Desinstala la versión actual de Java. Recuerda que normalmente cuando decimos que un ordenador "tiene instalado Java" lo que en realidad tiene instalado es el Java Runtime Environment (JRE).
2. Descarga la última versión del [Java Development Kit (JDK)](http://www.oracle.com/technetwork/java/javase/downloads/jdk8-downloads-2133151.html): Java 8 Update 144. Localiza la descarga en la web oficial, pero si lo deseas puedes descargar el archivo desde el FTP del instituto. **Utilizaremos esta versión de Java durante todo el curso. Es muy importante que tengas la misma en casa y no la actualices para evitar problemas al compartir proyectos posteriormente**.
3. Desde el menú de inicio, abre el panel de configuración de Java (`Configurar Java`). Recuerda: hablamos del JRE. El JDK no tiene ninguna aplicación gráfica
4. Comprueba que la versión es la esperada haciendo clic en el botón `Acerca de` en la pestaña `General`
5. En la pestaña `Actualizar` desmarca la casilla *Comprobar actualizaciones automáticamente*. Esto garantizará que todos tengamos la misma versión de Java a lo largo del curso.
6. Descarga la última versión de Eclipse, llamada Oxygen. Como más adelante desarrollaremos aplicaciones Java EE, no queremos el paquete básico de instalación: en la [web de descargas de Eclipse](http://www.eclipse.org/downloads/) debes hacer clic en *Download Packages* y escoger la edición para desarrolladores Java EE. Tienes el archivo disponible en el servidor FTP del instituto.
7. Descomprime el archivo de forma que la carpeta llamada `eclipse` (sin la versión) quede donde desees, por ejemplo en la raíz `C:\`
8. Crea un acceso directo al ejecutable de Eclipse en el escritorio y/o en la barra de tareas
9. Ejecuta Eclipse: la primera decisión será la ubicación de la carpeta de espacio de trabajo o *workspace*: puedes dejar la que viene por defecto o escoger otra a tu gusto
10. Inicialmente aparecerá la pantalla de bienvenida: desmarca la casilla para que no vuelva a aparecer en el futuro

#####Parte 2: Creación y organización de un proyecto

1. Crea un nuevo proyecto Java: `File` → `New` → `Project` → `Java Project`. El nombre es importante, puesto que seguiremos la misma nomenclatura durante todo el curso: *Número de práctica - Lenguaje utilizado - Título o descripción*, en este caso: *U0P02-Java-Control de flujo* 
2. Crea desde Eclipse una carpeta `doc` en la raíz del proyecto (junto a la carpeta `src`) y copia en ella el archivo de este enunciado (arrastra el archivo a la carpeta de Eclipse). A lo largo del curso seguiremos este esquema para agrupar cada proyecto con su correspondiente enunciado.
3. Indica que queremos editar los archivos Markdown con Typora: *clic secundario sobre el archivo → Open with → Other → Browse → Localizar el ejecutable de Typora en la carpeta de archivos de programa*. No olvides marcar la casilla para indicar que queremos utilizar este programa para abrir todos los archivos Markdown
4. Comprueba que al hacer doble clic sobre un archivo Markdown en Eclipse, se abre con Typora
5. Crea una clase *HolaMundo* con un código sencillo para probar que tu instalación de Java es correcta y puedes compilar y ejecutar programas en Java. 
6. Recuerda que dispones de plantillas de código para escribir rápidamente sentencias o bloques. Por ejemplo si escribes "sout" y pulsas Ctrl + Espacio, se escribirá `System.out.println();`. También hay plantillas para escribir un bloque if-else, while, try-catch... Consulta las plantillas en `Window` → `Preferences` → `Java` → `Editor` → `Templates`


#####Parte 3: Repaso de Java: estructuras de control de flujo

Crea un paquete llamado `ControlDeFlujo` y codifica en una o varias clases los siguientes programas:

1) Preguntar al usuario el día de la semana e indicar si es laborable o no. Resolver utilizando la estructura `switch`.

- *Código*:

```java
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
		
```

- *Ejecución*:

        Introduzca el dia de la semana
        martes
        Es laborable
        
        Introduzca el dia de la semana
        sabado
        No es laborable

    ​    

2) Pedir al usuario cinco cadenas de texto y generar una sola cadena uniéndolas todas. Escribir esa cadena por pantalla.

- *Código*:
```java
Scanner leer= new Scanner(System.in);
		
	String  cadena1,cadena2,cadena3,cadena4,cadena5,cadenatotal;
		
		System.out.println("Introduzca la 1º cadena:");
		cadena1=leer.nextLine();
		
		System.out.println("Introduzca la 2º cadena:");
		cadena2=leer.nextLine();

		System.out.println("Introduzca la 3º cadena:");
		cadena3=leer.nextLine();
		
		System.out.println("Introduzca la 4º cadena:");
		cadena4=leer.nextLine();
		
		System.out.println("Introduzca la 5º cadena:");
		cadena5=leer.nextLine();
		
		
		cadenatotal=cadena1+cadena2+cadena3+cadena4+cadena5;
		
		System.out.println(cadenatotal);
		
		leer.close();
```
  ​

- *Ejecución*:
  Introduzca la 1º cadena:
  asdadasd asdasd 
  Introduzca la 2º cadena:
  asdasdas asd asdas d
  Introduzca la 3º cadena:
  adasdas as d asd as d
  Introduzca la 4º cadena:
  asdada asd as
  Introduzca la 5º cadena:
  asdasd as d
  asdadasd asdasd asdasdas asd asdas dadasdas as d 	asd as dasdada asd asasdasd as d


3) Ir pidiendo por teclado una serie de números enteros e irlos sumando. Se deja de pedir números al usuario cuando la cantidad supera el valor 50. Escribir por pantalla la suma de todos los números introducidos.

- *Código*:
 ```java
		Scanner leer= new Scanner(System.in);
		int numero,acum=0;
		
		do {
			System.out.println("Introduzca un numero, para parar escriba un numero mayor de 50");
			numero=leer.nextInt();
			acum=numero+acum;
		}while (numero<50);

		System.out.println("La suma total es "+acum);
 ```

- *Ejecución*:

  Introduzca un numero, para parar escriba un numero mayor de 50
  10
  Introduzca un numero, para parar escriba un numero mayor de 50
  20
  Introduzca un numero, para parar escriba un numero mayor de 50
  20
  Introduzca un numero, para parar escriba un numero mayor de 50
  100
  La suma total es 150

4) Pedir al usuario un número. Si introduce un valor inválido (por ejemplo una letra), se le volverá a solicitar que introduzca el número. 

Cuando termines, añade a continuación una expansión de este problema: pedir al usuario un número entre el 1 y el 10, pidiéndolo de nuevo si lo introduce mal.

Observa que estos dos bloques de código pueden ser reutilizados en cualquier punto de tus futuros programas en el que desees leer un número.


- *Código*:
  ```java

  	Scanner leer = new Scanner(System.in);
  	String numero;
  	int n = 0;
  	boolean correcto = false;
  	do {
  		try {
  			do {
  			System.out.println("Introduzca un numero");
  			numero = leer.nextLine();
  			n = Integer.parseInt(numero);
  			}while(n<1||n>10);
  			correcto = true;
  		} catch (NumberFormatException e) {
  			System.out.println("Numero incorrecto");
  		}

  	} while (correcto == false );
  	leer.close();
  }```
  ```

- *Ejecución*:
    Introduzca un numero
    a
    Numero incorrecto
    Introduzca un numero
    11
    Introduzca un numero
    -2
    Introduzca un numero
    4

5) Preguntar al usuario un número de mes (del 1 al 12) y preguntar si el año es bisiesto (sí o no). Escribir su número de días. Si los datos no están bien introducidos se volverán a pedir. Utilizar estructura `switch`.

- *Código*:```java
  -Scanner leer = new Scanner(System.in);
  	int m=0;
  	String mes;
  	String bisiesto;
  	
  	System.out.println("Introduzca el mes(1-12)");
  	
  	m=comprobar();
  	
  	System.out.println("¿Es bisiesto?");
  	bisiesto=leer.nextLine();
  	
  	switch(m) {
  	case 1:
  	{
  		System.out.println("31 dias");
  		break;
  	}
  	case 2:
  	{
  		if(bisiesto.startsWith("s")) {
  			System.out.println("29 dias");
  		}else 
  			System.out.println("28 dias");
  		break;
  	}
  	case 3:
  	{
  		System.out.println("31 dias");
  		break;
  	}
  	case 4:
  	{
  		System.out.println("30 dias");
  		break;
  	}
  	case 5:
  	{
  		System.out.println("31 dias");
  		break;
  	}
  	case 6:
  	{
  		System.out.println("30 dias");
  		break;
  	}
  	case 7:
  	{
  		System.out.println("31 dias");
  		break;
  	}
  	case 8:
  	{
  		System.out.println("31 dias");
  		break;
  	}
  	case 9:
  	{
  		System.out.println("30 dias");
  		break;
  	}
  	case 10:
  	{
  		System.out.println("31 dias");
  		break;
  	}
  	case 11:
  	{
  		System.out.println("30 dias");
  		break;
  	}
  	case 12:
  	{
  		System.out.println("31 dias");
  		break;
  	}
  	}

  }
  public static int comprobar() {
  	Scanner leer = new Scanner(System.in);
  	boolean correcto=false;
  	String numero;
  	int n=0;
  	do {
  		try {
  			do {
  			numero = leer.nextLine();
  			n = Integer.parseInt(numero);
  			correcto = true;
  			}while(n<1||n>13);
  			
  		} catch (NumberFormatException e) {
  			System.out.println("Numero incorrecto");
  		}
  	
  	} while (correcto == false );
  return n;}
  }
- ```

  ```

- *Ejecución*:
  Introduzca el mes(1-12)
  2
  ¿Es bisiesto?
  n
  28 dias

Introduzca el mes(1-12)
1
¿Es bisiesto?
s
31 dias

 Introduzca el mes(1-12)
w
Numero incorrecto
s
Numero incorrecto
2
¿Es bisiesto?
s
29 dias

6) Pedir al usuario dos números “a” y “b” entre el 1 y el 10. Mientras uno de ellos sea menor que el otro, escribir un símbolo “*” en la pantalla e incrementar en una unidad el número menor.

- *Código*:
```java

		int a,b;
		
		a=comprobar();
		b=comprobar();
		
		if(a>b) {
		while(a>b) {
			System.out.print("*");
			b++;
		}}
		else {
			while(a<b) {
				System.out.print("*");
				a++;
			}
		}
		
	}
	
	public static int comprobar() {
		Scanner leer = new Scanner(System.in);
		boolean correcto=false;
		String numero;
		int n=0;
		do {
			try {
				do {
				System.out.println("Introduzca un numero");
				numero = leer.nextLine();
				n = Integer.parseInt(numero);
				correcto = true;
				}while(n<1||n>10);
				
			} catch (NumberFormatException e) {
				System.out.println("Numero incorrecto");
			}

		} while (correcto == false );
	return n;}
}
```

- *Ejecución*:
  Introduzca un numero
  10
  Introduzca un numero
  1
*********

Introduzca un numero
3
Introduzca un numero
8
*****


7) Pedir al usuario un número entero y calcular el factorial de dicho número usando la estructura “do-while”. Repetir el ejercicio usando la estructura “while”, y repetirlo una vez más usando la estructura “for”.

- *Código (las tres versiones seguidas)*:
  ´´´java
  int a,numero,factorial=1;
  ​	
  	a=comprobar();
  	numero=a;
  	while(a!=1) {
  		factorial*=a;
  		a--;
  	}
  	a=numero;
  	System.out.println("Factorial de "+a+"->"+factorial);
  	factorial=1;


  	do {
  		factorial*=a;
  		--a;
  	}while(a!=1);
  	a=numero;
  	System.out.println("Factorial de "+a+"->"+factorial);
  	factorial=1;
  	
  	for(int i=a;i>0;i--) {
  		factorial*=i;
  	}
  	a=numero;
  	System.out.println("Factorial de "+a+"->"+factorial);
  }
  ´´´
- *Ejecución*:
  Introduzca un numero
  30
  Factorial de 30->1409286144
  Factorial de 30->1409286144
  Factorial de 30->1409286144

8) Basándote en la estructura `do-while`, diseña un menú de dos niveles, es decir: en un primer momento se pedirá escoger entre varias opciones, y en cada una de ellas se pedirá de nuevo escoger entre un nuevo conjunto. La temática es libre (cálculo de áreas, enciclopedia, etc). Es importante que tu programa reaccione correctamente ante entradas erróneas del usuario, y que en todos los menús haya una opción para volver.

  Ten en cuenta que codificar un menú correctamente no es trivial, conviene que pienses lo que vas a hacer antes de empezar a codificar.



```java
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

```



**Resultado**:

Seleccione entre las siguientes opciones: 
 1ºTriangulo 
 2ºCuadrado 
 3ºCirculo
Introduzca un numero
1
Seleccione entre
 1.area 
 2.perimetro 
 3.Salir
Introduzca un numero
1
Introduce el lado
Introduzca un numero
3
El area es 4
1
Seleccione entre
 1.area 
 2.perimetro 
 3.Salir
Introduzca un numero
3
3
Seleccione entre las siguientes opciones: 
 1ºTriangulo 
 2ºCuadrado 
 3ºCirculo
Introduzca un numero
2
Seleccione entre
 1.area 
 2.perimetro 
 3.Salir
Introduzca un numero
1
Introduce el lado
Introduzca un numero
4
El area es 16
Seleccione entre
 1.area 
 2.perimetro 
 3.Salir
Introduzca un numero
2
Introduce el lado
Introduzca un numero
4
El perimetro es 16
Seleccione entre
 1.area 
 2.perimetro 
 3.Salir
Introduzca un numero
3
Seleccione entre
 1.area 
 2.perimetro 
 3.Salir
Introduzca un numero
4
Seleccione entre
 1.area 
 2.perimetro 
 3.Salir
Introduzca un numero
3
Seleccione entre las siguientes opciones: 
 1ºTriangulo 
 2ºCuadrado 
 3ºCirculo
Introduzca un numero
3
Seleccione entre
 1.area 
 2.perimetro 
 3.Salir
Introduzca un numero
1
Introduce el radio
Introduzca un numero
5
El area es 78.5
Seleccione entre
 1.area 
 2.perimetro 
 3.Salir
Introduzca un numero
2
Introduce el radio
Introduzca un numero
6
El perimetro es 37.68
Seleccione entre
 1.area 
 2.perimetro 
 3.Salir
Introduzca un numero
3
Seleccione entre las siguientes opciones: 
 1ºTriangulo 
 2ºCuadrado 
 3ºCirculo
Introduzca un numero
4







9) (opcional) Inventa un problema sencillo sobre estructuras de control de flujo. Resuélvelo para comprobar que el nivel de dificultad es adecuado y comparte el enunciado con tu compañer@ de al lado. Incluye aquí tanto tu enunciado como la solución.

- *Enunciado*: Introducir un String comprobando que no tenga numeros y calculando si es asi, el numero de vocales que tiene.	

- *Código de la solución*:

  ```java
  	
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
  ```

  ​

- *Ejecución*:

  Introduzca una cadena sin numeros
  klasjdaklsd4
  Esa cadena tiene numeros
  Introduzca una cadena sin numeros
  lñkasdlñaskd
  La cadena lñkasdlñaskd tiene 2 vocales

10) (opcional) Resuelve el problema que tu compañer@ plantee.

- *Enunciado de tu compañer@:* Comprueba si una cadena es palíndorma o no.

- *Código de la solución*:

  ```java
  String cadena, cadenaFinal;

  		boolean palindromo=true;

  		

  		System.out.println("Introduce una cadena:");

  		cadena=sc.nextLine();

  		cadenaFinal=cadena.replace(" ", "");

  		

  		for(int i=0, j=cadenaFinal.length()-1; i<=j && palindromo; i++, j--) 

  			if(cadenaFinal.charAt(i)!=cadenaFinal.charAt(j))

  				palindromo=false;

  		if(palindromo)

  			System.out.println("La cadena "+cadena+" es palíndroma.");

  		else

  			System.out.println("La cadena "+cadena+" no es palíndroma.");

  		
  ```

  ​

- *Ejecución*:
