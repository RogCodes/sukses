#include <stdio.h>
#include <stdlib.h>

int main (void){
/*Pendeklarasian varabel*/
 char kalimat[255]={};
 int i,nA=0,nI=0,nU=0,nE=0,nO=0;

 printf("\nPROGRAM MENGHITUNG HURUF HIDUP\n==============================\n\n");
 printf("Masukkan Kalimat :\n\n");
 gets(kalimat);
/*Rumus perhitungan*/
 for(i=0;i<=255;i++){
  if(kalimat[i]=='a'||kalimat[i]=='A'){
   nA++;
  }else if(kalimat[i]=='i'||kalimat[i]=='I'){
   nI++;
  }else if(kalimat[i]=='u'||kalimat[i]=='U'){
   nU++;
  }else if(kalimat[i]=='e'||kalimat[i]=='E'){
   nE++;
  }else if(kalimat[i]=='o'||kalimat[i]=='O'){
   nO++;
  }
 }

 printf("\n\nTerdapat Huruf A Sebanyak : %d Huruf",nA);
 printf("\nTerdapat Huruf I Sebanyak : %d Huruf",nI);
 printf("\nTerdapat Huruf U Sebanyak : %d Huruf",nU);
 printf("\nTerdapat Huruf E Sebanyak : %d Huruf",nE);
 printf("\nTerdapat Huruf O Sebanyak : %d Huruf\n\n",nO);

 return EXIT_SUCCESS;
}