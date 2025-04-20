
import java.util.Scanner;

public class TestApp {
    
    static Scanner console = new Scanner(System.in);
    
    public static void main(String args[]) {
        int num_month, year;
        int nbr_daysinamonth = 0;
        String month = "Does not exist";
        
        System.out.println("What is the number of the month YOU WANT?");
        num_month = console.nextInt();
        
        System.out.println("You need to enter the year:");
        year = console.nextInt();
        
        switch (num_month) {
            case 1:
                month = "January";
                nbr_daysinamonth = 31;
                break;
            case 2:
                month = "February";
                nbr_daysinamonth = (year % 4 == 0 && (year % 100 != 0 || year % 400 == 0)) ? 29 : 28;
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
                nbr_daysinamonth = 31;
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
                month = "November";
                nbr_daysinamonth = 30;
                break;
            case 12:
                month = "December";
                nbr_daysinamonth = 31;
                break;
            default:
                System.out.println(month);
                return;
        }
        
        System.out.println("The month of " + month + " " + year + " has " + nbr_daysinamonth + " days.");
    }
}