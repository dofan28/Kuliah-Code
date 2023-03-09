/* File program : statis.c
Contoh variabel statis */
#include <stdio.h>
void fung_y(void);
int main()
{
 int y = 20;
 fung_y();
 fung_y();
 printf("Nilai y dalam main() = %d\n", y);
}
void fung_y(void)
{
    int y;
    y++;
    printf("Nilai y dalam fung_y() = %d\n", y);
}