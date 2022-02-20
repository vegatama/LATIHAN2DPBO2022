class Memory extends Hardware{
	// atribut private
    private String frequency;
	private String memorySize;
	private String supportsCuda;

	// setter/getter
	public void setfrequency(String frequency) {
		this.frequency = frequency;
	}
	public String getfrequency() {
		return frequency;
	}
	public void setmemorySize(String memorySize) {
		this.memorySize = memorySize;
	}
	public String getmemorySize() {
		return memorySize;
	}
	public void setsupportsCuda(String supportsCuda) {
		this.supportsCuda = supportsCuda;
	}
	public String getsupportsCuda() {
		return supportsCuda;
	}
}