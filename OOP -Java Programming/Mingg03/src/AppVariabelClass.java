import com.minggu2.Circle;

public class AppVariabelClass {

    public static void main(String[] args) {
        Circle c = new Circle();
        Circle c2 = new Circle(10);
        c.nomor = 7;
        c.setRadius(15);

        System.out.println("Ini C " + c.nomor);
        System.out.println("ini C2 " + c2.nomor);

        Circle.nomor = 20;
        System.out.println("Ini C " + c.nomor);
        System.out.println("ini C2 " + c2.nomor);
        //System.out.println("ini C2 " + c);
        c.setRadius(15);
        System.out.println("ini C " + c.toString());
        System.out.println("ini C2 " + c2.toString());

    }


}
