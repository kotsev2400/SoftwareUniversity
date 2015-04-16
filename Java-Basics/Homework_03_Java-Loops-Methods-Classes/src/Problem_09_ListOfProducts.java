import java.io.BufferedReader;
import java.io.BufferedWriter;
import java.io.FileReader;
import java.io.FileWriter;
import java.util.ArrayList;
import java.util.Collections;
import java.util.List;

public class Problem_09_ListOfProducts {
	public static void main(String[] args) {
		ArrayList<Product> products = new ArrayList<Product>();

		BufferedReader reader;
		BufferedWriter writer = null;

		try {
			reader = new BufferedReader(new FileReader("src/Input.txt"));
			String line = null;
			while ((line = reader.readLine()) != null) {
				String[] productStats = line.split(" ");
				products.add(new Product(productStats[0], Double.parseDouble(productStats[1])));
			}
			Collections.sort(products);

			writer = new BufferedWriter(new FileWriter("src/Output.txt"));
			for (Product product : products) {
				writer.write(product.name + " " + product.price + "\n");
			}
			writer.close();

		} catch (Exception e) {
			System.out.println("Error");
		}
	}
}
