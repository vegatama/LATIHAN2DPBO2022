#include "Product.cpp"

class Hardware: public Product{
	private:
	/*atribut private*/
		string brand;
		string model;

	public:
		/*constructor*/
		Hardware(){
			this->brand = this->model = "";
		}

		/*getter/setter*/
		void setbrand(string brand){
			this->brand = brand;
		}
		string getbrand(){
			return this->brand;
		}
		void setmodel(string model){
			this->model = model;
		}
		string getmodel(){
			return this->model;
		}
		/*destructor*/
		~Hardware(){}
};