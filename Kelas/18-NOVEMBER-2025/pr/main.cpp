#include <iostream>
using namespace std;

int main()
{
    cout << "Perulangan !" << endl << endl;
    cout << "Program perulangan for" << endl;

    int tinggi;
    cout << "Inputkan tinggi segitiga sama kaki : ";
    cin >> tinggi;

    for (int i = 1; i <= tinggi; i++)
    {
        for (int k = 1; k <= tinggi - i; k++)
        {
            cout << " ";
        }

        for (int j = 1; j <= (2 * i - 1); j++)
        {
            cout << "+";
        }

        cout << endl;
    }

    return 0;
}
