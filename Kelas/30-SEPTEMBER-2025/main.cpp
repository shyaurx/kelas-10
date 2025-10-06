#include <iostream>
using namespace std;

int main()
{
    cout<<"Zodiak";
    int tanggal;
    tanggal = tanggal < 1 || tanggal > 31;{
        cout <<"masukkan tanggal lahir";
    }
    int bulan;
    bulan = bulan < 1 || bulan > 12;{
        cout <<"masukkan bulan lahir";
    }
}
String getZodiac(int hari, int bulan) {
    if ((bulan == 1 && hari <= 20) || (bulan == 12 && hari >= 22)) 
        return "Capricorn";
    else if ((bulan == 1 && hari >= 21) || (bulan == 2 && hari <= 18)) 
        return "Aquarius";
    else if ((bulan == 2 && hari >= 19) || (bulan == 3 && hari <= 20)) 
        return "Pisces";
    else if ((bulan == 3 && hari >= 21) || (bulan == 4 && hari <= 20)) 
        return "Aries";
    else if ((bulan == 4 && hari >= 21) || (bulan == 5 && hari <= 20)) 
        return "Taurus";
    else if ((bulan == 5 && hari >= 21) || (bulan == 6 && hari <= 20)) 
        return "Gemini";
    else if ((bulan == 6 && hari >= 21) || (bulan == 7 && hari <= 22)) 
        return "Cancer";
    else if ((bulan == 7 && hari >= 23) || (bulan == 8 && hari <= 22)) 
        return "Leo";
    else if ((bulan == 8 && hari >= 23) || (bulan == 9 && hari <= 22)) 
        return "Virgo";
    else if ((bulan == 9 && hari >= 23) || (bulan == 10 && hari <= 22)) 
        return "Libra";
    else if ((bulan == 10 && hari >= 23) || (bulan == 11 && hari <= 22)) 
        return "Scorpio";
    else if ((bulan == 11 && hari >= 23) || (bulan == 12 && hari <= 21)) 
        return "Sagittarius";
    else 
        return "Tanggal tidak valid";
}
