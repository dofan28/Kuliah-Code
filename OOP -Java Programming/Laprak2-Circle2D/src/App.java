import java.awt.Point;
import java.util.Random;

class Circle2D {
    double radius;
    Point point;
    private final double PI = 3.14159;

    public Circle2D() {
        radius = 3.0;
        point = new Point(0, 0);
    }

    public Circle2D(double r, Point p) {
        radius = r;
        point = p;
    }

    public Circle2D(double r) {
        radius = r;
        point = new Point(0, 0);
    }

    public void setPoint(Point p) {
        point = p;
    }

    public Point getPoint() {
        return point;
    }

    public void setRadius(double r) {
        radius = r;
    }

    public double getRadius() {
        return radius;
    }

    public double getArea() {
        return PI * radius * radius;
    }

    public double getDiameter() {
        return radius * 2;
    }

    public double getCircumference() {
        return 2 * PI * radius;
    }

    public String toString() {
        return "Radius : " + radius + " " + "Point : " + point;
    }

    public boolean lingkaranBersinggungan(Circle2D c2) {

        double squareA = Math.pow((c2.point.x - point.x), 2);

        double squareB = Math.pow((c2.point.y - point.y), 2);

        double Result = Math.sqrt(squareA + squareB);

        if (Result <= (c2.radius + radius)) {
            return true;
        } else {

            return false;
        }

    }

    public static boolean lingkaranBersinggungan(Circle2D c1, Circle2D c2) {
        double squareA = Math.pow((c2.point.x - c1.point.x), 2);
        double squareB = Math.pow((c2.point.y - c1.point.y), 2);
        double Result = Math.sqrt(squareA + squareB);

        if (Result <= (c2.radius + c1.radius)) {
            return true;
        } else {
            return false;
        }
    }
}

public class App {
    public static void main(String[] args) throws Exception {
        Circle2D arrayCircle2D[] = new Circle2D[5];
        for (int i = 0; i < arrayCircle2D.length; i++) {
            Random rand = new Random();
            // Generate random integers in range 0 to 4+1
            int r = rand.nextInt(5) + 1;
            // Generate random integers in range 0 to 14
            int x = rand.nextInt(15);
            // Generate random integers in range 0 to 14
            int y = rand.nextInt(15);

            Point p = new Point(x, y);

            arrayCircle2D[i] = new Circle2D(r, p);
        }

        for (int i = 0; i < arrayCircle2D.length; i++) {
            System.out.println(arrayCircle2D[i]);
        }

        for (int i = 0; i < arrayCircle2D.length; i++) {
            for (int j = i + 1; j < arrayCircle2D.length; j++) {

                if (i != j) {
                    boolean flag = arrayCircle2D[i].lingkaranBersinggungan(arrayCircle2D[j]);
                    if (flag) {
                        System.out.println("Circle2D " + i + " Circle2D " + j + " Bersinggungan");
                    } else {
                        System.out.println("Circle2D " + i + " Circle2D " + j + " Tidak Bersinggungan");
                    }
                }

            }
        }
    }
}
