package KelasPakTri;


import java.util.Scanner;

public class BelajarInputOutput {

    public static void main(String[] args) {
        
        Scanner inputUser= new Scanner(System.in) ;
            System.out.println("Inputkan Nama Anda: ");
        String nama= inputUser.nextLine();
            System.out.println("Nama Yang di Input: "+nama);
            
            System.out.println("Berapakah Nomor Absen Anda: ");
        int absen= inputUser.nextInt();
            System.out.println("Nomer Absen Anda: "+absen);
            
            System.out.println("Berapakah Uang Saku Anda: ");
        double uang= inputUser.nextDouble();
            System.out.println("Uang Sakuku Adalah RP: "+uang);
            
        Scanner masukkan= new Scanner(System.in);
            System.out.println("Character Apa Yang Anda Suka: ");
        String simbol= masukkan.nextLine();
            System.out.println("Character Yang Kamu Suka: "+simbol);
    }
    
}
