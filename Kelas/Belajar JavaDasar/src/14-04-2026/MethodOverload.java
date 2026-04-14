
package belajaroop;


public class MethodOverload {
//    method 1: 2 parameter
    static int perkalian(int a, int b){
          return a * b;
    }
    
//    method 2: 3 parameter
    static int perkalian(int a, int b, int c){
        return a * b * c;
    }
    
//    method 3: 4 tipe double
    static double perkalian(double a, double b){
        return a * b;
    }
    
    
    public static void main(String[] args) {
        System.out.println("Hasil 1: " + perkalian(2, 3));
        System.out.println("Hasil 2: " + perkalian(2, 3, 4));
        System.out.println("Hasil 3: " + perkalian(2.5,3.5));
    }
    
}
