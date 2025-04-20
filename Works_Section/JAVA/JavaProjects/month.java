import java.util.Scanner;


class month {
	public static void main(String[] args) {
	
		int moon;
			System.out.println("*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-\n\nWe have twelve months once a year. The wrong input will have a rocketship just waiting with you.^,^ [--pacific--] \n\n*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-\n");
		System.out.print("\n\nEnter the equivalent number of month: ");
		Scanner j=new Scanner(System.in);
		moon=j.nextInt();
		
	switch (moon) {
			 case 1: System.out.println("\nThe month of JANUARY has 31 days by year of 2022\n");
	         break;
	         case 2:  System.out.println("\nThe month of FEBRUARY has 28 days by year of 2022\n");
	         break;
	         case 3:  System.out.println("\nThe month of MARCH has 31 days by year of 2022\n");
	         break;
	         case 4:  System.out.println( "\nThe month of APRIL has 30 days by year of 2022\n");
	         break;
	         case 5: System.out.println( "\nThe month of MAY has 31 days by year of 2022\n");
	         break;
	         case 6:  System.out.println( "\nThe month of JUNE has 30 days by year of 2022\n");
	         break;
	         case 7:  System.out.println( "\nThe month of JULY has 31 days by year of 2022\n");
	         break;
	         case 8:  System.out.println("\nThe month of AUGUST has 31 days by year of 2022\n");
	         break;
	         case 9: System.out.println("\nThe month of SEPTEMBER has 30 days by year of 2022\n");
	         break;
	         case 10:  System.out.println("\nThe month of OCTOBER has 31 days by year of 2022\n");
	         break;
	         case 11: System.out.println("\nThe month of NOVEMBER has 30 days by year of 2022\n");
	         break;
		     case 12:  System.out.println("\nThe month of DECEMBER has 31 days by year of 2022\n ");
	         break;
		    default:  System.out.println("\nYOUR input is invalid.  YOU're in a WRONG PLANET, byeee!\n");
	         break;
		}	
		
		
	}
}