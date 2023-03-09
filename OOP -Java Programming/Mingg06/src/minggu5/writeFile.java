package minggu5;

import java.io.FileWriter;
import java.io.IOException;


public class writeFile {
    public static void main(String[] args) throws IOException {
        FileWriter myObj = new FileWriter("src/minggu5/file.txt");
        myObj.write("Files in Java might be tricky, but it is fun enough!");
        myObj.close();
    }
}
