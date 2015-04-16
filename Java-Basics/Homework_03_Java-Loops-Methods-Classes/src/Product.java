public class Product implements Comparable<Product>{

	public String name;
	public double price;

	public Product(String name, double price) {
		this.name = name;
		this.price = price;
	}

	public int compareTo(Product compareFruit) {

		double otherPrice = ((Product) compareFruit).price;

		if (this.price > otherPrice)
			return 1;
		else 
	    if (this.price == otherPrice)
			return 0;
		return -1;
	}
}
