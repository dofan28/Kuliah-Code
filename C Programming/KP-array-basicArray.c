/* File program : nilai_tes.c
Pemakaian array utk menyimpan sejumlah nilai tes */
#include <stdio.h>
#define MAKS 5

int main(){
    int i;
    float total = 0, rata;
    float nilai_tes[MAKS]; /* deklarasi array */

 for(i=0; i < MAKS; i++) /* pemasukan data nilai_tes */
	{
        printf("Nilai tes ke-%d : ", i+1);
		scanf("%f", &nilai_tes[i]);
        /* menghitung jumlah seluruh nilai */
		total = total + nilai_tes[i];
	}
    rata = total / MAKS; /* hitung nilai rata-rata */
    /* cetak nilai rata-rata */
    printf("\n Nilai rata-rata = %g \n", rata);
}
