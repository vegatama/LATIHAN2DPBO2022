from Hardware import Hardware

class Memory(Hardware):
	# atribut private
	frequency = ""
	memorySize = ""
	supportsCuda = ""

	# getter/setter
	def setfrequency(self, frequency):
		self.frequency = frequency

	def getfrequency(self):
		return self.frequency

	def setmemorySize(self, memorySize):
		self.memorySize = memorySize

	def getmemorySize(self):
		return self.memorySize
	
	def setsupportsCuda(self, supportsCuda):
		self.supportsCuda = supportsCuda

	def getsupportsCuda(self):
		return self.supportsCuda
