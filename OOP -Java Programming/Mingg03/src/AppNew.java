public class AppNew {
    public static void main(String[] args) {
        double d = 5.4;
        int i = 7;

        float f = (float) 3.2;
        float g = 2.6f;

        byte b = (byte) 5;
        
        Integer i2 = 5;
        float f2 = 56.34f;
        i++;
        // dicasting
        d = i;
        i = (int) d;
        System.out.println(i2);

        //  tes conversi class tipe data ke tipe data
        //i2 = d;
        i2 = (int)d;
        System.out.println(i2);

        d=i2;
        System.out.println(i2);

    }
}

