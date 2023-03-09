package minggu6;

public class Kerucut extends Circle {
    double tinggi;

    public Kerucut(double tinggi) {
        this.tinggi = tinggi;
    }

    public Kerucut() {
        this.tinggi = 5;
    }

    @Override
    public double getArea() {
        // TODO Auto-generated method stub
        double s2 = Math.pow(super.getRadius(), 2) + Math.pow(tinggi, 2);
        double s = Math.sqrt(s2);
        return s;
    }

    public double getVolume() {
        return super.getArea() * 1/3 * tinggi;
    }

    @Override
    public String toString() {
        // TODO Auto-generated method stub
        return "Kerucut: \n" + super.toString() + ", tinggi: " + tinggi;
    }

    public static void main(String[] args) {
        Kerucut k = new Kerucut();
        System.out.println(k.toString());
        System.out.println("Luas Permukaan: " + k.getArea());
        System.out.println("Volume: " + k.getVolume());
    }
}
