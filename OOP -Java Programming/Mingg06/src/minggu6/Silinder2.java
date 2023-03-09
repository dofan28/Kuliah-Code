package minggu6;

public class Silinder2 extends Circle{
    private double tinggi;

    public Silinder2(double r, double tinggi) {
        super(r);
        this.tinggi = tinggi;
    }

    public Silinder2() {
        // super(10);
        this.tinggi = 5;
    }

    public Silinder2(double tinggi) {
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
        return "Silinder: \n" + super.toString() + ", tinggi: " + tinggi;
    }

    public static void main(String[] args) {
       
    }
}
