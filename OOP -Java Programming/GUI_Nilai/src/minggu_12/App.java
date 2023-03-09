/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Classes/Class.java to edit this template
 */
package minggu_12;
















import java.util.Collections;

/**
 *
 * @author Bagus_Anggriawan
 */
public class App {
    public static void main(String[] args) {
        Mahasiswa m1= new Mahasiswa("A01","Bagus","Pakistan");
        Mahasiswa m2= new Mahasiswa("A02","Qois","Zimbabwe");
    
        
        Kelas kelasA = new Kelas("2 D3 IT A","Bu Renovita");
        kelasA.addMhs(m1);
        kelasA.addMhs(m2);

//        //System.out.println("kelas:"+kelasA);
         kelasA.sortNama();
//        //System.out.println("kelas:"+kelasA);
//        kelasA.sortKota();
//        //System.out.println("kelas:"+kelasA);
        
        Mahasiswa r1= new Mahasiswa("B01","Sahputra","Pakistan");
        Mahasiswa r2= new Mahasiswa("B02","Anggriawan","Zimbabwe");
        
        
        Kelas kelasB = new Kelas("2 D3 IT B","Bu Indah");
        kelasB.addMhs(r1);
        kelasB.addMhs(r2);
        kelasB.sortKota();

        Prodi prodiD3IT = new Prodi("D3IT","pak Rosyid");
        prodiD3IT.addKelas(kelasA);
        prodiD3IT.addKelas(kelasB);
        System.out.println("prodiD3IT"+prodiD3IT);
    }
}
