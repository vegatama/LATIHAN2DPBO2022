#include "Hardware.cpp"

class Memory: public Hardware{
	private:
	/*atribut private*/
		string frequency;
		string memorySize;
		string supportsCuda;

	public:
		/*constructor*/
		Memory(){
			this->frequency = this->memorySize = this->supportsCuda = "";
		}

		/*getter/setter*/
		void setfrequency(string frequency){
			this->frequency = frequency;
		}
		string getfrequency(){
			return this->frequency;
		}
		void setmemorySize(string memorySize){
			this->memorySize = memorySize;
		}
		string getmemorySize(){
			return this->memorySize;
		}
		void setsupportsCuda(string supportsCuda){
			this->supportsCuda = supportsCuda;
		}
		string getsupportsCuda(){
			return this->supportsCuda;
		}
		/*destructor*/
		~Memory(){}
};