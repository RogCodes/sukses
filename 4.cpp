#include<stdio.h>
#include<string.h>

void gantihuruf( char *str, char c1, char c2)
{
    int i;
    int n;

    n=strlen(str);
    for(i=0;i<n;i++)
    {
        if(str[i]==c1)
        str[i]=c2;
    }
}


int main()
{
    char str[20];
    char c1,c2;

    printf("Masukkan kalimat :");
    gets(str);
    printf("Huruf yang akan diganti:");
    scanf("%c",&c1);
    fflush(stdin);
   printf("Huruf yang akan diganti:");
    scanf("%c",&c2);

   gantihuruf( str,c1,c2) ;
    printf("kata menjadi : %s", str);
}