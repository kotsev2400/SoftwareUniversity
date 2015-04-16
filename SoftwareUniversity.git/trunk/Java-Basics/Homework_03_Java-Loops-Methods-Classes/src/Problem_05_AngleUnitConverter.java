import java.util.ArrayList;
import java.util.Scanner;

public class Problem_05_AngleUnitConverter {
	public static double converter(double value, String type) {
		if (type.equals("rad")) {
			return Math.toDegrees(value);
		} else {
			return Math.toRadians(value);
		}
	}
	
	public static void main(String[] args) {
		ArrayList<Double> convertList = new ArrayList<>();
		
		Scanner scan = new Scanner(System.in);
		int number = scan.nextInt();
		
		for (int i = 0; i < number; i++) {
			double value = scan.nextDouble();
			String type = scan.next();
			convertList.add(converter(value, type));
		}
		for (Double key : convertList) {
			System.out.printf("%.6f\n", key);
		}
	}
}
