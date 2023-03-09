package Tab;

public class Tabungan {
    private int saldo;

    public Tabungan(int saldo) {
        this.saldo = saldo;
    }

    public int getSaldo() {
        return saldo;
    }

    public void simpanUang(int jumlah) {
        saldo = saldo + jumlah;
    }

    public boolean ambilUang(int jumlah) {
        if (saldo < jumlah) {
            return false;
        } else {
            saldo = saldo - jumlah;
            return true;
        }
    }
    public boolean transfer(Tabungan t,int jumlah){
        if (saldo < jumlah) {
            return false;
        } else {
            saldo = saldo - jumlah;
            t.saldo = t.saldo + jumlah;
            return true;
        }
    }

    @Override
    public String toString() {
        // TODO Auto-generated method stub
        return ""+saldo;
        // tostring punya parent class yaitu class Object
    }
}
