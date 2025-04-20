package calendar;

import java.util.Calendar;


public class DateMonthYearDemo{
    
	
	public static void main(String args[]){
     
	 Calendar now=Calendar.getInstance();
	 System.out.println("Year-->"+now.get(Calendar.YEAR));
	 System.out.println("Month-->"+now.get(Calendar.MONTH));
	 System.out.println("Date-->"+now.get(Calendar.DATE));
	 
    }
}