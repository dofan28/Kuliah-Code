import java.awt.Point;
import java.util.Random;

import com.minggu2.Circle2D;

public class AppCircle2D {
    public static void main(String[] args) {
        
        Circle2D arrayCircle2D[] = new Circle2D[5];
        for ( int i=0; i<arrayCircle2D.length; i++ ) {
            Random rand = new Random();
            // Generate random integers in range 0 to 999
            int r = rand.nextInt(5)+1;
            int x = rand.nextInt(15);
            int y = rand.nextInt(15);
    
            Point p = new Point(x, y);
            
            arrayCircle2D[i] = new Circle2D(r, p);
        }
    
    
        for ( int i=0; i<arrayCircle2D.length; i++ ) {
            System.out.println(arrayCircle2D[i]);
        }

        for ( int i=0; i<arrayCircle2D.length; i++ ) {
            for ( int j=i+1; j<arrayCircle2D.length; j++ ) {

                if (i!=j) {
                    boolean flag = arrayCircle2D[i].lingkaranBersinggungan(arrayCircle2D[j]);
                    if (flag) {
                        System.out.println("Circle2D " + i + " Circle2D " + j + " Bersinggungan");
                    } else {
                        System.out.println("Circle2D " + i + " Circle2D " + j + " Tidak Bersinggungan");
                    }
                }
                
            }
        }

        for( int i=0; i<arrayCircle2D.length;i++){
            System.out.println(arrayCircle2D[i] + " , luas =  " + arrayCircle2D[i].getArea());
        }

        
    }

}
