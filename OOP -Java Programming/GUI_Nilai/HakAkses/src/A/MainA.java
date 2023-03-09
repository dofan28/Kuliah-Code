package A; 
public class MainA {  
 public static void main(String args[]){  
  TestA b = new TestA();
  b.varDefaultA = 1;
  b.varPrivateA = 1;
  b.varPublicA = 1;
  b.varProtectedA = 1;
  
  b.methodPrivateA();
  b.methodDefaultA();
  b.methodPublicA();
  b.methodProtectedA();
}  

} 
