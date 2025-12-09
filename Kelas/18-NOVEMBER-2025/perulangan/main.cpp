#include <iostream>

using namespace std;

int main()
{
    cout << "Perulangan!" << endl;

    int perulangan;
    cout << "inputkan berapa kali perulangan : ";
    cin >> perulangan;

    for (int i=1;i<=perulangan ;i++ )
    {
        for (int j=1;j<=perulangan ;j++ )
        {
            cout << "ini i ke- " <<i<< "dan ini j ke- " <<j;
            cout << endl;
        }
    }
    return 0;
}
