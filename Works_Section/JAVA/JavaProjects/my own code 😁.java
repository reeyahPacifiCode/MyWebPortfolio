class dogs{
	
	int count;
	String breed;
	double weight;
	String color;
	}


public class puppy {
	public static void main(String[] args) {
	
	dogs d1=new dogs();
	
	d1.count = 5;
	d1.breed = "DALMESIANS";
	d1.weight = 67.4;
	d1.color = "black & white";
	
	System.out.println (d1.count+" "+d1.breed+" "+d1.weight+"  "+d1.color);
		
	}
}