import java.util.Arrays;

import minggu5.KalimatImbuhan;

public class App2 {
    public static void main(String[] args) {
        String dataString[] = { "Menunggu", "Menyapu", "Terakhir", "Bersepeda", "Menambahkan", "Melakukan",
                "Merapikan" };
        String prefix = "me";
        String sufix = "kan";
        KalimatImbuhan obj1 = new KalimatImbuhan(dataString, prefix);
    
        String[] hasil = obj1.kalimat(dataString, prefix);
        System.out.println(Arrays.toString(hasil));
        hasil = obj1.kalimat(dataString, prefix, sufix);
        System.out.println(Arrays.toString(hasil));
    }
}
