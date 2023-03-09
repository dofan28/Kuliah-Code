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
public class KotaComparator implements Comparator<Mahasiswa>{

    @Override
    public int compare(Mahasiswa o1, Mahasiswa o2) {
       return o1.getKota().compareTo(o2.getKota());
    }
    

    
    
}
