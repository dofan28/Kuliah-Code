public class AppPalindrom {
    public static void main(String[] args) {
        String input = "kasur rusak";

        StringBuilder input1 = new StringBuilder();

        // append a string into StringBuilder input1
        input1.append(input);

        // reverse StringBuilder input1
        input1.reverse();

        // print reversed String
        System.out.println(input1);

        if(input.equalsIgnoreCase(input1.toString()))
        {
            System.out.println("this is palindrom");
        }else{
            System.out.println("this is'n palindrom");
        }
    }
}
