 import java.util.Scanner;

class MONTHS {
    
    static Scanner console = new Scanner (System.in);
	
	public static void main(String args[]){
	      
		  int num_month, year;
		  int nbr_daysinamonth;
		  String month = "Does not exist";
		  
		  System.output.println("What is the number of the month?");
		  num_month = console.nextIn();
		  
		  System.output.println("You need to enter the year:");
		   year = console.nextIn();
		   
		   
		  switch (num_month){
			  case 1:
			      month = "January";
			      nbr_daysinamonth = 31;
			      break;
			  case 2:
			     month = "February";
			     nbr_daysinamonth = 28;
			     break;
			  case 3:
			     month = "March";
			     nbr_daysinamonth = 31;
			     break;
			  case 4:
			     month = "April";
			     nbr_daysinamonth = 30;
			     break;
		      case 5:
			     month = "May";
			     nbr_daysinamonth = 31;
			     break;
			  case 6:
			     month = "June";
			     nbr_daysinamonth = 30;
			     break;
			  case 7:
			     month = "July";
			     nbr_daysinamonth = 30;
			     break;
			  case 8:
			     month = "August";
			     nbr_daysinamonth = 31;
			     break;
			  case 9:
			     month = "September";
			     nbr_daysinamonth = 30;
			     break;
			  case 10:
			     month = "October";
			     nbr_daysinamonth = 31;
			     break;
			  case 11:
			     month = "Novemeber";
			     nbr_daysinamonth = 30;
			     break;
			   case 12:
			     month = "December";
			     nbr_daysinamonth = 31;
			     break;
			   default: 	   
			      System.out.prinln (month);
		  }
		        System.out.println("The month of" + month  + " " + year + " has " + nbr_daysinamonth + "days");
     
    }
}