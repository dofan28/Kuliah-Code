package Tab;

public class MainTabungan {
    public static void main(String[] args) {
        Tabungan t = new Tabungan(100000);
        t.simpanUang(550000);
        System.out.println("t:"+t);
        
        t.ambilUang(200000);
        System.out.println("t:"+t);
        
        Tabungan t2 = new Tabungan(300000);
        t2.simpanUang(1000000);
        System.out.println("t2:"+t2);
        
        t2.transfer(t, 400000);
        System.out.println("t:" + t);
        System.out.println("t2:" + t2);
    }
}
