import com.minggu2.Circle2D;
import java.awt.Point;
import java.lang.reflect.Array;

public class AppLingkaranBersinggungan {
    
    public static void main(String[] args) {


        Circle2D c = new Circle2D();
        Circle2D c2 = new Circle2D(2, new Point(4,0));

        Circle2D c3 = new Circle2D(3, new Point(6, 2));

        System.out.println("Circle 1 " + c);
        System.out.println("Circle 2 " + c2);

        System.out.println(c.lingkaranBersinggungan(c2));

        System.out.println("c2 dengan c3 "+ c2.lingkaranBersinggungan(c3));

        

    }
}
