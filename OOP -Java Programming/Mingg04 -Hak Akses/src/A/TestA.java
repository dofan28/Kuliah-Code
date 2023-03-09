package A;

public class TestA {
    private int varPrivateA;
    int varDefaultA;
    protected int varProtectedA;
    public int varPublicA;
    static int varStatic; 

    private void methodPrivateA() {
        this.varDefaultA = 0;
        this.varPrivateA = 0;
        this.varProtectedA = 0;
        this.varPublicA = 0;

        this.methodDefaultA();
        this.methodPrivateA();
        this.methodProtectedA();
        this.methodPublicA();
        
    }
    // super untuk memanggil milik dari parent : super.getArea();

    void methodDefaultA() {
    }

    protected void methodProtectedA() {
    }

    public void methodPublicA() {
    }
    public static void main(String[] args) {
        TestA p = new TestA();
        // fungsi main yg ada didalam class , maka dapat mengakses privet didalm kelas tsbt
        // jika constktr privet maka manggilnya lewat clasnya math.sqrt();
    }
}