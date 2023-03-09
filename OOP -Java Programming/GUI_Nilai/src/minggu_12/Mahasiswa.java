/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Classes/Class.java to edit this template
 */
package minggu_12;
import java.util.Comparator;

/**
 *
 * @author Bagus_Anggriawan
 */
public class Mahasiswa implements Comparable<Mahasiswa>{
    private String NRP;
    private String nama;
    public double nilai_akhir;
  
    
//    private String nilai_tugas;
//    private String nilai_uts;
//    private String nilai_uas;

    /**
     *
     * @param NRP
     * @param nama
     * @param nilai_akhir
     * @param nilai_tugas
     * @param nilai_akhir
     */

    public Mahasiswa(String NRP, String nama, double nilai_akhir) {
        this.NRP = NRP;
        this.nama = nama;
        this.nilai_akhir = nilai_akhir;
        
//        this.nilai_tugas = nilai_tugas;
//        this.nilai_uts = nilai_uts;
//        this.nilai_uas = nilai_uas;
    }
    
//     @Override
//    public int compareTo(Mahasiswa comparestu) {
//        int compareage=((Student)comparestu).getStudentage();
//        /* For Ascending order*/
//        return this.studentage-compareage;
//
//        /* For Descending order do like this */
//        //return compareage-this.studentage;
//    }

    

    
//    public String getNilai_tugas() {
//        return nilai_tugas;
//    }
//
//    public void setNilai_tugas(String nilai_tugas) {
//        this.nilai_tugas = nilai_tugas;
//    }
//    
//    public String getNilai_uts() {
//        return nilai_uts;
//    }
//
//    public void setNilai_uts(String nilai_uts) {
//        this.nilai_uts = nilai_uts;
//    }
//    
//    public String getNilai_uas() {
//        return nilai_uas;
//    }
//
//    public void setNilai_uas(String nilai_uas) {
//        this.nilai_uas = nilai_uas;
//    }
    
    public String getNRP() {
        return NRP;
    }

    public void setNRP(String NRP) {
        this.NRP = NRP;
    }
    
    public double getNilai_akhir() {
        return nilai_akhir;
    }

    public void setNilai_akhir(double nilai_akhir) {
        this.nilai_akhir = nilai_akhir;
    }

    public String getNama() {
        return nama;
    }

    public void setNama(String nama) {
        this.nama = nama;
    }

//    public String getnilai_akhir() {
//        return nilai_akhir;
//    }
//
//    public void setnilai_akhir(String nilai_akhir) {
//        this.nilai_akhir = nilai_akhir;
//    }

    @Override
    public String toString() {
        return NRP + ", " + nama + ", " + nilai_akhir + "\n";
//        return "Mahasiswa{" + "NRP=" + NRP + ", nama=" + nama + ", nilai_akhir=" + nilai_akhir + "}\n";
    }

    @Override
    public int compareTo(Mahasiswa o) {
        String nama2=o.getNama();
        return nama.compareTo(nama2);
    }
    
}
