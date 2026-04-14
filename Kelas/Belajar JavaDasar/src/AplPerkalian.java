
public class AplPerkalian {

    public static void main(String[] args) {
        PerkalianFunction apl = new PerkalianFunction();
        int hasil1 = apl.Perkalian(5);
        System.out.println("Hasilnya adalah: "+hasil1);
        int hasil2 = apl.Perkalian(5, 10);
        System.out.println("Hasilnya adalah: "+hasil2);
        int hasil3 =apl.Perkalian(5, 10, 15);
        System.out.println("Hasilnya adalah: "+hasil3);
    }
    
}
