import java.util.Scanner;

public class SumAverage{
	public static void main(String[] args) {
		
		int s,v,a,g,e;
		System.out.println("Input your favorite number:");
		Scanner z=new Scanner(System.in);
		s=z.nextInt();
		v=z.nextInt();
		a=z.nextInt();
		g=z.nextInt();
		e=z.nextInt();
		
		int sum=s+v+a+g+e;
		System.out.println("TOTAL :  " + sum);
		
		double avg=sum/5.0;
		System.out.println ("AVERAGE : " + avg);
	}
}