package A;

public class MainA {
    public static void main(String args[]) {
        TestA t = new TestA();
        t.varStatic = 1;
        System.out.println("t: "+t.varStatic);

        TestA t2 = new TestA();
        System.out.println("t2: "+t2.varStatic);

        t2.varStatic = 5;
        System.out.println("t: "+t.varStatic);
        System.out.println("t2: "+t2.varStatic);

        TestA.varStatic = 10;
        System.out.println("t: "+t.varStatic);
        System.out.println("t2: "+t2.varStatic);
        // static bisa dirubah

        
    }
    // subclass : parent dan child, tabung extend lingkaran

}