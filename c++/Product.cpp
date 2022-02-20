#include <iostream>
#include <string>

using namespace std;

class Product{
	private:
	/*atribut private*/
		string price;
		string idProduct;

	public:
		/*constructor*/
		Product(){
			this->price = this->idProduct = "";
		}

		/*getter/setter*/
		void setprice(string price){
			this->price = price;
		}
		string getprice(){
			return this->price;
		}
		void setidProduct(string idProduct){
			this->idProduct = idProduct;
		}
		string getidProduct(){
			return this->idProduct;
		}
		/*destructor*/
		~Product(){}
};