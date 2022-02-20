from Memory import Memory

# instansiasi objek
objek = Memory()
objek.setprice("$100")
objek.setidProduct("994959")
objek.setbrand("Kingston")
objek.setmodel("Hyperx")
objek.setfrequency("3200Mhz")
objek.setmemorySize("16GB")
objek.setsupportsCuda("yes")


# output
print("price : " + str(objek.getprice()))
print("idProduct : " + str(objek.getidProduct()))
print("brand : " + str(objek.getbrand()))
print("model : " + str(objek.getmodel()))
print("frequency : " + str(objek.getfrequency()))
print("memorySize : " + str(objek.getmemorySize()))
print("supportsCuda : " + str(objek.getsupportsCuda()))