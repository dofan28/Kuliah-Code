#include <stdio.h>
int i = 273; 			/* variabel eksternal */
void tambah(void);
int main()
{
 printf("Nilai awal i = %d\n", i);
 i += 7;
 printf("Nilai i kini = %d\n", i);
 tambah();
 printf("Nilai i kini = %d\n", i);
 tambah();
 printf("Nilai i kini = %d\n", i);
}
void tambah(void)
{
 i++;
}