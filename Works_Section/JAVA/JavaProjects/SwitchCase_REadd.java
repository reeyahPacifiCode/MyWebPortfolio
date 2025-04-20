import java.util.Scanner;

public class SwitchCase {
    public static void main(String args[]) {
        Scanner a = new Scanner(System.in);
        
        System.out.println("Enter a number only");
        System.out.print("month: ");
        int month = a.nextInt();

        System.out.print("date: ");
        int date = a.nextInt();

        System.out.print("year: ");
        int year = a.nextInt();

        System.out.println("You entered: " + month + "/" + date + "/" + year);

        a.close(); // Close the scanner to prevent memory leaks
    }
