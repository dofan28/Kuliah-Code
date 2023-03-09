package minggu6;

import java.util.Arrays;
import java.util.Random;

public class Silinder extends Circle implements Comparable <Silinder>{
    private double tinggi;

    public Silinder(double r, double tinggi) {
        super(r);
        this.tinggi = tinggi;
    }

    public Silinder() {
        // super(10);
        this.tinggi = 5;
    }

    public Silinder(double tinggi) {
        // super(10);
        this.tinggi = tinggi;
    }

    @Override
    public double getArea() {
        double luas = 2 * super.getArea() + super.getCircumference() * tinggi;
        return luas;
    }

    public double getVolume() {
        return super.getArea() * tinggi;
    }

    @Override
    public String toString() {
        //
        return "Silinder: \n" + super.toString() + ", tinggi: " + tinggi + "Volume: " + getVolume() + "\n";
    }

    @Override
    public int compareTo(Silinder o) {
        // double volume = ((Silinder) o).getVolume(); 
        // return (int) (volume - this.getVolume()) ;
        double tinggi2 = ((Silinder) o).tinggi;
        return (int) (tinggi2 - this.tinggi);
    }

    public static void main(String[] args) {
        Silinder[] arrS = new Silinder[3];
        
        Random rand = new Random();
        int rand_int1 = rand.nextInt(15);

        Silinder s = new Silinder(rand_int1);
        System.out.println(s.toString());
        System.out.println("Luas Permukaan " + s.getArea());
        System.out.println("Volume " + s.getVolume());

        rand_int1 = rand.nextInt(15);
        int rand_int2 = rand.nextInt(15);
        Silinder s2 = new Silinder(rand_int1, rand_int2);
        System.out.println(s2.toString());
        System.out.println("Luas Permukaan " + s2.getArea());
        System.out.println("Volume " + s2.getVolume());

        rand_int1 = rand.nextInt(15);
        rand_int2 = rand.nextInt(15);
        Silinder s3 = new Silinder(rand_int1, rand_int2);
        System.out.println(s3.toString());
        System.out.println("Luas Permukaan " + s3.getArea());
        System.out.println("Volume " + s3.getVolume());
        
        arrS[0] = s;
        arrS[1] = s2;
        arrS[2] = s3;

        Arrays.sort(arrS);

        System.out.println(Arrays.toString(arrS));
    }
}
