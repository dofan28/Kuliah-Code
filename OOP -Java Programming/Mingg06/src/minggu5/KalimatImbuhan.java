package minggu5;

import java.io.File;
import java.io.FileNotFoundException;
import java.util.Arrays;
import java.util.Scanner;

public class KalimatImbuhan {
    private String dataString[];
    private String prefix;
    private String sufix;


    
    public KalimatImbuhan() {
    }

    public KalimatImbuhan(String[] dataString, String prefix) {
        this.dataString = dataString;
        this.prefix = prefix;
    }

    public KalimatImbuhan(String[] dataString, String prefix, String sufix) {
        this.dataString = dataString;
        this.prefix = prefix;
        this.sufix = sufix;
    }

    public String[] getDataString() {
        return dataString;
    }

    public void setDataString(String[] dataString) {
        this.dataString = dataString;
    }

    public String getPrefix() {
        return prefix;
    }

    public void setPrefix(String prefix) {
        this.prefix = prefix;
    }

    public String getSufix() {
        return sufix;
    }

    public void setSufix(String sufix) {
        this.sufix = sufix;
    }

    public String[] getKalimatPrefix(){
        return this.kalimat(dataString, prefix, "");
    }

    public String[] getKalimatPrefixSufix(){
        return this.kalimat(dataString, prefix, sufix);
    }

    public String[] getKalimatSufix(){
        return this.kalimat(dataString, "", sufix);
    }

    public static String[] getKalimat(String[] dataString, String prefix) {
        String[] h = new String[10];
        int j = 0;
        for (int i = 0; i < dataString.length; i++) {
            dataString[i] = dataString[i].toLowerCase();
            if (dataString[i].startsWith(prefix) == true) {
                h[j] = dataString[i];
                j++;
            }
        }
        return h;
    }


    public String[] kalimat(String[] dataString, String prefix) {
        String[] h = new String[10];
        int j = 0;
        for (int i = 0; i < dataString.length; i++) {
            dataString[i] = dataString[i].toLowerCase();
            if (dataString[i].startsWith(prefix) == true) {
                h[j] = dataString[i];
                j++;
            }
        }
        return h;
    }

    public String[] kalimat(String[] dataString, String prefix, String sufix) {
        String[] h = new String[10];
        int j = 0;
        for (int i = 0; i < dataString.length; i++) {
            dataString[i] = dataString[i].toLowerCase();
            if (dataString[i].startsWith(prefix) == true && dataString[i].endsWith(sufix) == true ) {
                h[j] = dataString[i];
                j++;
            }
        }
        return h;
    }

    public String readFile(String filename) throws FileNotFoundException {
        File myObj = new File(filename);
        Scanner myReader = new Scanner(myObj);
        String data = null;
        while (myReader.hasNextLine()) {
          data = myReader.nextLine();
        }
        myReader.close();
        return data;
    }

    public static void main(String[] args) throws FileNotFoundException {
        String dataString[] = { "Menunggu", "Menyapu", "Terakhir", "Bersepeda", "Menambahkan", "Melakukan",
                "Merapikan" };
        String prefix = "me";
        String sufix = "kan";
        KalimatImbuhan obj1 = new KalimatImbuhan();
        
        String data = obj1.readFile("src/minggu5/imbuhan.txt");
        System.out.println(data);
        // data
        String[] dataSplit =  data.split(",");
        System.out.println("menampilkan array data");
        System.out.println(Arrays.toString(dataSplit));

        String[] hasil = obj1.kalimat(dataSplit, prefix);
        System.out.println("menampilkan kata yang berimbuhan " + obj1.prefix);
        System.out.println(Arrays.toString(hasil));
        
        hasil = obj1.kalimat(dataSplit, prefix,sufix);
        System.out.println("menampilkan kata yang berimbuhan awal " + obj1.prefix + " dan  berimbuhan akhir " + obj1.sufix);
        System.out.println(Arrays.toString(hasil));
    }

    
}
