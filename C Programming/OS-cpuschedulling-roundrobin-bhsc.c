#include <stdio.h>
#include <stdlib.h>

main()
{
    int exit; // Keluar looping while
    int n, i, j, burst[20], quantum, gantt[20][20], lastg[20][20], waiting[20];
    int jumlah = 0; // Sebagai index burst untuk mencari gannt chart
    float total = 0, everage; // Average waiting time

    printf("Masukkan banyak proses (MAX 20): "); fflush(stdin); scanf("%i", &n);
    printf("Masukkan time quantum : "); fflush(stdin); scanf("%i", &quantum);

    for(i=0;i<n;i++) // Input
    {
        printf("Burst time P[%i] : ", i); fflush(stdin); scanf("%i", &burst[i]);
    }

    for(i=-1;i<n;i++) // Inisialisasi pertama kali
    {
        lastg[-1][i] = 0;
        waiting[i] = 0;
    }

    i = 0;
    while(exit != n) // Keluar jika sudah habis semua
    {
        exit = 0;
        for(j=0;j<n;j++)
        {
            if(burst[j] == 0){
                exit++;
            }
            else {
                gantt[i][j] = jumlah;
                waiting[j] += gantt[i][j] - lastg[i-1][j];
                if(burst[j] > quantum){
                    burst[j] -= quantum;
                    jumlah += quantum;
                    lastg[i][j] = jumlah;
                }
                else {
                    jumlah += burst[j];
                    burst[j] = 0;
                    lastg[i][j] = jumlah;
                    gantt[i+1][j] = NULL;
                    lastg[i+1][j] = NULL;
                }
            }
        }
        i++;
    }

    for(i=0;i<n;i++) // Menghitung everage
    {
        total += waiting[i];
    }
    everage = total / n;

    printf("\nProses\tWaiting time\tGantt chart\n"); // Output
    printf("===============================================\n");
    for(i=0;i<n;i++)
    {
        printf("P[%i]\t%i\t\t", i, waiting[i]);
        for(j=0;j<20;j++)
        {
            if(lastg[j][i] == NULL){
                goto selesai;
            }
            else {
                printf("%i-%i ", gantt[j][i], lastg[j][i]);
            }
        }
        selesai :
        printf("\n");
    }
    printf("===============================================\n");
    printf("Average waiting time = %.2f\n", everage);
} 
