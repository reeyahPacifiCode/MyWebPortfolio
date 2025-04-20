   //RHEA MAE I.PACIFICADOR
//BSIT 2A
public class TamangPanahon { 
    
    String crushName;
    int crushAge;
    
    TamangPanahon (String name, int age){
        this.crushName = name;
        this.crushAge = age;
    }
    public static void main(String []args){
        
        TamangPanahon obj1 = new TamangPanahon ("Pangalan ni Crush", 13);
        TamangPanahon obj2 = new TamangPanahon ("Crush2", 28);
        
      System.out.println(obj1.crushName +" "+obj1.crushAge);
      System.out.println(obj2.crushName +" "+obj2.crushAge);
    }
}