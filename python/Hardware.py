from Product import Product

class Hardware(Product):
	# atribut private
	brand = ""
	model = ""

	# getter/setter
	def setbrand(self, brand):
		self.brand = brand

	def getbrand(self):
		return self.brand

	def setmodel(self, model):
		self.model = model

	def getmodel(self):
		return self.model
	