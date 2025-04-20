package exampleProgram;
import  java.util.Scanner;


public class FindOut {
	public static void main(String[] args) {
		int numero;
		Scanner input = new
	     Scanner(System.in);
		 System.out.println("Enter a Number: ");
	     numero = input.nextInt();
	     input.close();
		
		
		if ( numero > 0)
		    System.out.printf(" %d is a POSITIVE NUMBER " ,numero);
		 else if (numero < 0)
		     System.out.printf(" %d is a NEGATIVE NUMBER ", numero);
		  else 
		  System.out.printf(" %d is a ZERO",numero);
		  
	}
}