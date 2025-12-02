#include <iostream>

using namespace std;

int main()
{
    cout << "Perulangan !" << endl<<endl;
    cout << "Program perulangan for" << endl;

    int tinggi;
    cout << "Inputkan tinggi segitiga siku-siku :";
    cin>> tinggi;

    for (int i=1;i<=tinggi ;i++ )
    {
        //nyalakan kode berikut ini, jika ingin segitiga siku-siku kebalik
        //for (int k=1;k<=i-tinggi ;k++ )
        //{
            //cout<<"";
        //}
        //for (int j=1;j>=i ;j--)
        for (int j=1;j<=i ;j++ )
        {
            //cout << "Ini i ke- "<<i<<"dan ini j ke- "<<j;
            cout<<"+";
        }
        cout<<endl;
    }
    return 0;
}
