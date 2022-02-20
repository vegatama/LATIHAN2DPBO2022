public class Main {
    public static void main(String[] args){
        // instansiasi objek
        Memory objek = new Memory();
        objek.setprice("$100");
        objek.setidProduct("994959");
        objek.setbrand("Kingston");
        objek.setmodel("Hyperx");
        objek.setfrequency("3200Mhz");
        objek.setmemorySize("16GB");
        objek.setsupportsCuda("yes");

        // output
        System.out.println("price : " + objek.getprice());
        System.out.println("idProduct : " + objek.getidProduct());
        System.out.println("brand : " + objek.getbrand());
        System.out.println("model : " + objek.getmodel());
        System.out.println("frequency : " + objek.getfrequency());
        System.out.println("memorySize : " + objek.getmemorySize());
        System.out.println("supportsCuda : " + objek.getsupportsCuda());
    }
}
