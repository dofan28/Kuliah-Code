public class App {
    public static void main(String[] args) throws Exception {
        String huruf = "Azhrul si paling sabar";
        // lastIndexOf(int ch)
        // Returns the index within this string of the last occurrence of the specified character.
        System.out.println(huruf);
        System.out.println("kata diatas hanya contoh dan tidak benar. kita mencari last index dari char r");
        System.out.println(huruf.lastIndexOf("r"));
        // lastIndexOf(int ch, int fromIndex)
        // Returns the index within this string of the last occurrence of the specified character, searching backward starting at the specified index.
        System.out.println("kita mencari last index dari char r dimulai dari index 10");
        System.out.println(huruf.lastIndexOf("r", 10));
        // lastIndexOf(String str)
        // Returns the index within this string of the last occurrence of the specified substring.
        String kata = "Azhrul pergi memancing dan Azhrul mendapatkan Ikan";
        System.out.println("kita mencari last index dari kata Ikan");
        System.out.println(kata.lastIndexOf("Ikan"));
        // lastIndexOf(String str, int fromIndex)
        // Returns the index within this string of the last occurrence of the specified substring, searching backward starting at the specified index.
        System.out.println("kita mencari last index dari kata Azhrul dimulai dari index 15");
        System.out.println(kata.lastIndexOf("Azhrul", 15));
    }
}
