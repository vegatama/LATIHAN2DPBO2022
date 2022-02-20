#include "Memory.cpp"

int main(){
	/*instansiasi objek*/
	Memory objek;
	objek.setprice("$100");
    objek.setidProduct("994959");
    objek.setbrand("Kingston");
    objek.setmodel("Hyperx");
    objek.setfrequency("3200Mhz");
    objek.setmemorySize("16GB");
    objek.setsupportsCuda("yes");

	/*output*/
    cout << "price : " << objek.getprice() << endl;
    cout << "idProduct : " << objek.getidProduct() << endl;
    cout << "brand : " << objek.getbrand() << endl;
    cout << "model : " << objek.getmodel() << endl;
    cout << "frequency : " << objek.getfrequency() << endl;
    cout << "memorySize : " << objek.getmemorySize() << endl;
    cout << "supportsCuda : " << objek.getsupportsCuda() << endl;
	
	return 0;
}