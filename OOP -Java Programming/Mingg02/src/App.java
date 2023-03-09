import java.awt.Point;
import java.util.Random;

import com.minggu2.Circle;
import com.minggu2.Circle2D;
import com.minggu2.Mahasiswa;;



public class App {

    public static void main(String[] args) throws Exception {

    Circle circle = new Circle(5);
    System.out.println("Area = " + circle.getArea());
    Circle circle3 = new Circle(10);
    System.out.println("Area = " + circle3.getArea());
    Random rand = new Random();

        // Generate random integers in range 0 to 999
        int rand_int1 = rand.nextInt(10);
        


        Circle2D circle4 = new Circle2D(rand_int1, new Point(2,3));
        System.out.println("Radius = " + circle4.getRadius());
        System.out.println("Point = " + circle4.getPoint());
        System.out.println("Area = " + circle4.getArea());
        System.out.println("Keliilng = " + circle4.getCircumference());

        // Circle02 circle3 = new Circle02(10);
        // System.out.println("Radius = " + circle3.getRadius());
        // System.out.println("Area = " + circle3.getArea());
        // System.out.println("Keliilng = " + circle3.getCircumference());

        // circle3.setRadius(15);
        // System.out.println("Radius = " + circle3.getRadius());
        // System.out.println("Area = " + circle3.getArea());
        // System.out.println("Keliilng = " + circle3.getCircumference());


        Mahasiswa m = new Mahasiswa(312150002, "Vicky");

        Circle circle5 = new Circle(20);

        System.err.println("Get area Defaultnya " + circle5.getArea());
        
        System.out.println(circle5);

        System.out.println(m);

        
    }
}
