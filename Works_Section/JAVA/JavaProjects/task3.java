  //  Task 3 – Object in a Class with method
class Student{ 

int rollno; 

String name; 

void insertRecord(int r, String n){ 

rollno=r; 

name=n; 

} 

void displayInformation(){
	System.out.println(rollno+" "+name);
} 

} 


public class TestStudent4 {
	public static void main (String args []){
	Student s1=new Student ();
	Student s2=new Student ();
	s1.insertRecord (0215 , " Glenn");
	s2.insertRecord (02316, "Jude");
	s1.displayInformation ();
	s2.displayInformation();	
		}
	}