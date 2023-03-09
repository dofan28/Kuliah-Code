#include<stdio.h>

void fung_1(void);

int main(){
    int i=20;
    fung_1();
    printf("nilai i di dalam main() = %d\n", i);
}

void fung_1(void){
    int i = 11;
    printf("Nilai i di dalam fungsi_1() = %d\n", i);
}