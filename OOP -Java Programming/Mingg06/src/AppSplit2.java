public class AppSplit2 {
    public static void main(String[] args) {

        // String str = "a d, m,   ii iii i . n";
        // String delimiters = "\\s+|,\\s*|\\.\\s*";
        String str = "MCD;yuhu.KFC;yuhu.AW.yuhu,HOKBEN;yuhu";
        String delimiters = "\\s+|,\\s*|\\.\\s*|;\\s*";
        // analyzing the string 
        String[] tokensVal = str.split(delimiters);
  
        // prints the number of tokens
        System.out.println("Count of tokens = " + tokensVal.length);
      
        for(String token : tokensVal) {
           System.out.print(","+ token);
        } 
     }
}
