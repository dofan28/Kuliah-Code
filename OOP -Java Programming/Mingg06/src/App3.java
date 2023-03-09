import java.util.Arrays;

import minggu5.KalimatImbuhan;

public class App3 {
    public static void main(String[] args) {
        String dataString[] = { "Menunggu", "Menyapu", "Terakhir", "Bersepeda", "Menambahkan", "Melakukan",
                "Merapikan","belikan"," terapkan","hapuslah" };
        String prefix = "me";
        String sufix = "kan";
        KalimatImbuhan obj1 = new KalimatImbuhan(dataString,prefix,sufix);

        String[] hasil = obj1.getKalimatPrefix();
        System.out.println("menampilkan kata yang berimbuhan " + obj1.getPrefix());
        System.out.println(Arrays.toString(hasil));
        
        hasil = obj1.getKalimatPrefixSufix();
        System.out.println("menampilkan kata yang berimbuhan awal " + obj1.getPrefix() + " dan  berimbuhan akhir " + obj1.getSufix());
        System.out.println(Arrays.toString(hasil));

        obj1.setSufix("lah");

        hasil = obj1.getKalimatSufix();
        System.out.println("menampilkan kata yang berimbuhan akhir " + obj1.getSufix());
        System.out.println(Arrays.toString(hasil));
    }
}
