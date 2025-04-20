     class Student {
    String designation ="BSIT";
    String college = "DIT DEPARTMENT";
    
    void does () {
        System.out.println ("Insert your Name");
    }
}
public class Bsit2A extends Student {
    String mainSubject ="DCIT 50";
public static void main (String []args)
{
    Bsit2A obj = new Bsit2A ();
    System.out.println (obj.college);
    System.out.println (obj.designation);
    System.out.println (obj.mainSubject);
    obj.does();
   
}
}