package com.minggu2;

public class Mahasiswa {
    int nrp;
    String nama;


    public Mahasiswa(int nrp, String nama){
        this.nrp = nrp;
        this.nama = nama;

    }

    // public String showMahasiswa(){
    //     return this.nrp +  " " + this.nama;
    // }
     public String toString(){
         return this.nrp +  " " + this.nama;
     }

}
