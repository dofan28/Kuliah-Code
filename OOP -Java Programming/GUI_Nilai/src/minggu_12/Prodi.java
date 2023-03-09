/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Classes/Class.java to edit this template
 */
package minggu_12;

import java.util.ArrayList;

/**
 *
 * @author Bagus_Anggriawan
 */
public class Prodi {
    private String namaProdi;
    private String kaProdi;
    private ArrayList listKelas;

    public Prodi(String namaProdi, String kaProdi) {
        this.namaProdi = namaProdi;
        this.kaProdi = kaProdi;
        listKelas= new ArrayList();
    }

    public String getNamaProdi() {
        return namaProdi;
    }

    public void setNamaProdi(String namaProdi) {
        this.namaProdi = namaProdi;
    }

    public String getKaProdi() {
        return kaProdi;
    }

    public void setKaProdi(String kaProdi) {
        this.kaProdi = kaProdi;
    }

    public ArrayList getListKelas() {
        return listKelas;
    }

    public void setListKelas(ArrayList listKelas) {
        this.listKelas = listKelas;
    }
    
    public void addKelas(Kelas k){
        listKelas.add(k);
    }

    @Override
    public String toString() {
        return "\nProdi{" + "namaProdi=" + namaProdi + ", kaProdi=" + kaProdi + "\n, listKelas=\n" + listKelas + '}';
    }
    
}

