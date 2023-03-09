
import java.util.Arrays;

public class AppSplit {
    public static void main(String[] args) {
        // splitwithlimit
        String exe = "MCDyuhuKFCyuhuAWyuhuHOKBENyuhu";
        String exe2 = "MCD;yuhu.KFC;yuhu.AW.yuhu,HOKBEN;yuhu";
        String[] aftersplit = exe.split("yuhu");
        System.out.println(Arrays.toString(aftersplit));
        String[] aftersplit2 = exe.split("yuhu", 3);
        for (String a : aftersplit2)
            System.out.println(a);

        
        System.out.println(Arrays.toString(aftersplit));

    }
}
