/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Classes/Class.java to edit this template
 */
package minggu_12;

import java.util.ArrayList;
import java.util.Collections;

/**
 *
 * @author Bagus_Anggriawan
 */
public class Kelas {
    private String namaKelas;
    private String dosenWali;
    private ArrayList listMhs;

    public Kelas(String namaKelas, String dosenWali) {
        this.namaKelas = namaKelas;
        this.dosenWali = dosenWali;
        listMhs= new ArrayList();
    }

    
    public Kelas(String namaKelas, String dosenWali, ArrayList listMhs) {
        this.namaKelas = namaKelas;
        this.dosenWali = dosenWali;
        this.listMhs = listMhs;
    }

    public String getNamaKelas() {
        return namaKelas;
    }

    public void setNamaKelas(String namaKelas) {
        this.namaKelas = namaKelas;
    }

    public String getDosenWali() {
        return dosenWali;
    }

    public void setDosenWali(String dosenWali) {
        this.dosenWali = dosenWali;
    }

    public ArrayList getListMhs() {
        return listMhs;
    }

    public void setListMhs(ArrayList listMhs) {
        this.listMhs = listMhs;
    }
    public void addMhs (Mahasiswa m){
       listMhs.add(m); 
    }
    public void sortNama(){
        Collections.sort(listMhs);
    }
    public void sortKota(){
        Collections.sort(listMhs,new KotaComparator());
    }
    
    public Mahasiswa getListMhs(int index){
        return (Mahasiswa) listMhs.get(index);
    }
    
    public void setListMhs(int index, Mahasiswa mhs){
        listMhs.set(index, mhs);
    }
    
    
    
    @Override
    public String toString() {
        return "Kelas{" + "namaKelas=" + namaKelas + ", dosenWali=" + dosenWali + "\n, listMhs=\n" + listMhs + '}';
    }
    
    
}
