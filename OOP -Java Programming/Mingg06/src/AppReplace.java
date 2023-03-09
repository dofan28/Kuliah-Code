public class AppReplace {
    public static void main(String[] args) {
        String str1 = "ghost";
        boolean flag = false;
        for(int i = 0; i < str1.length(); i++) {
            if(i == 0 && str1.charAt(i) == 'g') {
                flag = true;
                continue;
            } else {
               str1 = str1.replace(str1.charAt(0),"");
            }

            if(flag == true) {
               str1 = str1.replace(str1.charAt(1),"");
            }
        }
    }
}
